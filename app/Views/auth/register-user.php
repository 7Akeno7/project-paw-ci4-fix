<?= $this->extend('auth/templates/index') ?>

<?= $this->section('content') ?>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="../images/samples/logo_class.png" alt="logo" />
            </div>
            <?= view('Myth\Auth\Views\_message_block'); ?>
            <h4><?=lang('Auth.register')?></h4>
            <h6 class="font-weight-light">
              Register is easy. It only takes a few steps
            </h6>
          
            <form 
              class="pt-3"
              action = "<?= route_to('register'); ?>"
              method="post"
            >
              <div class="form-group">
                <input
                  type="text"
                  class="
                    form-control form-control-lg 
                    <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" 
                  "
                  name="username"
                  id="exampleInputUsername1"
                  placeholder="<?=lang('Auth.username')?>"
                  required
                />
              </div>

              <div class="form-group">
                <input
                  type="email"
                  class="
                    form-control form-control-lg
                    <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                  "
                  name="email"
                  id="exampleInputEmail1"
                  placeholder="<?=lang('Auth.email')?>"
                  value="<?= old('email') ?>"
                  required
                />
              </div>

              <div class="form-group">
                <input
                  type="text"
                  class="
                    form-control form-control-lg 
                    <?php if(session('errors.nama_user')) : ?>is-invalid<?php endif ?>" 
                  "
                  name="nama_user"
                  id="exampleInputUsername1"
                  placeholder="Nama Lengkap"
                  required
                />
              </div>

              <div class="form-group">
                <input
                  type="password"
                  class="
                    form-control form-control-lg
                    <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>  
                  "
                  name="password"
                  autocomplete="off"
                  id="exampleInputPassword1"
                  placeholder="<?=lang('Auth.password')?>"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="
                    form-control form-control-lg
                    <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>
                  "
                  name="pass_confirm"
                  autocomplete="off"
                  id="exampleInputPassword1"
                  placeholder="<?=lang('Auth.repeatPassword')?>"
                  required
                />
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" required/>
                    I agree to all Terms &amp; Conditions
                    <i class="input-helper"></i
                  ></label>
                </div>
              </div>
              <div class="mt-3">
                <button type = "submit"
                  class="
                    btn btn-block btn-primary btn-lg
                    font-weight-medium
                    auth-form-btn
                  "
                ><?=lang('Auth.register')?></button>
              </div>
              <div class="text-center mt-4 font-weight-light">
                <?=lang('Auth.alreadyRegistered')?>
              <a 
                href="<?= route_to('login') ?>" 
                class="text-primary">
                <?=lang('Auth.signIn')?></a
              >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<?= $this->endSection() ?>