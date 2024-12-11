<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Kriteria</h3>
        </div>

        <!-- Form Tambah Data Kriteria -->
        <form action="<?= site_url('datakr/simpankr'); ?>" method="POST">
          <div class="card-body">
            <!-- Nama Kriteria -->
            <div class="form-group">
              <label>Nama Kriteria</label>
              <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Nama Kriteria" required>
            </div>

            <!-- Keterangan -->
            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" name="keterangan" rows="3"
                placeholder="Masukkan Keterangan Kriteria (opsional)"></textarea>
            </div>

            <!-- Bobot -->
            <div class="form-group">
              <label>Bobot</label>
              <input type="number" step="0.01" class="form-control" name="bobot"
                placeholder="Masukkan Bobot Kriteria (contoh: 0.30)" required>
            </div>

            <!-- Jenis Kriteria -->
            <div class="form-group">
              <label>Jenis Kriteria</label>
              <select class="form-control" name="jenis" required>
                <option value="" disabled selected>Pilih Jenis Kriteria</option>
                <option value="Benefit">Benefit</option>
                <option value="Cost">Cost</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <center>
              <button type="submit" class="btn btn-warning">Submit</button>
            </center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</section>