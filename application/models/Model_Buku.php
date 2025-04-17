<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Buku extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Ambil semua buku dengan pagination
    public function get_books($limit, $start, $search = null, $kategori_id = null) {
        $this->db->select('b.*, kb.nama as kategori_nama');
        $this->db->from('buku b');
        $this->db->join('kategori_buku kb', 'b.kategori_id = kb.id', 'left');
        
        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('b.judul', $search);
            $this->db->or_like('b.pengarang', $search);
            $this->db->group_end();
        }
        
        if (!empty($kategori_id)) {
            $this->db->where('b.kategori_id', $kategori_id);
        }
        
        $this->db->limit($limit, $start);
        $this->db->order_by('b.created_at', 'DESC');
        
        return $this->db->get()->result();
    }

    // Hitung total buku untuk pagination
    public function count_books($search = null, $kategori_id = null) {
        $this->db->from('buku b');
        
        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('b.judul', $search);
            $this->db->or_like('b.pengarang', $search);
            $this->db->group_end();
        }
        
        if (!empty($kategori_id)) {
            $this->db->where('b.kategori_id', $kategori_id);
        }
        
        return $this->db->count_all_results();
    }

    // Ambil detail buku
    public function get_book_detail($id) {
        $this->db->select('b.*, kb.nama as kategori_nama');
        $this->db->from('buku b');
        $this->db->join('kategori_buku kb', 'b.kategori_id = kb.id', 'left');
        $this->db->where('b.id', $id);
        return $this->db->get()->row();
    }

    // Ambil semua kategori
    public function get_all_categories() {
        return $this->db->get('kategori_buku')->result();
    }
    // Tambahkan method berikut ke Model_Buku
    public function get_book_by_id($id) {
        return $this->db->get_where('buku', ['id' => $id])->row();
    }

    public function update_book($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('buku', $data);
    }

    public function delete_book($id) {
        // Ambil data cover sebelum menghapus
        $book = $this->get_book_by_id($id);
        
        // Hapus file cover jika ada
        if ($book->cover) {
            $cover_path = FCPATH.'uploads/covers/'.$book->cover;
            if (file_exists($cover_path)) {
                unlink($cover_path);
            }
        }
        
        // Hapus dari database
        $this->db->where('id', $id);
        return $this->db->delete('buku');
    }
    public function insert_book($data) {
        return $this->db->insert('buku', $data);
    }
}