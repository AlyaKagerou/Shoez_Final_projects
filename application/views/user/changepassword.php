<h1 class="my-3 title"><?= $judul; ?></h1>

<!-- main content -->
<div class="row">
    <div class="col-lg-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="bg-card p-3">
            <form action="<?= base_url('user/changepassword');?>" method="post">
                <div class="mb-3">
                    <label for="current_password" class="ft">Password Saat Ini</label>
                    <input type="password" class="form-control mt-2" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>');?>
                </div>
                <div class="mb-3">
                    <label for="new_password1" class="ft">Password Baru</label>
                    <input type="password" class="form-control mt-2" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>');?>
                </div>
                <div class="mb-3">
                    <label for="new_password2" class="ft">Ulang Password</label>
                    <input type="password" class="form-control mt-2" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>');?>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- main content -->