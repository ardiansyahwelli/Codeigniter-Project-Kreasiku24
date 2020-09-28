<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Access User Account</h4>
          </div><!-- /.col -->
          <div class="col-sm-6 btn-sm">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/setting">Setting Management System</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/role">User Account</a></li>
              <li class="breadcrumb-item active">Access User Account</li>
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
                <h5 class="card-title">User Access Account Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
                <div class="card-body">
                  <form class="role-form" action="<?= base_url('admin/roleaccess/changeaccess'); ?>" method="post">
                <ul class="list-group list-group-unbordered mb-3">
                  <h5 class="card-title">User Access</h5>
                  <?php $i = 1; ?>
                  <?php foreach($menu as $m) : ?>
                  <li class="list-group-item btn-xs"><b><?= $m['menu']; ?></b>
                   <div class="float-right">

                     <input data-role = "<?= $role['id']; ?>" data-menu = "<?= $m['id']; ?>" type="checkbox" class="form-check-input check-access" <?= check_access($role['id'], $m['id']); ?>
                    >
                    <input type="hidden" name="" id="" value="">
                   </div>
                  </li>
                <?php endforeach; ?>
                </ul>
                <center>
                  <button type="submit" class="btn bg-gradient-secondary btn-sm">Progress</button>
                </center>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>