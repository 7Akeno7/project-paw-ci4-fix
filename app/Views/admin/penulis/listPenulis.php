<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold">List Penulis</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card" style="margin-top: 25px;">
        <div class="card">
          <div class="card-body" >
            <a href = "<?= route_to('formTambahPenulis'); ?>">
              <button type="button" class="btn btn-success"
              >Tambah Penulis</button>
            </a>
            <?php if(session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success mt-3" role="alert">
              <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID Penulis</th>
                    <th>Nama Penulis</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($penulis as $val): ?>
                  <tr>
                    <td><?= $val->id ?></td>
                    <td><?= $val->nama_penulis ?></td>
                    <td>
                    <a href="#">
                      <button type="button" class="btn btn-info btn-sm">
                        Ubah Nama</button
                      >
                    </a>
                    <a href="#">
                      <button type="button" class="btn btn-danger btn-sm">
                        Hapus</button
                      >
                    </a>
                    </td>
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