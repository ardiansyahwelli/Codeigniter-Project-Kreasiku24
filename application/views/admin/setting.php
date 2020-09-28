<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Setting Management System</h4>
          </div><!-- /.col -->
          <div class="col-sm-6 btn-sm">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Setting Management System</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header btn-sm">
                <h5 class="card-title">Company Setting</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header btn-sm -->
              <div class="card-body">
                  <!--- CONTENT --->
                <ul class="list-group list-group-unbordered mb-3">
                  <h5 class="card-title">Company</h5>

                  <li class="list-group-item btn-sm">Setup Company & Management :
                   <a class="float-right">
                     <button type="button" onclick="location.href='<?= base_url('admin/company');?>';" class="btn btn-block bg-gradient-secondary btn-xs">Setup Company</button>
                   </a>
                  </li>

                  <li class="list-group-item btn-sm">Description User Account Setup :
                   <a class="float-right">
                     <button type="button" class="btn btn-block bg-gradient btn-sm">in company settings you can set the company name on the system.! or you can replace the image on this system with your company image</button>
                   </a>
                  </li>
                </ul>
              </div>
            </div>

          <div class="card">
              <div class="card-header btn-sm">
                <h5 class="card-title">User Account Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                  <div class="btn-group">
                  </div>
                </div>
              </div>
              <!-- /.card-header btn-sm -->
              <div class="card-body">
               <ul class="list-group list-group-unbordered mb-3">
                  <h5 class="card-title">User Account</h5>

                  <li class="list-group-item btn-sm">Setup User Account & Managament :
                   <a class="float-right">
                     <button type="button" onclick="location.href='<?= base_url('admin/role');?>';" class="btn btn-block bg-gradient-secondary btn-xs">Setup User Account</button>
                   </a>
                  </li>

                  <li class="list-group-item btn-sm">Description User Account Setup :
                   <a class="float-right">
                     <button type="button" class="btn btn-block bg-gradient btn-sm">in the user account setup settings you can set the user level and user account permissions!
                     You can also add, edit, or delete them</button>
                   </a>
                  </li>

                </ul>
          </div>
        </div>

        <div class="card">
              <div class="card-header btn-sm">
                <h5 class="card-title">Display Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header btn-sm -->
              <div class="card-body">
                <div class="row">
                  <!--- CONTENT --->
                
            </div>
          </div>
        </div>

        <div class="card">
              <div class="card-header btn-sm">
                <h5 class="card-title">Menu Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header btn-sm -->
              <div class="card-body">
                  <!--- CONTENT --->
                <ul class="list-group list-group-unbordered mb-3">
                  <h5 class="card-title">Form Add Menu</h5>

                  <li class="list-group-item btn-sm">Add New Menu Item :
                   <a class="float-right">
                     <button type="button" onclick="location.href='<?= base_url('menu/subMenu');?>';" class="btn btn-block bg-gradient-secondary btn-xs">Add New Menu</button>
                   </a>
                  </li>
                </ul>
              </div>

                <div class="card-body">
                <ul class="list-group list-group-unbordered mb-3">
                   <h5 class="card-title">List Menu</h5>
                  <li class="list-group-item btn-sm">Menu Item :
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
                      AND `is_active` = 1";
                      $subMenu = $this->db->query($querySubMenu)->result_array(); ?>

                      <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                          <?php else : ?>
                              <?php endif; ?>
                   <a class="float-right">
                     <button href="" class="btn btn-block bg-gradient btn-xs"><?= $sm['title']; ?>
                     <i class="fas fa fa-cog"></i></button>
                     <?php endforeach; ?>
                        <?php endforeach; ?>
                   </a>
                  </li>
                </ul>
                </div>
              </div>

        <div class="card">
              <div class="card-header btn-sm">
                <h5 class="card-title">Forms Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header btn-sm -->
              <div class="card-body">
                <div class="row">
                  <!--- CONTENT --->
                
            </div>
          </div>
        </div>

        <div class="card">
              <div class="card-header btn-sm">
                <h5 class="card-title">Printers Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header btn-sm -->
              <div class="card-body">
                <div class="row">
                  <!--- CONTENT --->
                
            </div>
          </div>
        </div>

      </div>

      <!-- MODAL -->

<div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header submenu-header">
        <h5 class="modal-title submenu-title" id="newSubmenuModal">Add new Submenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="submenu-form" action="<?= base_url('menu/subMenu'); ?>" method="post">
          <!-- HIDDEN ID -->
          <input class="id" type="hidden" name="id" value="">
          <div class="modal-body submenu-body">
        <div class="form-group">
              <input class="form-control title" type="text" id="title" name="title" placeholder="Submenu title">
        </div>

        <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control menu">
                <option value="">Select Menu</option>
                <?php foreach($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
           </div>

           <div class="form-group">
              <input class="form-control url" type="text" id="url" name="url" placeholder="Submenu url">
         </div>
         
         <div class="form-group">
              <input class="form-control icon" type="text" id="icon" name="icon" placeholder="Submenu icon">
         </div>
         
         <div class="form-group">
          <div class="form-check">
            <input class="form-check-input is-active" type="checkbox" value="1" checked name="is_active" id="is_active">
            <label class="form-check-label" for="is_active">
              Active?
            </label>
          </div>
         </div>

          </div>
        <div class="modal-footer submenu-footer">
          <button type="submit" class="btn btn-primary">Add</button>
    </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
    </div>
  </div>
</div>