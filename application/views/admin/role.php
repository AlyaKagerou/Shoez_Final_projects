<h1 class="my-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row">
    <div class="col-lg-4">
        <a href="" class="btn butt-add" data-bs-toggle="modal" data-bs-target="#newRoleModal"><i class="fa-solid fa-plus fw me-2"></i>Tambah Role Baru</a>
        <?= $this->session->flashdata('message'); ?>
        <div class="bg-card-table mt-3 p-4">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($role as $r): ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $r['role']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/roleaccess/'). $r['id'];?>" class="btn btn-warning"><i class="fa-solid fa-user-lock"></i></a>
                            <a href="#" class="btn btn-info"><i class="fa-solid fa-pen"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- main content -->

<!-- modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newRoleModalLabel">Tambah Role Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('admin/role');?>" method="post">
            <div class="modal-body">
                <div class="mb-3">
                    <input type="text" class="form-control" id="role" name="role" placeholder="Masukkan Role Baru">
                </div>
            </div>
      
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
      </form>
    </div>
  </div>
</div>
<!-- modal -->