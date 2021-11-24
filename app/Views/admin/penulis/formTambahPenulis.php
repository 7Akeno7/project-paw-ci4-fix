<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Penulis</h4>
            <form 
              class="forms-sample"
              action="<?= route_to('tambahPenulis');?>"
              method="post"
            >
              <?= csrf_field(); ?>
              <div class="form-group">
                <label for="exampleInputUsername1">Nama Penulis</label>
                <input
                  type="text"
                  class="form-control"
                  name="nama_penulis"
                  id="exampleInputUsername1"
                  placeholder="Nama Penulis"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary mr-2">
                Submit
              </button>
              <a href="<?= route_to('listPenulis');?>">
                <button class="btn btn-light">Cancel</button>
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>