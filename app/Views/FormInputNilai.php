<section class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Input Nilai Kriteria</h3>
        </div>

        <!-- Form untuk input nilai kriteria -->
        <form action="<?= site_url('datanilai/simpanNilai'); ?>" method="POST">
          <div class="card-body">

            <!-- Dropdown untuk memilih alternatif -->
            <div class="form-group">
              <label for="alternatif">Pilih Alternatif</label>
              <select class="form-control" id="alternatif" name="id_alternatif" required>
                <option value="" disabled selected>Pilih Alternatif</option>
                <?php foreach ($alternatif as $alt): ?>
                  <option value="<?= $alt->id_alternatif; ?>"><?= $alt->nama_alternatif; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label>Nilai Matriks</label>
              <?php foreach ($kriteria as $krit): ?>
                <div class="mb-3">
                  <label for="C<?= $krit->id_kriteria; ?>" class="form-label">
                    <?= $krit->nama_kriteria; ?> (<?= ucfirst($krit->jenis); ?>)
                  </label>
                  <input type="number" name="C<?= $krit->id_kriteria; ?>"
                    id="C<?= $krit->id_kriteria; ?>" class="form-control" placeholder="Nilai <?= $krit->nama_kriteria; ?>" required>
                </div>
              <?php endforeach; ?>
            </div>

          </div>

          <!-- Tombol Submit -->
          <div class="card-footer">
            <center>
              <button type="submit" class="btn btn-success">Simpan</button>
            </center>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>