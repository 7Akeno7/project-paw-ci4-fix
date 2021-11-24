<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Buku</h4>
          <form class="form-sample">    
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"
                    >Judul Buku</label
                  >
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"
                    >Kategori Buku</label
                  >
                  <div class="col-sm-9">
                    <select class="form-control">
                      <option value = "Teknologi">Teknologi</option>
                      <option value = "Kesenian">Kesenian</option>
                      <option value = "Lingkungan">Lingkungan</option>
                      <option value = "Sains">Sains</option>
                      <option value = "Sosial">Sosial</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"
                    >Penulis Buku</label
                  >
                  <div class="col-sm-5">
                    <select
                        class="js-example-basic-multiple w-100"
                        multiple="multiple"
                    >
                      <?php foreach($penulis as $value) : ?>
                      <option value="<?= $value->id ?>"><?=$value->id.' - '.$value->nama_penulis; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"
                    >Tahun Terbit</label
                  >
                  <div class="col-sm-9">
                    <input
                      type="number"
                      class="form-control"
                      value="<?= date('Y'); ?>"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"
                    >Halaman</label
                  >
                  <div class="col-sm-9">
                  <input
                      type="number"
                      class="form-control"
                    />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"
                    >Bahasa</label
                  >
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
            <p class="card-description">Sinopsis</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <textarea
                      class="form-control"
                      id="exampleTextarea1"
                      rows="8"
                    ></textarea>               
                  </div>
                </div>
              </div>
            </div>
            <p class="card-description">Upload Cover Buku</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input
                      type="file"
                      name="img[]"
                      class="file-upload-default"
                    />
                    <div class="input-group col-xs-12">
                      <input
                        type="text"
                        class="form-control file-upload-info"
                        disabled
                        placeholder=".jpg/.jpeg/.png"
                      />
                      <span class="input-group-append">
                        <button
                          class="file-upload-browse btn btn-primary"
                          type="button"
                        >
                          Upload
                        </button>
                      </span>
                    </div>
                  </div>             
                </div>
              </div>
            </div>
            <p class="card-description">Upload File Buku</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input
                      type="file"
                      name="upload"
                      class="file-upload-default"
                      accept="application/pdf"
                    />
                    <div class="input-group col-xs-12">
                      <input
                        type="text"
                        class="form-control file-upload-info"
                        disabled
                        placeholder=".pdf"
                      />
                      <span class="input-group-append">
                        <button
                          class="file-upload-browse btn btn-primary"
                          type="button"
                        >
                          Upload
                        </button>
                      </span>
                    </div>
                  </div>             
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>