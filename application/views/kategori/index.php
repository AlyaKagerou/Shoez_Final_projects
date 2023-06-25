<h1 class="mt-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="col-12 col-lg-4">
    <div class="butt mt-3">
        <a href="<?= base_url('kategori/tambah')?>" class="btn butt-add"><i class="bx bx-plus me-2"></i>Tambah Kategori</a>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="bg-card-table mt-4 p-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($all_kategori as $kategori): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kategori['name']?></td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="bx bxs-pencil"></i></a>
                            <a href="<?= base_url();?>kategori/hapus/" <?= $kategori['id'];  ?> class="btn btn-danger" onclick="return confirm('apakah anda yakin??')"><i class="bx bxs-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!-- main content -->