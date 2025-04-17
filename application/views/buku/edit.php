<div class="container mt-4">
    <h2>Edit Buku</h2>
    
    <?php if (validation_errors()): ?>
    <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
    </div>
    <?php endif; ?>
    
    <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
    <?php endif; ?>
    
    <form action="<?php echo base_url('buku/edit/'.$book->id); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" 
                   value="<?php echo set_value('judul', $book->judul); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" 
                   value="<?php echo set_value('pengarang', $book->pengarang); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select class="form-select" id="kategori_id" name="kategori_id" required>
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategories as $kategori): ?>
                <option value="<?php echo $kategori->id; ?>" 
                    <?php echo set_select('kategori_id', $kategori->id, $book->kategori_id == $kategori->id); ?>>
                    <?php echo htmlspecialchars($kategori->nama); ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4"><?php 
                echo set_value('sinopsis', $book->sinopsis); 
            ?></textarea>
        </div>
        
        <div class="mb-3">
            <label for="cover" class="form-label">Cover Buku</label>
            <?php if ($book->cover): ?>
            <div class="mb-2">
                <img src="<?php echo base_url('uploads/covers/'.$book->cover); ?>" 
                     class="img-thumbnail" style="max-height: 200px;">
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="remove_cover" name="remove_cover">
                    <label class="form-check-label" for="remove_cover">
                        Hapus cover saat disimpan
                    </label>
                </div>
            </div>
            <?php endif; ?>
            <input type="file" class="form-control" id="cover" name="cover">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah cover</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?php echo base_url('buku'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>