<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
        <div class="container-fluid">

<!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Absensi <?= $unit ?></h1>
        <div class="card shadow mb-4">
                <div class="row">
                    <div class="col-8 mx-3 mb-1">
                        <form action="">
                            <div class="mt-3">
                                <label for="jurusan">Pilih Kelas</label>
                                    <select class="form-control" aria-label="Default select example" name="jurusan">
                                            <option selected>--Pilih Kelas--</option>
                                            <option>3 SD</option>
                                            <option>4 SD</option>
                                            <option>5 SD</option>
                                            <option>6 SD</option>
                                                            
                                    </select>
                            </div>
                        </form>
                    </div>

                    <div class="col-8 mx-3 mb-3">
                        <form action="">
                            <div class="mt-3">
                                <label for="jurusan">Mata Pelajaran</label>
                                    <select class="form-control" aria-label="Default select example" name="jurusan">
                                            <option selected>--Pilih Mapel--</option>
                                            <option>Matematika</option>
                                            <option>Fisika</option>
                                            <option>Nahwu</option>
                                            <option>Biologi</option>
                                                            
                                    </select>
                            </div>
                            <div class="my-3 text-right">
                                <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Cari Data</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Absensi Kelas abcd</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>NIS</th>
                                <th>Status Kehadiran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>123456</td>
                                <td>
                                    <select >
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>234567</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>345678</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>456789</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>567890</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>678901</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>789012</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>890123</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>901234</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>123457</td>
                                <td>
                                    <select>
                                        <option>Hadir</option>
                                        <option>Izin</option>
                                        <option>Sakit</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="my-3 text-right">
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Simpan Absen</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>