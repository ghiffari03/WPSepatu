<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Kriteria</h3>
                    </div>
                    <br>
                    <div class="container-fluid">
                        <a class="btn btn-success" href="<?= site_url('datakr/forminputkr'); ?>" style="width: 300px">Tambah Kriteria</a>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kriteria</th>
                                    <th>Keterangan</th>
                                    <th>Bobot</th>
                                    <th>Jenis Kriteria</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($datakr as $row): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row->nama_kriteria ?></td>
                                        <td><?= $row->keterangan ?></td>
                                        <td><?= $row->bobot ?></td>
                                        <td><?= $row->jenis ?></td>

                                        <td class="text-center">
                                            <a class="btn btn-warning" href="<?= site_url('datakr/formeditkr/' . (is_object($row) ? $row->id_kriteria : $row['id_kriteria'])); ?>">Edit</a>
                                            <a class="btn btn-danger" href="<?= site_url('datakr/hapuskr/' . (is_object($row) ? $row->id_kriteria : $row['id_kriteria'])); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if (empty($datakr)): ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Data tidak ditemukan.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    </div>
</div><!-- /.container-fluid -->
