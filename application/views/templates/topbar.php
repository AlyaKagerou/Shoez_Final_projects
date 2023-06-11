<!-- topbar -->
<section class="p-3 my-container d-flex flex-column">
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
                        <i class='bx bxs-moon bx-sm'></i>
                        <input type="checkbox" id="switch">
                        <label for="switch" class="switch" onclick="ubahMode()"></label>
                    </div>
                    <i class='bx bxs-bell bx-sm bell'></i>
                    <div id="vertical-line"></div>
                    <div class="dropdown">
                        <button class="dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text mx-1">Alya</span>
                            <img class="img-profile rounded-circle img-fluid mx-3" src="<?= base_url('assets/img/profile/default.png')?>">
                        </button>
                        <ul class="dropdown-menu mt-3">
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item" href="#"><i class='bx bxs-user me-2'></i>Profile</a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item" href="#"><i class='bx bxs-cog me-2'></i>Settings</a>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item" href="#"><i class='bx bxs-log-out me-2'></i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </nav>