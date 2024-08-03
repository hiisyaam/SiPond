<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div id="content">

                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Perizinan Santri</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Tanggal Izin</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Penjemput</th>
                                            <th>Alasan Perizinan</th>
                                            <th>Status</th>
                                            <th>Sudah Kembali</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="overdue">
                                            <td>1</td>
                                            <td>Ahmad</td>
                                            <td>2024-08-01</td>
                                            <td>2024-08-02</td>
                                            <td>Bapak Ahmad</td>
                                            <td>Pengobatan</td>
                                            <td>Terlambat</td>
                                            <td><input type="checkbox"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Fatimah</td>
                                            <td>2024-08-01</td>
                                            <td>2024-08-01</td>
                                            <td>Ibunya Fatimah</td>
                                            <td>Berobat</td>
                                            <td>On Time</td>
                                            <td><input type="checkbox" checked></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ali</td>
                                            <td>2024-08-02</td>
                                            <td>2024-08-03</td>
                                            <td>Saudara Ali</td>
                                            <td>Kunjungan Keluarga</td>
                                            <td>Terlambat</td>
                                            <td><input type="checkbox"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <?= $this->endSection(); ?>