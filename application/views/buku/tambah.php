<div class="container">
    <h2>Tambah Buku Baru</h2>
    
    <!-- Tampilkan flashdata -->
    <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error') ?>
    </div>
    <?php endif; ?>
    
    <!-- Tampilkan error validasi -->
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
    
    <!-- Tampilkan pesan error upload (jika ada) -->
    <?php if (isset($error)): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
    <?php endif; ?>
    
    
    <form action="<?= base_url('buku/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori_id" class="form-control" required>
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategories as $kategori): ?>
                <option value="<?= $kategori->id ?>"><?= $kategori->nama ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label>Sinopsis</label>
            <textarea name="sinopsis" class="form-control" rows="5"></textarea>
        </div>
        
        <div class="form-group mt-3 mb-3">
            <label>Cover Buku (Opsional)</label>
            <input type="file" name="cover" class="form-control-file">
            <small class="text-muted">Format: JPG/PNG (Max 2MB)</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('buku') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>