<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Alternatif Sepatu</h3>
                    </div>
                    <br>
                    <div class="container-fluid">
                        <a class="btn btn-success" href="<?= site_url('datasepatu/forminputsepatu'); ?>" style="width: 200px">
                            Tambah Data Sepatu
                        </a>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Sepatu</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($datasepatu as $row): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= esc($row->nama_alternatif); ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-warning" href="<?= site_url('datasepatu/formeditsepatu/' . $row->id_alternatif); ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger" href="<?= site_url('datasepatu/hapussepatu/' . $row->id_alternatif); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if (empty($datasepatu)): ?>
                                    <tr>
                                        <td colspan="3" class="text-center">Data sepatu tidak tersedia.</td>
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
