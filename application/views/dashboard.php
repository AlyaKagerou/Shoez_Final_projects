<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') . '?v=' . time();?>">
    <title>Dashboard | Shoez.</title>
</head>

<body>

<div class="sidebar d-flex flex-column align-item-start" id="sidebar">
        <h1 class="side-brand">Shoez.</h1>
        <ul class="side-nav d-flex flex-column">
            <li class="side-item"><a href="#" class="side-link"><i class='bx bxs-dashboard icon-dash'></i>Dashboard</a></li>
            <li class="side-item"><a href="#" class="side-link"><i class='bx bxs-category icon-dash'></i>Categories</a></li>
            <li class="side-item"><a href="#" class="side-link"><i class='bx bxs-package icon-dash'></i>Product</a></li>
            <li class="side-item"><a href="#" class="side-link"><i class='bx bxs-truck icon-dash'></i>Order</a></li>
        </ul>
        <div class="border-bottom m-3"></div>
        <ul class="side-nav d-flex flex-column">
            <li class="side-item"><a href="#" class="side-link"><i class='bx bxs-cog icon-dash'></i>Setting</a></li>
            <li class="side-item"><a href="#" class="side-link"><i class='bx bxs-log-out icon-dash'></i>Log Out</a></li>
        </ul>
    </div>

    <section class="p-4 my-container">
        <nav class="navbar bg-nav sticky-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <button class="btn-menu" id="menu-btn"><i class='bx bx-menu bx-sm'></i></button>
                    <form class="d-flex" role="search">
                        <input class="form-control rounded-4" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn-search" type="submit"><i class='bx bx-search bx-sm' style="color:#fff;"></i></button>
                    </form>
                </div>
                <div class="navbar-right">
                    <div class="toggle">
                        <i class='bx bx-moon bx-sm'></i>
                        <input type="checkbox" id="switch">
                        <label for="switch" class="switch" onclick="ubahMode()"></label>
                    </div>
                    <i class='bx bx-bell bx-sm bell'></i>
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Profile</a></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </nav>
        
        <h1 class="mt-3">Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no">0</h3>
                        <p class="asd">Products</p>
                    </div>
                    <i class="bx bxs-package bx-md fs-1 border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no">0</h3>
                        <p class="asd">Products</p>
                    </div>
                    <i class="bx bxs-package bx-md fs-1 border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no">0</h3>
                        <p class="asd">Products</p>
                    </div>
                    <i class="bx bxs-package bx-md fs-1 border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center">
                    <div>
                        <h3 class="no">0</h3>
                        <p class="asd">Products</p>
                    </div>
                    <i class="bx bxs-package bx-md fs-1 border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- chart -->
            <div class="col-12 col-md-6">
                <div class="mt-4 bg-card-chart shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- chart -->

            <!-- tabel -->
            <div class="col-12 col-md-6">
                <div class="bg-card-table mt-4 shadow-sm">
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
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- tabel -->
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        });

        const ctx = document.getElementById('myChart');
    
        new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor:[
                '#EF4A53',
                '#6897FF',
                '#FFE663',
                '#5EFF5A',
                '#9E63FF',
                '#FFAC60'
            ],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
</body>

</html>