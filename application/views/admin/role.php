<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">User Account Setup</h4>
          </div><!-- /.col -->
          <div class="col-sm-6 btn-sm">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/setting">Setting Management System</a></li>
              <li class="breadcrumb-item active">User Account Setup</li>
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
                <h5 class="card-title">User Account Setup</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
                <div class="card-body">
                <ul class="list-group list-group-unbordered mb-3">
                  <h5 class="card-title">List User Account Setup</h5>
                  <?php $i = 1; ?>
                    <?php foreach($role as $r) : ?>
                  <li class="list-group-item btn-xs"><b>User Account Item :</b>
                   <div class="float-right">
                     <button type="submit" class="btn btn-block bg-gradient-secondary btn-xs"><?= $r['role']; ?>
                       <i class="fas fa fa-list"></i>
                     </button>
                   </div>
                  </li>

                  <li class="list-group-item btn-sm">Action :
                   <div class="float-right">
                     <a href="<?= base_url('admin/roleaccess/').$r['id']; ?>" class="badge badge-warning">User Access
                     <i class="fas fa fa-user"></i></a>

                     <a onclick="return confirm('Delete this role?')" href="<?= base_url('admin/delete/').$r['id']; ?>" class="badge badge-danger">Delete
                      <i class="fas fa fa-trash"></i></a>
                   </div>
                  </li>
                  <?php endforeach; ?>
                </ul>

          <div class="card-body">
            <div class="card card-secondary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-plus"></i>
                  Added New User Account
                </h3>
              </div>
              </div>
              <div class="col-lg"><?php if (validation_errors()) : ?>

                <div class="alert alert-danger btn-sm" role="alert"><?= validation_errors(); ?></div>
              <?php endif; ?>

                <form class="role-form" action="<?= base_url('admin/role'); ?>" method="post">
                  <!--- CONTENT --->
                  <input class="hidden" type="hidden" value="" name="id">

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item btn-sm">User Account Title &nbsp;:&nbsp;
                   <a class="float-right">
                     <input class="form-control form-control-sm" type="text" id="role" name="role" placeholder="User Account title">
                   </a>
                  </li>
                </ul>
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

    </div>