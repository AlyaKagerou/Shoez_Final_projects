<!-- topbar -->
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