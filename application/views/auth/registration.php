<!-- register -->
<div class="container-content py-1">
            <div class="row login p-5">
                <div class="col-12 col-lg-6">
                    <img src="<?= base_url('assets/img/Registration.png')?>" alt="registration" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <h1 class="title-login">Sign Up</h1>
                    <form method="post" action="<?= base_url('auth/registration');?>">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" value="<?= set_value('name');?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="email" placeholder="Enter Your Email" name="email" value="<?= set_value('email');?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password1" placeholder="Password" name="password1">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password2" placeholder="Repeat Password" name="password2">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn-sign-in">Create Account</button>
                            <a href="<?= base_url('auth')?>" class="link-text">Already have account? Login!</a>
                        </div>
                    </form>
                </div>
            </div>
     <!-- register -->