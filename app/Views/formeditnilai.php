<div class="container-fluid">
    <div class="col-md-12">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Edit Data Alternatif</h3>
            </div>

            <!-- Form untuk edit data alternatif -->
            <form action="<?= site_url('datanilai/editnilai/' . $id_alternatif); ?>" method="POST">
                <div class="card-body">
                    <!-- Input untuk nama alternatif -->
                    <div class="form-group">
                        <label for="alternatif">Nama Alternatif</label>
                        <?php 
                        $nama_alter = null;
                        foreach ($alternatif as $alt){
                            if($alt->id_alternatif == $id_alternatif){
                                $nama_alter = $alt->nama_alternatif;
                                break;
                            }
                        } 
                        ?>
                            <input type="text" name="nama_alternatif" value="<?= $nama_alter; ?>" class="form-control">
                    </div>

                    <!-- Input untuk nilai kriteria -->
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <?php foreach ($kriteria as $krit): ?>
                            <label for="<?= $krit->nama_kriteria ?>" class="form-label"><?= $krit->nama_kriteria ?></label>
                            <?php
                            $nilai = null;
                            foreach ($nilaialternatif as $row) {
                                if ($row->id_kriteria == $krit->id_kriteria) {
                                    $nilai = $row->nilai;
                                    break;
                                }
                            }
                            ?>
                            <input type="text" name="C<?= $krit->id_kriteria; ?>" value="<?= $nilai; ?>" class="form-control">
                        <?php endforeach; ?>
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