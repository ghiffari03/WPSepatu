<di class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <!-- Card untuk Form Tambah Data Alternatif -->
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Alternatif Sepatu</h3>
        </div>
        <!-- Form untuk input alternatif -->
        <form action="<?= site_url('datasepatu/simpansepatu'); ?>" method="POST">
          <div class="card-body">
            <div class="form-group">
              <label for="alternatif">Nama Alternatif Sepatu</label>
              <input type="text" class="form-control" id="alternatif" name="nama_alternatif"
                placeholder="Isi nama alternatif sepatu" required>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <center>
              <button type="submit" class="btn btn-success">Submit</button>
            </center>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </section>