
<div class="row">
    <div class="col-md-4">
        <?php if(!empty($book->cover)): ?>
        <img src="<?= base_url('uploads/covers/'.$book->cover) ?>" class="img-fluid rounded" alt="<?= html_escape($book->judul) ?>">
        <?php else: ?>
        <div class="text-center py-5 bg-light rounded">
            <i class="fas fa-book fa-5x text-secondary"></i>
        </div>
        <?php endif; ?>
    </div>
    <div class="col-md-8">
        <h2><?= html_escape($book->judul) ?></h2>
        <p class="text-muted">Oleh: <?= html_escape($book->pengarang) ?></p>
        <span class="badge bg-info mb-3"><?= html_escape($book->kategori_nama) ?></span>
        
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="card-title mb-0">Sinopsis</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><?= nl2br(html_escape($book->sinopsis)) ?></p>
            </div>
        </div>
        
        <div class="mt-3">
            <small class="text-muted">Ditambahkan pada: <?= date('d M Y H:i', strtotime($book->created_at)) ?></small>
        </div>
        
            <div class="d-flex justify-content-between mt-3 mb-3">
        <!-- Tombol Kembali (kiri) -->
        <a href="<?= base_url('buku') ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Buku
        </a>
        
        <!-- Grup Tombol Edit & Hapus (kanan) -->
        <div>
            <a href="<?= base_url('buku/edit/'.$book->id) ?>" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <button onclick="confirmDelete(<?= $book->id ?>)" class="btn btn-danger ml-2">
                <i class="fas fa-trash"></i> Hapus
            </button>
        </div>
    </div>
</div>
</div>
<script>
function confirmDelete(id) {
    if (confirm('Apakah Anda yakin ingin menghapus buku ini?')) {
        window.location.href = '<?= base_url("buku/delete/") ?>' + id;
    }
}
</script>