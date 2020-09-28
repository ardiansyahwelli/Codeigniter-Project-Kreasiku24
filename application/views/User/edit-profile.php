
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">User Profile</h4>
          </div><!-- /.col -->
          <div class="col-sm-6 btn-sm">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>user">Dashboard</a></li>
              <li class="breadcrumb-item active">User Profile</li>
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

                  <li class="nav-item btn-sm"><a class="nav-link active" href="<?= base_url('user/edit'); ?>" >User Account</a></li>

                  <li class="nav-item btn-sm"><a class="nav-link" href="<?= base_url('user/changepassword'); ?>" >Change Password</a></li>

                </ul>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="userProfile">

                  <!-- Main content -->
                  <section class="content">
                    <div class="container-fluid">
                      <div class="row">

                        <!-- Profile Image -->
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
                <div class="text-center">
                </div>

                <?= form_open_multipart('user/edit'); ?>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item btn-sm">
                    Username :<a class="float-right">
                    <input autocomplete="off" readonly autofocus name="username" type="text" class="form-control form-control-sm" id="username" value="<?= $user['username']; ?>">
                    <?= form_error('username', '<small class="text-danger pl-2 pt-1">', '</small>'); ?></a>
                  </li>

                  <li class="list-group-item btn-sm">
                    fullname :<a class="float-right">
                    <input autocomplete="off" autofocus name="name" type="text" class="form-control form-control-sm" id="name" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                  </a>
                  </li>

                  <li class="list-group-item btn-sm">
                    Address :<a class="float-right">
                    <input autocomplete="off" autofocus name="address" type="text" class="form-control form-control-sm" id="address" value="<?= $user['address']; ?>" placholder="<?= $user['address']; ?>">
                    <?= form_error('address', '<small class="text-danger pl-2 pt-1">', '</small>'); ?></a>
                  </li>

                  <li class="list-group-item btn-sm">
                    Phone :<a class="float-right">
                    <input autocomplete="off" autofocus name="phone" type="text" class="form-control form-control-sm" id="phone" value="<?= $user['phone']; ?>">
                    <?= form_error('phone', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                  </a>
                  </li>

                  <li class="list-group-item btn-sm">
                    Picture :<a class="float-right">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div></a>
                  </li>
                  <button type="submit" class="btn btn-secondary btn-sm">Updated</button>
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