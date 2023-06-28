<!-- topbar -->
<section class="p-3 my-container d-flex flex-column">
        <nav class="navbar bg-nav sticky-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <button class="btn-menu" id="menu-btn"><i class="fa-solid fa-bars fa-xl"></i></button>
                    <form class="d-flex" role="search">
                        <input class="form-control rounded-4" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn-search p-2" type="submit"><i class="fa-solid fa-magnifying-glass" style="color:#fff;"></i></button>
                    </form>
                </div>
                <div class="navbar-right">
                    <div class="toggle">
                    <i class="fa-solid fa-moon fa-xl fw" style="margin-right: -0.5rem;"></i>
                        <input type="checkbox" id="switch">
                        <label for="switch" class="switch" onclick="ubahMode()"></label>
                    </div>
                    <i class="fa-solid fa-bell fa-xl me-3 fw bell"></i>
                    <div id="vertical-line"></div>
                    <div class="dropdown">
                        <button class="dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text mx-1"><?= $user['name']; ?></span>
                            <img class="img-profile rounded-circle img-fluid mx-3" src="<?= base_url('assets/img/profile/') . $user['image']?>">
                        </button>
                        <ul class="dropdown-menu mt-3">
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-user fw me-2"></i>Profil Ku</a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-gear fw me-2"></i>Pengaturan</a>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item" href="<?= base_url('auth/logout');?>"><i class="fa-solid fa-right-from-bracket fw me-2"></i>Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </nav>