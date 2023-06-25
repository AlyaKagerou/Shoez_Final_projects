<h1 class="mt-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row">
	<div class="col col-md-6">
		<div class="bg-card mt-4 p-3">
			<div class="card-title fs-4">Masukkan Data di bawah ini!</div>
			<div class="card-body">
				<form action="<?= base_url('barang/proses-tambah')?>" id="form-add" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
							<label for="kode_barang"><strong class="ft">Kode Barang</strong></label>
							<input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" autocomplete="off"  class="form-control mt-2" required value="<?= mt_rand(10000000, 99999999) ?>" maxlength="8" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="nama_barang"><strong class="ft">Nama Barang</strong></label>
								<input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" autocomplete="off"  class="form-control mt-2" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="harga_beli"><strong class="ft">Harga Beli</strong></label>
								<input type="number" name="harga_beli" placeholder="Masukkan Harga Beli" autocomplete="off"  class="form-control mt-2" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="harga_jual"><strong class="ft">Harga Jual</strong></label>
								<input type="number" name="harga_jual" placeholder="Masukkan Harga Jual" autocomplete="off"  class="form-control mt-2" required>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="stok"><strong class="ft">Stok</strong></label>
						<input type="number" name="stok" placeholder="Masukkan Stok" autocomplete="off"  class="form-control mt-2" required>
					</div>
					<button type="submit" class="btn butt-add"><i class="bx bxs-save me-2"></i>Simpan</button>
					<button type="reset" class="btn btn-danger"><i class="bx bx-x me-2"></i>Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- main content -->
