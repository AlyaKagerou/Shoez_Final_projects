   <!-- login -->
        <div class="container-content py-1">
            <div class="row login p-5">
                <div class="col-12 col-lg-6">
                    <img src="<?php echo base_url('assets/img/Computer_login.png')?>" alt="computer_login" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text">
                        <h1 class="title-login">Sign In</h1>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('auth');?>">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3 d-flex gap-2">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
                        </div>
                        <div class="mb-3 forpass">
                            <span><a href="">Forgot Password</a></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn-sign-in">Sign In</button>
                            <a href="<?= base_url('auth/registration')?>" class="link-text">Don't have account? Sign Up!</a>
                        </div>
                    </form>
                </div>
            </div>
     <!-- login -->