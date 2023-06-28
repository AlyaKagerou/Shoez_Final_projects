    <!-- query menu-->
    <?php 
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
        $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column align-item-start" id="sidebar">
        <h1 class="side-brand">Shoez.</h1>

        <!-- looping menu -->
        <?php foreach($menu as $m): ?>
        <div class="sidebar-heading ms-3">
            <?= $m['menu']; ?>
        </div>
        
        <!-- sub menu sesuai menu -->
        <?php 
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                        FROM `user_sub_menu` JOIN `user_menu` 
                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                        WHERE `user_sub_menu`.`menu_id` = $menuId
                        AND `user_sub_menu`.`is_active` = 1
                        ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>
           
        
            <?php foreach($subMenu as $sm): ?>
                <ul class="side-nav d-flex flex-column">
                    <?php if($judul == $sm['title']): ?>
                    <li class="side-item active">
                        <?php else: ?>
                    <li class="side-item">
                        <?php endif; ?>
                        <a href="<?= base_url($sm['url']);?>" class="side-link"><i class="<?= $sm['icon'];?>"></i><span><?= $sm['title']; ?></span></a>
                    </li>
                </ul>
            <?php  endforeach;?>
        
            <div class="border-bottom mx-3 mb-3"></div>

        <?php  endforeach;?>

        <ul class="side-nav d-flex flex-column">
            <li class="side-item">
                <a href="<?= base_url('auth/logout');?>" class="side-link"><i class="fa-solid fa-right-from-bracket fw fa-xl me-2"></i>Keluar</a>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->