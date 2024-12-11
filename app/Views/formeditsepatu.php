
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Edit Data Alternatif</h3>
        </div>

        <!-- Form untuk edit data alternatif -->
        <form action="<?= site_url('datasepatu/editsepatu/' . $datasepatu->id_alternatif); ?>" method="POST">
          <div class="card-body">
  
            <!-- Input untuk nama alternatif -->
            <div class="form-group">
              <label for="alternatif">Nama Alternatif</label>
              <input 
                type="text" 
                class="form-control" 
                id="alternatif" 
                name="nama_alternatif" 
                value="<?= $datasepatu->nama_alternatif; ?>" 
                placeholder="Isi Nama Alternatif" 
                required
              >
            </div>

          </div>

          <!-- Tombol Submit -->
          <div class="card-footer">
            <center>
              <button type="submit" class="btn btn-success">Update</button>
            </center>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
</section>
