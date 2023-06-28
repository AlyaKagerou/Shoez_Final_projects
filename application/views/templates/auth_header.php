<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') . '?v=' . time();?>">
    <title><?= $judul;?></title>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Shoez.</a>
            <div class="toggle">
                <i class='bx bx-moon bx-sm'></i>
                <input type="checkbox" id="switch">
                <label for="switch" class="switch" onclick="ubahMode()"></label>
            </div>
        </div>
    </nav>
    <!-- navbar -->