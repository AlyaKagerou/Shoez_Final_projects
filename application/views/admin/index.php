<h1 class="my-3 title"><?= $judul; ?></h1>

        <!-- main content -->
        <div class="row">
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no ft">0</h3>
                        <p class="ft">Products</p>
                    </div>
                    <i class="fa-solid fa-cubes fa-2xl secondary-bg fs-1"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no ft">0</h3>
                        <p class="ft">Products</p>
                    </div>
                    <i class="fa-solid fa-cubes fa-2xl secondary-bg fs-1"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no ft">0</h3>
                        <p class="ft">Products</p>
                    </div>
                    <i class="fa-solid fa-cubes fa-2xl secondary-bg fs-1"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no ft">0</h3>
                        <p class="ft">Products</p>
                    </div>
                    <i class="fa-solid fa-cubes fa-2xl secondary-bg fs-1"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- chart -->
            <div class="col-12 col-sm-5">
                <div class="mt-3 bg-card-chart shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- chart -->

            <!-- tabel -->
            <div class="col-12 col-md-7">
                <div class="bg-card-table mt-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Recent Order</h5>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><span class="badge bg-success p-2">Succes</span></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><span class="badge bg-warning p-2 text-dark">Pending</span></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><span class="badge bg-success p-2">Succes</span></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><span class="badge bg-danger p-2">Canceled</span></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                <td><span class="badge bg-success p-2">Succes</span></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- table -->
        </div>
        <!-- main content -->
    </section>