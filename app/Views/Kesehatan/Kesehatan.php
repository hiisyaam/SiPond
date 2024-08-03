<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid mt-4">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Berobat Pasien</h6>
    </div>
    <div class="card-body">
<form action="">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="unitPendidikan">Masukan Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="form-group col-md-4">
                    <label for="namaHalaqoh">Keluhan</label>
                    <input type="text" class="form-control" placeholder="Masukan Keluhan">
                </div>
                <div class="form-group col-md-4">
                    <label for="ustadzPengampu">Pemeriksa</label>
                    <select id="ustadzPengampu" name="ustadzPengampu" class="form-control">
                        <option value="" selected>--Pemeriksa Pasien--</option>
                        <option value="Unit1">dr. A</option>
                        <option value="Unit2">dr. B</option>
                        <option value="Unit3">dr. C</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="unitPendidikan">Jenis Rawat</label>
                    <select id="unitPendidikan" name="unitPendidikan" class="form-control">
                        <option value="" selected>--Pilih Jenis Rawat--</option>
                        <option value="Unit1">Rawat Inap</option>
                        <option value="Unit2">Rawat Jalan</option>
                        <option value="Unit3">Istirahat Dirumah</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="namaHalaqoh">Resep Obat</label>
                    <input type="text" class="form-control" placeholder="Masukan Resep Obat">
                </div>
            </div>

            <div class="text-right">
                <a href="#">
                <button type="submit" class="btn btn-success">Submit</button>
                </a>               
            </div>

        </form>
</div>
    </div>
</div>


<?= $this->endSection(); ?>