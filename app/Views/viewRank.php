<div class="card-body">
    <h1 class="text-center mb-1 text-primary">Hasil Ranking WP</h1>    
    <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="bg-info text-white">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Alternatif</th>
                    <th class="text-center">Nilai</th>
                    <th class="text-center">Rank</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dtrank as $dt):
                ?>
                    <tr class="text-center">
                        <td><?= $no++; ?></td>
                        <td><?=esc($dt->nama_alternatif) ?></td>
                        <td><?=esc($dt->nilai_bobot) ?></td>
                        <td><?=esc($dt->ranking) ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>