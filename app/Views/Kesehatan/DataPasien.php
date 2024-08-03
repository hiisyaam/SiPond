The styling for this basic card example is created by using default Bootstrap
utility classes. By using utility classes, the style of the card component can be
easily modified with no need for any custom CSS!


<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cari Data Pasien</h6>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="unitPendidikan">Nama Pasien</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukan Nama Pasien" aria-label="Nama Pasien" aria-describedby="button-addon2">
                            <div class="input-group-append">                     
                                <button class="btn btn-success" type="submit" id="button-addon2">Cari Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Keluhan</th>
                        <th>Pemeriksa</th>
                        <th>Jenis Rawat</th>
                        <th>Resep Obat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Demam Meriang</td>
                        <td>dr. A</td>
                        <td>Rawat Jalan</td>
                        <td>Amoxcilin 250mg</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Demam Meriang</td>
                        <td>dr. A</td>
                        <td>Rawat Jalan</td>
                        <td>Amoxcilin 250mg</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

<?= $this->endSection(); ?>