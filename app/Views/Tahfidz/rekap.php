<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Rekap Tahfidz</h5>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addTahfidzModal">
                <i class="fas fa-plus"></i>
                Tambah Rekap Tahfidz
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Hafalan Terakhir</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data, bisa diganti dengan data dari database -->
                        <tr>
                            <td>Ahmad</td>
                            <td>10A</td>
                            <td>Juz 5</td>
                            <td>Sampai Target</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Siti</td>
                            <td>11B</td>
                            <td>Juz 10</td>
                            <td>Belum Sampai</td>
                            <td>Perlu Bimbingan</td>
                        </tr>
                        <tr>
                            <td>Fatimah</td>
                            <td>12C</td>
                            <td>Juz 20</td>
                            <td>Sampai Target</td>
                            <td>Berprestasi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Modal untuk tambah rekap tahfidz -->
    <div class="modal fade" id="addTahfidzModal" tabindex="-1" aria-labelledby="addTahfidzModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTahfidzModalLabel">Tambah Rekap Tahfidz</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addTahfidzForm">
                        <div class="form-group">
                            <label for="studentName">Nama</label>
                            <input type="text" class="form-control" id="studentName" required>
                        </div>
                        <div class="form-group">
                            <label for="class">Kelas</label>
                            <input type="text" class="form-control" id="class" required>
                        </div>
                        <div class="form-group">
                            <label for="lastMemorization">Hafalan Terakhir</label>
                            <input type="text" class="form-control" id="lastMemorization" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" required>
                                <option>Sampai Target</option>
                                <option>Belum Sampai</option>
                            </select>
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

<?= $this->endSection(); ?>
