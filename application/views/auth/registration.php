<!-- register -->
<div class="container-content py-1">
            <div class="row login p-5">
                <div class="col-12 col-lg-6">
                    <img src="<?= base_url('assets/img/Registration.png')?>" alt="computer_login" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <h1 class="title-login">Sign Up</h1>
                    <form action="<?= base_url('auth/registration')?>" method="post">
                        <div class="mb-3">
                            <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password1" placeholder="Password" name="password1">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password2" placeholder="Repeat Password" name="password2">
                            </div>
                        </div>
                    </form>
                    <div class="submit d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn-sign-in d-block">Create Account</button>
                        <a href="#" class="link-text">Already have account? Login!</a>
                    </div>
                </div>
            </div>
     <!-- register -->