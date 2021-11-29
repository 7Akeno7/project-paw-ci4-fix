<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="book_list">
            <h1 class="mt-1">Daftar Buku</h1>
            <?php if(session()->getFlashdata('Sukses')): ?>
            <div class="alert alert-success mt-3" role="alert">
              <?= session()->getFlashdata('Sukses'); ?>
            </div>
            <?php endif; ?>
            <a href = "<?= route_to('formTambahBuku'); ?>">
              <button type="button" class="btn btn-success"
              >Tambah Buku</button>
            </a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Title</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                      <img
                        src=""
                        alt="photo"
                        class="sampul"
                        width="100"
                      />
                    </td>
                    <td>Pemrograman Dasar</td>
                    <td>
                      <a href="" class="btn btn-success">Detail</a>
                      <a href="" class="btn btn-info">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>
                      <img
                        src=""
                        alt="photo"
                        class="sampul"
                        width="100"
                      />
                    </td>
                    <td>Pemrograman Dasar</td>
                    <td><a href="" class="btn btn-success">Detail</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>
                      <img
                        src=""
                        alt="photo"
                        class="sampul"
                        width="100"
                      />
                    </td>
                    <td>Pemrograman Dasar</td>
                    <td><a href="" class="btn btn-success">Detail</a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>
                      <img
                        src=""
                        alt="photo"
                        class="sampul"
                        width="100"
                      />
                    </td>
                    <td>Pemrograman Dasar</td>
                    <td><a href="" class="btn btn-success">Detail</a></td>
                  </tr>
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