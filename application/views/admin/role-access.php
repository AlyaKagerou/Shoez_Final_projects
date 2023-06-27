<h1 class="my-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row">
    <div class="col-lg-4">
        <h5 class="title">Role : <?=$role['role']; ?></h5>
        <?= $this->session->flashdata('message'); ?>
        <div class="bg-card-table mt-3 p-4">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Role</th>
                        <th scope="col">Akses</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($menu as $m) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- main content -->

