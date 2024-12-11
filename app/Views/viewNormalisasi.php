<div class="card-body">
    <h1 class="text-center mb-1 text-primary">Normalisasi WP</h1>
    <p class="text-center text-muted mb-2">Note: B = Benefit <br> C = Cost</p>
    
    <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="bg-info text-white">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Peserta</th>
                    <?php
                    $datakriteria = [];
                    foreach ($dtnorm as $d) {
                        // Gabungkan nama_kriteria dengan keterangan
                        if (!isset($datakriteria[$d->nama_kriteria])) {
                            $datakriteria[$d->nama_kriteria] = $d->keterangan;
                        }
                    }
                    foreach ($datakriteria as $k => $keterangan) {
                        echo "<th class='text-center'>" . esc($k) . " - " . esc($keterangan) . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $data_alternatif = [];
                foreach ($dtnorm as $d) {
                    // Buat array dua dimensi untuk data alternatif
                    $data_alternatif[$d->nama_alternatif][$d->nama_kriteria] = $d->nilai_normalisasi;
                }

                // Tampilkan data per alternatif
                $no = 1;
                foreach ($data_alternatif as $nama_alt => $nilai_kriteria):
                ?>
                    <tr class="text-center">
                        <td><?= $no++; ?></td>
                        <td><?= esc($nama_alt); ?></td>
                        <?php
                        // Tampilkan nilai per kriteria sesuai urutan header
                        foreach ($datakriteria as $kriteria => $keterangan) {
                            // Pastikan nilai normalisasi ada untuk kriteria tertentu
                            $nilai_normalisasi = isset($nilai_kriteria[$kriteria]) ? $nilai_kriteria[$kriteria] : 0;
                            echo "<td>" . esc($nilai_normalisasi) . "</td>";
                        }
                        ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
