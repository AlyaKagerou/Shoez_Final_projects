<h1 class="mt-3 title"><?= $judul; ?></h1>

<!-- main Content -->
<div class="col-12 col-lg">
    <div class="butt mt-3">
        <a href="<?= base_url('produk/tambah')?>" class="btn butt-add"><i class='bx bx-plus me-2'></i>Tambah Barang</a>
        <a href="#" class="btn btn-danger"><i class='bx bxs-file-pdf me-2'></i>Export</a>
    </div>
    <div class="bg-card-table mt-4 p-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
					<td></td>
				    <td></td>
					<td></td>
					<td></td>
					<td>
						<a href="#" class="btn btn-info"><i class="bx bxs-pencil"></i></a>
						<a href="#" class="btn btn-danger"><i class="bx bxs-trash-alt"></i></a>
					</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- main Content -->