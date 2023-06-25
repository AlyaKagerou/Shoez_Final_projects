<h1 class="mt-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row mt-2">
	<div class="col-md-6">
		<div class="bg-card p-3">
			<div class="card-title">Masukkan Data Dibawah ini!</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="kategori" class="ft">Kategori</label>
								<input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan Kategori">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="nama_produk" class="ft">Nama Produk</label>
								<input type="text" class="form-control" id="produk" name="produk" placeholder="Masukkan Produk">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="harga" class="ft">Harga</label>
								<input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="harga" class="ft">Stok</label>
								<input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok Produk">
							</div>
						</div>
					</div>
					<button class="btn butt-add"><i class="bx bxs-save me-2"></i>Tambah Produk</button>
					<button class="btn btn-danger"><i class="bx bx-x me-2"></i>Batal</button>
					<a class="btn btn-secondary" href="<?= base_url('produk');?>"><i class="bx bx-left-arrow-alt me-2"></i>Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- main content -->
