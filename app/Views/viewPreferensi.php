<div class="card-body">
    <h1 class="text-center mb-1 text-primary">Hasil Hitung Prefernsi WP</h1>    
    <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="bg-info text-white">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Alternatif</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dtpre as $dt):
                ?>
                    <tr class="text-center">
                        <td><?= $no++; ?></td>
                        <td><?=esc($dt->nama_alternatif) ?></td>
                        <td><?=esc($dt->total) ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
