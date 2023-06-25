<h1 class="mt-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row mt-2">
    <div class="col-md-6">
        <div class="bg-card p-3">
            <div class="card-title ">Masukkan data di bawah ini</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
						<label for="kategori_new" class="ft">Kategori</label>
					    <input type="text" class="form-control mt-2" id="kategori_new" name="kategori_new" placeholder="Masukkan Kategori Baru">
                        <?= form_error('kategori_new', '<small class="text-danger pl-3">', '</small>');?>
					</div>
                    <button class="btn butt-add" type="submit"><i class="bx bx-plus me-2"></i>Tambah Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- main content -->