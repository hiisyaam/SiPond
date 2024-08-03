<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Data Mata Pelajaran</h5>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addSubjectModal">
                <i class="fas fa-plus"></i>
                Tambah Mata Pelajaran</button>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tahun Ajaran 2024/2025</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Guru Pengampu</th>
                                    <th>Kelas</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Matematika</td>
                                    <td>Bu Rina</td>
                                    <td>XII IPA</td>
                                    <td>2024/2025</td>
                                    <td>Wajib</td>
                                </tr>
                                <tr>
                                    <td>Fisika</td>
                                    <td>Pak Budi</td>
                                    <td>XII IPA</td>
                                    <td>2024/2025</td>
                                    <td>Wajib</td>
                                </tr>
                                <!-- Data lainnya -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal untuk tambah mata pelajaran -->
            <div class="modal fade" id="addSubjectModal" tabindex="-1" aria-labelledby="addSubjectModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSubjectModalLabel">Tambah Mata Pelajaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addSubjectForm">
                                <div class="form-group">
                                    <label for="subjectName">Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="subjectName" required>
                                </div>
                                <div class="form-group">
                                    <label for="teacher">Guru Pengampu</label>
                                    <input type="text" class="form-control" id="teacher" required>
                                </div>
                                <div class="form-group">
                                    <label for="class">Kelas</label>
                                    <input type="text" class="form-control" id="class" required>
                                </div>
                                <div class="form-group">
                                    <label for="academicYear">Tahun Ajaran</label>
                                    <input type="text" class="form-control" id="academicYear" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Keterangan</label>
                                    <input type="text" class="form-control" id="description">
                                </div>
                                <div class="text-right">
                                    <a href="#">
                                    <button type="submit" class="btn btn-success">Simpan Data</button>
                                    </a>               
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
