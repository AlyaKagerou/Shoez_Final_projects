<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') . '?v=' . time();?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
    <title><?php echo $judul;?></title>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Shoez.</a>
            <button class="navbar-toggler d-flex d-lg-none flex-column justify-content-around collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Kontak </a>
                    </li>
                </ul>
                <div class="toggle">
                    <i class='bx bx-moon bx-sm'></i>
                    <input type="checkbox" id="switch">
                    <label for="switch" class="switch" onclick="ubahMode()"></label>
                </div>
                <button class="btn-login">Masuk</button>
            </div>
        </div>
    </nav>
    <!-- navbar -->