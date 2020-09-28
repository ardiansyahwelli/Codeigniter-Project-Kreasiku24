<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Menu Setting</h4>
          </div><!-- /.col -->
          <div class="col-sm-6 btn-sm">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/setting">Setting Management System</a></li>
              <li class="breadcrumb-item active">Menu Setting</li>
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
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h5 class="card-title">Menu Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
                <div class="card-body">
                <ul class="list-group list-group-unbordered mb-3">
                  <h5 class="card-title">List Menu</h5>
                  <li class="list-group-item btn-xs">Menu Item :
                    <?php $i = 1; ?>
                    <?php foreach($subMenu as $sm) : ?>
                   <div class="float-right">
                     <a onclick="return confirm('Delete this <?= $sm['title']; ?> Menu?')" href="<?= base_url('menu/delete/submenu/').$sm['id']; ?>" class="btn btn-block bg-gradient btn-xs"><?= $sm['title']; ?>
                     <i class="fas fa fa-trash"></i></a>
                   </div>
                   <?php endforeach; ?>
                  </li>

                  <li class="list-group-item btn-xs">Description Menu Setup :
                   <a class="float-right">
                     <button class="btn btn-block bg-gradient btn-xs" >in this menu setting you can add menus and can also delete them.! ( if you want to delete it you just click the menu! )</button>
                   </a>
                  </li>
                </ul>

          <div class="card-body">
            <div class="card card-secondary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-plus"></i>
                  Added New Menu
                </h3>
              </div>
            </div>
            <div class="row">
                  <div class="col-sm-4">
                    <div class="card-body box-profile">
                      <form class="submenu-form" action="<?= base_url('menu/subMenu'); ?>" method="post">
                      <ul class="list-group list-group-unbordered mb-3">
                        
                        <li class="list-group-item btn-sm">Menu Title :
                          <a class="float-right">
                            <input class="form-control form-control-sm" type="text" id="title" name="title" placeholder="Menu title">
                            <?= form_error('title', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </a>
                        </li>

                        <li class="list-group-item btn-sm">Menu Link :
                          <a class="float-right">
                            <input class="form-control form-control-sm" type="text" id="url" name="url" placeholder="Menu url">
                            <?= form_error('url', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="card-body box-profile">
                      <ul class="list-group list-group-unbordered mb-3">
                        
                        <li class="list-group-item btn-sm">Menu icon :
                          <a class="float-right">
                            <input class="form-control form-control-sm" type="text" id="icon" name="icon" placeholder="Menu icon">
                            <?= form_error('icon', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </a>
                        </li>

                        <li class="list-group-item btn-sm">Menu Active :
                          <a class="float-right">
                            <input class="form-check-input is-active" type="checkbox" value="1" checked name="is_active" id="is_active">
                            <?= form_error('is_active', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="card-body box-profile">
                      <ul class="list-group list-group-unbordered mb-3">
                        
                        <li class="list-group-item btn-sm">Type Level :
                          <a class="float-right">
                            <select name="menu_id" id="menu_id" class="form-control form-control-sm">
                              <option value=""> Select Menu Type Level </option>
                              <?php foreach($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?= form_error('menu_id', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>

                  <div class="card-body box-profile">
                          <center>
                            <button type="submit" class="btn bg-gradient-secondary btn-sm">Progress</button>
                          </center>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>