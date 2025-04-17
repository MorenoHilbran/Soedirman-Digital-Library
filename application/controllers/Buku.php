<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Buku');
        $this->load->library('pagination');
        $this->load->helper('url');
    }

    public function index() {
        $search = $this->input->get('search');
        $kategori = $this->input->get('kategori');
        
        // Konfigurasi pagination
        $config = [
            'base_url' => base_url('buku/index'),
            'total_rows' => $this->Model_Buku->count_books($search, $kategori),
            'per_page' => 8,
            'reuse_query_string' => TRUE,
            'page_query_string' => TRUE,
            'use_page_numbers' => TRUE,
            'query_string_segment' => 'page',
            
            // Styling
            'full_tag_open' => '<ul class="pagination justify-content-center">',
            'full_tag_close' => '</ul>',
            'first_link' => '&laquo;',
            'last_link' => '&raquo;',
            'first_tag_open' => '<li class="page-item">',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li class="page-item">',
            'last_tag_close' => '</li>',
            'next_link' => '&rsaquo;',
            'next_tag_open' => '<li class="page-item">',
            'next_tag_close' => '</li>',
            'prev_link' => '&lsaquo;',
            'prev_tag_open' => '<li class="page-item">',
            'prev_tag_close' => '</li>',
            'cur_tag_open' => '<li class="page-item active"><span class="page-link">',
            'cur_tag_close' => '</span></li>',
            'num_tag_open' => '<li class="page-item">',
            'num_tag_close' => '</li>',
            'attributes' => ['class' => 'page-link']
        ];
        
        $this->pagination->initialize($config);
        
        $page = (int) ($this->input->get('page') ?: 1);
        $offset = ($page - 1) * $config['per_page'];
        
        // Validasi offset
        if ($offset < 0) {
            $offset = 0;
        }
        
        $data = [
            'books' => $this->Model_Buku->get_books(
                $config['per_page'],
                $offset,
                $search,
                $kategori
            ),
            'kategories' => $this->Model_Buku->get_all_categories(),
            'pagination' => $this->pagination->create_links(),
            'search_query' => $search,
            'selected_category' => $kategori
        ];
        
        $this->load->view('templates/header');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id) {
        $data['book'] = $this->Model_Buku->get_book_detail($id);
        
        if (empty($data['book'])) {
            show_404();
        }
        
        $this->load->view('templates/header');
        $this->load->view('buku/detail', $data);
        $this->load->view('templates/footer');
    }

    // Tambahkan method berikut ke controller Buku

public function edit($id) {
    $data['book'] = $this->Model_Buku->get_book_by_id($id);
    $data['kategories'] = $this->Model_Buku->get_all_categories();
    
    if (empty($data['book'])) {
        show_404();
    }
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
    $this->form_validation->set_rules('kategori_id', 'Kategori', 'required');
    
    if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    } else {
        // Proses upload cover baru jika ada
        $upload_config = array(
            'upload_path' => './uploads/covers/',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size' => 2048,
            'encrypt_name' => TRUE
        );
        
        $this->load->library('upload', $upload_config);
        
        $cover_name = $data['book']->cover;
        if ($this->upload->do_upload('cover')) {
            // Hapus cover lama jika ada
            if ($cover_name) {
                $old_cover = FCPATH.'uploads/covers/'.$cover_name;
                if (file_exists($old_cover)) {
                    unlink($old_cover);
                }
            }
            
            $upload_data = $this->upload->data();
            $cover_name = $upload_data['file_name'];
        }
        
        $book_data = array(
            'judul' => $this->input->post('judul'),
            'pengarang' => $this->input->post('pengarang'),
            'sinopsis' => $this->input->post('sinopsis'),
            'kategori_id' => $this->input->post('kategori_id'),
            'cover' => $cover_name
        );
        
        $this->Model_Buku->update_book($id, $book_data);
        
        $this->session->set_flashdata('success', 'Buku berhasil diperbarui!');
        redirect('buku');
        }
    }

    public function delete($id) {
        if (!$this->Model_Buku->get_book_by_id($id)) {
            show_404();
        }
        
        $this->Model_Buku->delete_book($id);
        
        $this->session->set_flashdata('success', 'Buku berhasil dihapus!');
        redirect('buku');
    }
    public function tambah() {
        $data['kategories'] = $this->Model_Buku->get_all_categories();
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('buku/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            // Buat folder uploads/covers jika belum ada
            if (!is_dir('./uploads/covers')) {
                mkdir('./uploads/covers', 0777, true);
            }
            
            // Konfigurasi upload
            $config['upload_path'] = './uploads/covers/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // 2MB
            $config['encrypt_name'] = TRUE;
            
            $this->load->library('upload', $config);
            
            $cover_name = '';
            $upload_error = '';
            
            if (!empty($_FILES['cover']['name'])) {
                if ($this->upload->do_upload('cover')) {
                    $upload_data = $this->upload->data();
                    $cover_name = $upload_data['file_name'];
                } else {
                    $upload_error = $this->upload->display_errors();
                }
            }
            
            if (!empty($upload_error)) {
                $data['error'] = $upload_error;
                $this->load->view('templates/header');
                $this->load->view('buku/tambah', $data);
                $this->load->view('templates/footer');
                return;
            }
            
            $book_data = [
                'judul' => $this->input->post('judul'),
                'pengarang' => $this->input->post('pengarang'),
                'sinopsis' => $this->input->post('sinopsis'),
                'kategori_id' => $this->input->post('kategori_id'),
                'cover' => $cover_name,
                'created_at' => date('Y-m-d H:i:s')
            ];
            
            // Panggil model untuk menyimpan data
            $result = $this->Model_Buku->insert_book($book_data);
            
            if ($result) {
                $this->session->set_flashdata('success', 'Buku berhasil ditambahkan!');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan buku ke database!');
            }
            
            redirect('buku');
        }
    }
}