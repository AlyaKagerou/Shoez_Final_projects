<h1 class="my-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row">
    <div class="col-lg">
        <?php if(validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();  ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message');  ?>
        <a href="" class="btn butt-add" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-plus me-2"></i> Tambah Sub Menu Baru</a>
        <div class="bg-card-table mt-3 p-4">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($submenu as $sm): ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $sm['title']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?= $sm['is_active']; ?></td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="bx bxs-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bx bxs-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- main content -->

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sub Menu Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('menu/submenu');?>" method="post">
        <div class="modal-body">
            <div class="mb-3">
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Sub Menu Baru">
            </div>
            <div class="mb-3">
                <select name="menu_id" id="menu_id" class="form-control">
                    <option value="">Select Menu</option>
                    <?php foreach($menu as $m): ?>
                        <option value="<?= $m['id'];?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="icon" name="icon" placeholder="Masukkan Sub Menu Baru Url">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="url" name="url" placeholder="Masukkan Sub Menu Baru Icon">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" checked>
                    <label class="form-check-label" for="is_active">
                        Active?
                    </label>
                </div> 
            </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn butt-add">Tambah</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->