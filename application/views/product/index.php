
<h1 class="my-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg">
            <a href="<?= base_url('product/tambah');?>" class="btn butt-add"><i class="fa-solid fa-plus fw me-2"></i>Tambah Data</a>
            <?= $this->session->flashdata('message'); ?>
            <div class="bg-card-table mt-3 p-4">
                <div class="row">
                    <div class="col-md-3">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Produk" name="keyword">
                                <button class="btn-search p-2" type="button"><i class="fa-solid fa-magnifying-glass fw" style="color: #fff;"></i></button>
                            </div>
                        </form>
                        <?php if(empty($produk)): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Data Produk <strong>tidak ditemukan.</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($produk as $p): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p['kode_barang']; ?></td>
                            <td><?= $p['nama_barang']; ?></td>
                            <td>Rp <?= number_format($p['harga_beli'], 0, ',', '.') ?></td>
                            <td>Rp <?= number_format($p['harga_jual'], 0, ',', '.') ?></td>
                            <td><?= $p['stok']; ?></td>
                            <td><?= $p['satuan']; ?></td>
                            <td>
                                <a href="<?= base_url();?>product/ubah/<?= $p['id'];?>" class="btn btn-info"><i class="fa-solid fa-pen"></i></a>
						        <a href="<?= base_url();?>product/hapus/<?= $p['id'];?>" class="btn btn-danger" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- main content -->