<!-- Search Form dengan Tema Militer -->
<div class="row mb-4">
    <div class="col-md-10 mx-auto">
        <form action="<?= base_url('book') ?>" method="get">
            <div class="input-group shadow-sm">
                <!-- Input Pencarian -->
                <span class="input-group-text bg-dark text-white border-dark">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-dark" name="search" placeholder="Lakukan pencarian buku yang anda inginkan..." 
                       value="<?= html_escape($search_query) ?>" style="background-color: #f8f9fa;">
                
                <!-- Dropdown Kategori -->
                <span class="input-group-text bg-dark text-white border-dark">
                    <i class="fas fa-tags"></i>
                </span>
                <select class="form-select border-dark" name="kategori" style="max-width: 200px; background-color: #f8f9fa;">
                    <option value="">All Categories</option>
                    <?php foreach($kategories as $kategori): ?>
                    <option value="<?= $kategori->id ?>" 
                        <?= ($selected_category == $kategori->id ? 'selected' : '') ?>>
                        <?= html_escape($kategori->nama) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                
                <!-- Tombol Cari -->
                <button class="btn btn-danger" type="submit" style="background: linear-gradient(135deg, #8B0000 0%, #B22222 100%);">
                    <i class="fas fa-bullseye me-1"></i> Search!
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    /* Efek hover untuk tombol */
    .btn-danger:hover {
        background: linear-gradient(135deg, #B22222 0%, #8B0000 100%) !important;
        transform: translateY(-1px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    /* Placeholder custom */
    ::placeholder {
        color: #6c757d !important;
        opacity: 0.7;
    }
    
    /* Border gelap untuk elemen form */
    .border-dark {
        border-color: #343a40 !important;
    }
</style>
<!-- Tambahkan kode ini di bawah form search filter -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card border-warning">
            <div class="card-header bg-warning text-dark">
                <h5 class="card-title mb-0">
                    <i class="fas fa-star me-2"></i>Buku Baru Andalan, Langsung Jadi Serbuan!
                </h5>
            </div>
            <div class="card-body" style="background: linear-gradient(to right, #fff8e1, #ffffff);">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="text-dark mb-3">Buku Andalan April 2025</h4>
                        <p class="text-muted mb-2">
                            <i class="far fa-calendar-alt me-2"></i>1 - 30 April 2025
                        </p>
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fas fa-book-open me-1"></i> Lihat Koleksi
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-none d-md-block">
                        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku Baru" style="height: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Tambahkan di bagian atas sebelum card buku -->
    <div class="mb-4">
        <a href="<?= base_url('buku/tambah') ?>" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah Buku
        </a>
    </div>
<!-- Book Cards -->
<?php if (empty($books)): ?>
<div class="alert alert-info text-center py-4">
    <i class="fas fa-search fa-2x mb-3"></i>
    <h4>Tidak ada buku ditemukan</h4>
    <p class="mb-0">Silahkan coba dengan kata kunci atau kategori yang berbeda</p>
</div>
<?php else: ?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
    <?php foreach($books as $book): ?>

    <div class="col">
        <div class="card h-100 border-0 shadow-sm transition-all hover:shadow-lg">
            <!-- Book Cover with Military Ribbon -->
            <div class="position-relative">
                <?php if(!empty($book->cover)): ?>
                <img src="<?= base_url('uploads/covers/'.$book->cover) ?>" 
                     class="card-img-top object-cover" 
                     alt="<?= html_escape($book->judul) ?>" 
                     style="height: 250px; object-fit: cover; border-bottom: 3px solid #d4af37;">
                <?php else: ?>
                <div class="d-flex flex-column align-items-center justify-content-center py-5 bg-light" 
                     style="height: 250px; border-bottom: 3px solid #d4af37;">
                    <i class="fas fa-book-open fa-4x text-secondary mb-3"></i>
                    <span class="text-muted">No Cover Available</span>
                </div>
                <?php endif; ?>
                
                <!-- Military-style Category Badge -->
                <div class="position-absolute top-0 end-0 mt-2 me-2">
                    <span class="badge rounded-pill bg-dark text-gold px-3 py-2" 
                          style="background-color: #1a3a6a!important; color: #d4af37!important;">
                        <?= html_escape($book->kategori_nama) ?>
                    </span>
                </div>
            </div>
            
            <!-- Card Body -->
            <div class="card-body d-flex flex-column">
                <h5 class="card-title font-weight-bold text-dark mb-2">
                    <?= html_escape($book->judul) ?>
                </h5>
                <p class="card-text text-muted mb-3">
                    <i class="fas fa-user-edit text-primary me-2"></i>
                    <?= html_escape($book->pengarang) ?>
                </p>
                
                <!-- Military-inspired Divider -->
                <hr class="my-2" style="border-top: 1px solid #d4af37;">
                
                <div class="mt-auto">
                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="<?= base_url('book/detail/'.$book->id) ?>" 
                           class="btn btn-sm btn-outline-primary rounded-pill px-3">
                            <i class="fas fa-info-circle me-1"></i> Detail
                        </a>
                        <small class="text-muted" style="font-size: 0.8rem;">
                            <i class="far fa-calendar-alt me-1"></i>
                            <?= date('d M Y', strtotime($book->created_at)) ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>



<!-- Pagination -->
<div class="row mt-4">
    <div class="col-md-12">
        <?= $pagination ?>
    </div>
</div>
<?php endif; ?>

