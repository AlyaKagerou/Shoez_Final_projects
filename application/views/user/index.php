            <h1 class="my-3 title">Welcome, <?= $user['name'];  ?></h1>

        <!-- main content -->
            <div class="bg-card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-3"><?= $user['name']; ?></h5>
                        <p class="ft fs-6"><?= $user['email']; ?></p>
                        <p class="ft"><small>Anggota sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                    </div>
                </div>
            </div>
        
        </div>
        <!-- main content -->
    </section>

    