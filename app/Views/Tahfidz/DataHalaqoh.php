<?= $this->extend('layout') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Halaqoh</h6>
        </div>
        
        <div class="card-body">
            <h1 class="h3 ml-4 text-gray-800">Pencarian Halaqoh Tahfidz</h1>
            <div class="container mt-4">
                <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="unitPendidikan">Unit Pendidikan</label>
                                <select id="unitPendidikan" name="unitPendidikan" class="form-control">
                                    <option value="" selected>Pilih Unit Pendidikan</option>
                                    <option value="Unit1">Unit 1</option>
                                    <option value="Unit2">Unit 2</option>
                                    <option value="Unit3">Unit 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="namaHalaqoh">Nama Halaqoh</label>
                                <select id="namaHalaqoh" name="namaHalaqoh" class="form-control">
                                    <option value="" selected>Pilih Nama Halaqoh</option>
                                    <option value="Unit1">Abu Bakar</option>
                                    <option value="Unit2">Utsman</option>
                                    <option value="Unit3">Ali</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ustadzPengampu">Ustadz Pengampu</label>
                                <select id="ustadzPengampu" name="ustadzPengampu" class="form-control">
                                    <option value="" selected>Pilih Ustadz Pengampu</option>
                                    <option value="Unit1">Ust. Haris</option>
                                    <option value="Unit2">Ust. Machfud</option>
                                    <option value="Unit3">Ust. Adi Hidayat</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="text-right">
                            <a href="#">
                            <button type="submit" class="btn btn-success">Cari Data</button>
                            </a>               
                        </div>
            
                    </form>
                </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>