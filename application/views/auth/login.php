<div class="login-box">
  <!-- /.login-logo -->
  <?= $this->session->flashdata('message'); ?>
  <div class="card card-outline">
    <div class="card-body">
      <div class="card-body text-center">
        <?php foreach ($company as $company): ?>
        <img src="<?= base_url('assets/img/company/') . $company['image']; ?> " alt="Kreasiku24" class="brand-image img-circle elevation-1" style="opacity: .8">
        <a href="<?= base_url(); ?>" class="h1"><b>Kreasiku24 </b></a>
      <?php endforeach; ?>
    </div>
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?= base_url('auth'); ?>" method="post" class="user">

        <!-- error message -->
          <?= form_error('email', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- error message -->
          <?= form_error('password', '<small class="text-danger pl-2 pt-1">', '</small>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <div class="col-12">
            <button name="login" type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
      </div>
    </div>
  </div>
</div>