
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Change Password</h4>
          </div><!-- /.col -->
          <div class="col-sm-6 btn-sm">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              

          <div class="col-md-12 btn-sm">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">

                   <li class="nav-item"><a class="nav-link" href="<?= base_url('user/edit'); ?>" >User Account</a></li>

                  <li class="nav-item"><a class="nav-link active" href="<?= base_url('user/changepassword'); ?>" >Change Password</a></li>

                </ul>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="userProfile">

                  

          <!--- User Change Password --->
          <div class="tab-pane" id="changePassword">
            <section class="content">
              <div class="container-fluid">
                <div class="row">

            <div class="col-sm-4">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('assets/img/profile/') . $user['image']; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $user['username']; ?></h3>

                <p class="text-muted text-center"><?= $user['name']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item btn-sm">
                    Join Date :<a class="float-right"><?= $user['created_date']; ?></a>
                  </li>
                  <li class="list-group-item btn-sm">
                    Division :<a class="float-right"><?= $user['division']; ?></a>
                  </li>
                  <li class="list-group-item btn-sm">
                    Active Period :<a class="float-right"><?= $user['priode']; ?></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            <div class="col-sm-3">
              <div class="card-body box-profile">
                <div class="text-center">
                </div>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item btn-sm">
                    User Login: <a class="float-right"><?= $user['email']; ?></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            <div class="col-sm-5">
              <div class="card-body box-profile">

                <?= form_open_multipart('user/changepassword'); ?>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item btn-sm">
                    Current Password :<a class="float-right">
                    <input name="current_password" autofocus type="password" class="form-control form-control-sm" id="current_password">
                    <!-- error message -->
                   <?= form_error('current_password', '<small class="text-danger pl-2 pt-1">', '</small>'); ?></a>
                  </li>

                  <li class="list-group-item btn-sm">
                    New Password :<a class="float-right">
                    <input autocomplete="off" name="new_password" type="password" class="form-control form-control-sm" id="new_password">
                    <!-- error message -->
                    <?= form_error('new_password', '<small class="text-danger pl-2 pt-1">', '</small>'); ?></a>
                  </li>

                  <li class="list-group-item btn-sm">
                    Confrim Password :<a class="float-right">
                    <input autocomplete="off" name="confirm_password" type="password" class="form-control form-control-sm" id="confirm_password">
                        <!-- error message -->
                    <?= form_error('confirm_password', '<small class="text-danger pl-2 pt-1">', '</small>'); ?></a>
                  </li>

                  <button type="submit" class="btn btn-secondary btn-sm float-right">Updated</button>
                </ul>
                    </div>
                  </div>
                </fom>
              </div>
            </div>
          </div>
          <!--- User Profile --->
        </section>
      </div>
     </div>
    </div>
   </div>
</div>
