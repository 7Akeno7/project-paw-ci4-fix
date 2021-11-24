<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold">List User</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card" style="margin-top: 25px;">
        <div class="card">
          <div class="card-body" >
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama User</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user) : ?>
                    <tr>
                      <td><?= $user->id; ?></td>
                      <td><?= $user->username; ?></td>
                      <td><?= $user->email; ?></td>
                      <td><?= $user->nama_user; ?></td>
                      <?php if ($user->name == 'admin') : ?>
                      <td><label class="badge badge-warning">admin</td>
                      <td></td>
                      <?php else : ?>
                      <td><label class="badge badge-success">user</td>
                      <td>
                        <a href="#">
                          <button type="button" class="btn btn-danger btn-sm">
                            hapus</button
                          >
                        </a>
                      </td>
                      <?php endif; ?>
                      
                    </tr>
                  <?php endforeach; ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>