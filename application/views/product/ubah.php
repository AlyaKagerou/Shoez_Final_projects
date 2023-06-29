<h1 class="mt-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row mt-2">
	<div class="col-md-6">
		<div class="bg-card p-3">
			<div class="card-title">Masukkan Data Dibawah ini!</div>
			<div class="card-body">
			<?= $this->session->flashdata('message'); ?>
				<form action="" method="post">
                    <input type="hidden" name="id" value="<?= $produk['id'];?>">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="kode_barang" class="ft">Kode Produk</label>
								<input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" autocomplete="off"  class="form-control" value="<?= mt_rand(10000000, 99999999) ?>" maxlength="8" readonly value="<?= $produk['kode_barang'];?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="nama_barang" class="ft">Nama Barang</label>
								<input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Produk" value="<?= $produk['nama_barang'];?>">
								<?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>');?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="harga_beli" class="ft">Harga Beli</label>
								<input type="text" class="form-control" id="harga_beli" name="harga_beli" placeholder="Masukkan Harga Beli" value="<?= $produk['harga_jual'];?>">
								<?= form_error('harga_beli', '<small class="text-danger pl-3">', '</small>');?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="harga-jual" class="ft">Harga Jual</label>
								<input type="text" class="form-control" id="harga_jual" name="harga_jual" placeholder="Masukkan Harga Jual" value="<?= $produk['harga_beli'];?>">
								<?= form_error('harga_jual', '<small class="text-danger pl-3">', '</small>');?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="stok" class="ft">Stok</label>
								<input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok Produk" value="<?= $produk['stok'];?>">
								<?= form_error('stok', '<small class="text-danger pl-3">', '</small>');?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="satuan" class="ft">Satuan</label>
								<input type="text" class="form-control" id="satuan" name="satuan" value="pcs" readonly>
							</div>
						</div>
					</div>
					<button class="btn butt-add" name="ubah" type="submit"><i class="fa-solid fa-floppy-disk fw me-2"></i>Simpan Produk</button>
					<button class="btn btn-danger"><i class="fa-solid fa-xmark fw me-2"></i>Batal</button>
					<a class="btn btn-secondary" href="<?= base_url('product');?>"><i class="fa-solid fa-arrow-left fw me-2"></i>Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- main content -->