<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Edit Data Kriteria</h3>
        </div>

        <!-- Form Edit Kriteria -->
        <form action="<?= site_url('datakr/editkr/' . $datakr['id_kriteria']); ?>" method="POST">
          <div class="card-body">

            <!-- Nama Kriteria -->
            <div class="form-group">
              <label>Nama Kriteria</label>
              <input type="text" class="form-control" name="nama_kriteria" value="<?= $datakr['nama_kriteria']; ?>"
                placeholder="Isi Nama Kriteria" required>
            </div>

            <!-- Keterangan -->
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" class="form-control" name="keterangan" value="<?= $datakr['keterangan']; ?>"
                placeholder="Isi Keterangan" required>
            </div>

            <!-- Bobot -->
            <div class="form-group">
              <label>Bobot</label>
              <input type="number" class="form-control" name="bobot" value="<?= $datakr['bobot']; ?>" step="0.01" required>
            </div>

            <!-- Jenis Kriteria -->
            <div class="form-group">
              <label>Jenis Kriteria</label>
              <select class="form-control" name="jenis" required>
                <option value="Benefit" <?= ($datakr['jenis'] == 'Benefit') ? 'selected' : ''; ?>>Benefit</option>
                <option value="Cost" <?= ($datakr['jenis'] == 'Cost') ? 'selected' : ''; ?>>Cost</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->

          <!-- Submit Button -->
          <div class="card-footer">
            <center>
              <button type="submit" class="btn btn-warning">Update</button>
            </center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</section>