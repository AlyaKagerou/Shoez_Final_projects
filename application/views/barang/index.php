<h1 class="mt-3 title">Data Barang</h1>

<!-- main Content -->
<div class="col-12 col-lg">
    <div class="butt mt-3">
        <button class="btn butt-add"><i class='bx bx-plus me-2'></i>Tambah Barang</button>
        <button class="btn btn-danger"><i class='bx bxs-file-pdf me-2'></i>Export</button>
    </div>
    <div class="bg-card-table mt-4 p-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Beli</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_barang as $barang): ?>
                <tr>
                    <td><?= $no++ ?></td>
					<td><?= $barang->kode_barang ?></td>
				    <td><?= $barang->nama_barang ?></td>
                    <td>Rp <?= number_format($barang->harga_beli, 0, ',', '.') ?></td>
					<td>Rp <?= number_format($barang->harga_jual, 0, ',', '.') ?></td>
				    <td><?= $barang->stok ?> <?= strtoupper($barang->satuan) ?></td>
                    <td>
						<a type="button" class="btn btn-info" href="<?= base_url('barang/ubah/' . $barang->id)?>"><i class="bx bxs-pencil"></i></a>
                        <a type="button" class="btn btn-danger" href="<?= base_url('barang/hapus/'. $barang->id)?>"><i class="bx bxs-trash"></i></a>
					</td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!-- main Content -->