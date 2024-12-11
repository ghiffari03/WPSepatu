<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Nilai Kriteria</h3>
                    </div>
                    <br>
                    <div class="container-fluid">
                        <a class="btn btn-success" href="<?= site_url('datanilai/forminputnilai'); ?>" style="width: 300px">
                            Tambah Nilai Kriteria
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Alternatif</th>
                                    <?php foreach ($kriteria as $krit): ?>
                                        <th><?= $krit->nama_kriteria; ?></th>
                                    <?php endforeach; ?>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($alternatif as $alt): ?>
                                    <?php
                                    $sepatu = false;
                                    foreach ($nilai_alternatif as $n_alt) {
                                        if ($n_alt->id_alternatif == $alt->id_alternatif) {
                                            $sepatu = true;
                                            break;
                                        }
                                    }
                                    ?>
                                    <?php if ($sepatu): ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td class="text-center"><?= $alt->nama_alternatif; ?></td>
                                            <?php foreach ($kriteria as $k): ?>
                                                <?php 
                                                $nilai = '-';
                                                foreach ($nilai_alternatif as $n_alt) {
                                                    if ($n_alt->id_alternatif == $alt->id_alternatif && $n_alt->id_kriteria == $k->id_kriteria) {
                                                        $nilai = $n_alt->nilai;
                                                        break;
                                                    }
                                                }
                                                ?>
                                                <td class="text-center"><?= $nilai; ?></td>
                                            <?php endforeach; ?>
                                            <td class="text-center">
                                            <a class="btn btn-warning" href="<?= site_url('datanilai/formeditnilai/' . $alt->id_alternatif); ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger" href="<?= site_url('datanilai/hapusnilai/' . $alt->id_alternatif); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                Hapus
                                            </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
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
