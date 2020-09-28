<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Company Setup</h4>
          </div><!-- /.col -->
          <div class="col-sm-6 btn-sm">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/setting">Setting Management System</a></li>
              <li class="breadcrumb-item active">Company Setup</li>
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
                <h5 class="card-title">Form Company Setup</h5>
              </div>

              <?php foreach($company as $company) : ?>
                  <?= form_open_multipart('admin/editcompany'); ?>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card-body box-profile">
                      <ul class="list-group list-group-unbordered mb-3">
                        
                        <li class="list-group-item btn-sm">Company Name :
                          <div class="float-right">

                            <input type="hidden" name="id" id="id" value="1">

                            <input type="" class="form-control form-control-sm" name="name" id="name" placeholder="Company name" value="<?= $company['name']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </div>
                        </li>

                        <li class="list-group-item btn-sm">Company Address :
                          <div class="float-right">
                            <input type="" class="form-control form-control-sm" name="address" id="address" placeholder="Company address" value="<?= $company['address']; ?>">
                            <?= form_error('address', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </div>
                        </li>

                        <li class="list-group-item btn-sm">Company Phone :
                          <div class="float-right">
                            <input type="number" class="form-control form-control-sm" name="phone" id="phone" placeholder="Company phone" value="<?= $company['phone']; ?>">
                            <?= form_error('phone', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </div>
                        </li>

                        <li class="list-group-item btn-sm">Company Fax :
                          <div class="float-right">
                            <input type="number" class="form-control form-control-sm" name="fax" id="fax" placeholder="Company fax" value="<?= $company['fax']; ?>">
                            <?= form_error('fax', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </div>


                  <div class="col-sm-6">
                    <div class="card-body box-profile">
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item btn-sm">Company Email :
                          <div class="float-right">
                            <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Company email" value="<?= $company['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </div>
                        </li>

                        <li class="list-group-item btn-sm">Company Terms :
                          <div class="float-right">
                            <input type="" class="form-control form-control-sm" name="term" id="term" placeholder="Company term" value="<?= $company['term']; ?>">
                            <?= form_error('term', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                          </div>
                        </li>

                        <li class="list-group-item btn-sm">Company Logo :
                          <div class="float-right">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input btn-xs" name="image" id="image" placeholder="Company logo" value="<?= $company['image']; ?>">
                            <?= form_error('image', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                            <label class="custom-file-label" for="image"><?= $company['image']; ?></label>
                          </div>
                          </div>
                        </li>

                        <li class="list-group-item btn-sm">Company Favicon :
                          <div class="float-right">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input btn-xs" name="favicon" id="favicon" placeholder="Company Favicon" value="<?= $company['favicon']; ?>">
                            <?= form_error('favicon', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
                            <label class="custom-file-label" for="image"><?= $company['favicon']; ?></label>
                          </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                    <div class="card-body box-profile">
                          <center>
                            <button type="submit" class="btn bg-gradient-secondary btn-sm">Progress</button>
                          </center>
                    </div>
                    <?php endforeach; ?>
                
                </div>
              </div>
            </div>
          </div>
        </div>