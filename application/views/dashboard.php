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

    <!-- sidebar -->
    <div class="sidebar d-flex flex-column align-item-start" id="sidebar">
        <h1 class="sidebar-brand">Shoez.</h1>
        <ul class="sidebar-nav d-flex flex-column">
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="bx bxs-dashboard icon-dash"></i>Dashboard</a></li>
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="bx bxs-category icon-dash"></i>Categories</a></li>
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="bx bxs-package icon-dash"></i>Product</a></li>
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="bx bxs-truck icon-dash"></i>Order</a></li>
        </ul>
        <div class="border-bottom m-3"></div>
        <ul class="sidebar-nav d-flex flex-column">
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="bx bxs-cog icon-dash"></i>Seting</a></li>
            <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="bx bxs-log-out icon-dash"></i>Log Out</a></li>
        </ul>
    </div>
    <!-- sidebar -->

    <!-- navbar -->
    <section class="p-4 dash-container">
        <nav class="navbar bg-nav sticky-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <button class="btn-menu" id="menu-btn"><i class="bx bx-menu bx-sm"></i></button>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>