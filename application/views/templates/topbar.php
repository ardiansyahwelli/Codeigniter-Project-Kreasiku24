<!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white btn-sm">
    <div class="container">
      <a href="<?= base_url(); ?>" class="navbar-brand">
        <?php foreach ($company as $company): ?>
        <img src="<?= base_url('assets/img/company/') . $company['image']; ?> " alt="WA-Project" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= $company['term']; ?></span>
      <?php endforeach; ?>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

          <!--- This function for master menu --->
          <?php
          $role_id = $this->session->userdata('role_id');
          $queryMenu = "SELECT `user_menu`.`id`,`menu` 
                        FROM `user_menu` JOIN `user_access_menu`
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC ";
                        $menu = $this->db->query($queryMenu)->result_array();
                        ?>

          <!-- LOOPING MENU -->
          <?php foreach($menu as $m) : ?>

          <!--- This function for sub menu --->
          <?php 
          $menuId = $m['id'];
          $querySubMenu = "SELECT* 
                              FROM `user_sub_menu`
                             WHERE `menu_id` = $menuId
                               AND `is_active` = 1
          ";
          $subMenu = $this->db->query($querySubMenu)->result_array(); 
        ?>

        <?php foreach ($subMenu as $sm) : ?>
          <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active">
              <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a href="<?= base_url($sm['url']); ?>" class="nav-link"><?= $sm['title']; ?></a>
          </li>
          <?php endforeach; ?>
          <?php endforeach; ?>

        </ul>
      </li>
    </ul>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Notifications Dropdown Menu -->
        <?php
        /*
         * If role admin login this icon show
         */
        if($role_id == 1) { ?>
          <li class="nav-item dropdown">
          <a class="nav-link" href="<?= base_url(); ?>admin/setting">
            <i class="fas fa-cog"></i>
          </a>
        </li>
      <?php }?>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

        <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="d-none d-md-inline btn-sm"><?= $user['username']; ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " class="img-circle elevation-2" alt="User Image">

            <p>
              <?= $user['username']; ?>
            </p>
          </li>
          <li class="user-footer">
            <a href="<?= base_url('user/edit'); ?>" class="btn btn-default btn-flat btn-sm">Profile</a>
            <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat float-right btn-sm">Sign out</a>
          </li>
        </ul>
      </li>
      
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->