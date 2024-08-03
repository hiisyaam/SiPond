<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Penilaian Santri</h5>
                </div>
                <div class="card-body">
                    <!-- Filter -->
                    <div class="mb-4">
                        <form class="form-inline">
                            <div class="form-group mb-2 mr-2">
                                <label for="filterName" class="sr-only">Nama</label>
                                <input type="text" class="form-control" id="filterName" placeholder="Nama">
                            </div>
                            <div class="form-group mb-2 mr-2">
                                <label for="filterClass" class="sr-only">Kelas</label>
                                <input type="text" class="form-control" id="filterClass" placeholder="Kelas">
                            </div>
                            <button type="button" class="btn btn-success mb-2" id="applyFilter">Cari Data</button>
                        </form>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="santriTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Unit</th>
                                    <th>Nilai Akhlak</th>
                                    <th>Nilai Bahasa</th>
                                    <th>Nilai Ibadah</th>
                                    <th>Nilai Aturan Asrama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad</td>
                                    <td>10</td>
                                    <td>SMA</td>
                                    <td>85</td>
                                    <td>90</td>
                                    <td>80</td>
                                    <td>75</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="1">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(1)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Siti</td>
                                    <td>9</td>
                                    <td>SMP</td>
                                    <td>88</td>
                                    <td>85</td>
                                    <td>90</td>
                                    <td>80</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="2">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(2)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Fajar</td>
                                    <td>11</td>
                                    <td>SMA</td>
                                    <td>75</td>
                                    <td>80</td>
                                    <td>85</td>
                                    <td>70</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="3">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(3)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nina</td>
                                    <td>8</td>
                                    <td>SMP</td>
                                    <td>90</td>
                                    <td>88</td>
                                    <td>92</td>
                                    <td>85</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="4">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(4)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Rina</td>
                                    <td>12</td>
                                    <td>SMA</td>
                                    <td>80</td>
                                    <td>82</td>
                                    <td>78</td>
                                    <td>88</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="5">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(5)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Yusuf</td>
                                    <td>10</td>
                                    <td>SMA</td>
                                    <td>85</td>
                                    <td>87</td>
                                    <td>80</td>
                                    <td>82</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="6">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(6)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Rizky</td>
                                    <td>9</td>
                                    <td>SMP</td>
                                    <td>88</td>
                                    <td>85</td>
                                    <td>86</td>
                                    <td>79</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="7">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(7)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Fitri</td>
                                    <td>11</td>
                                    <td>SMA</td>
                                    <td>84</td>
                                    <td>89</td>
                                    <td>83</td>
                                    <td>77</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="8">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(8)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Wahyu</td>
                                    <td>10</td>
                                    <td>SMA</td>
                                    <td>82</td>
                                    <td>86</td>
                                    <td>80</td>
                                    <td>75</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="9">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(9)">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Intan</td>
                                    <td>8</td>
                                    <td>SMP</td>
                                    <td>87</td>
                                    <td>90</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="10">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(10)">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="editName">Nama</label>
                        <input type="text" class="form-control" id="editName" value="">
                    </div>
                    <div class="form-group">
                        <label for="editClass">Kelas</label>
                        <input type="text" class="form-control" id="editClass" value="">
                    </div>
                    <div class="form-group">
                        <label for="editUnit">Unit</label>
                        <select class="form-control" id="editUnit">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editNilaiAkhlak">Nilai Akhlak</label>
                        <input type="number" class="form-control" id="editNilaiAkhlak" value="">
                    </div>
                    <div class="form-group">
                        <label for="editNilaiBahasa">Nilai Bahasa</label>
                        <input type="number" class="form-control" id="editNilaiBahasa" value="">
                    </div>
                    <div class="form-group">
                        <label for="editNilaiIbadah">Nilai Ibadah</label>
                        <input type="number" class="form-control" id="editNilaiIbadah" value="">
                    </div>
                    <div class="form-group">
                        <label for="editNilaiAsrama">Nilai Aturan Asrama</label>
                        <input type="number" class="form-control" id="editNilaiAsrama" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            // Logika untuk menghapus data dengan ID
            console.log('Data dengan ID ' + id + ' dihapus.');
        }
    }

    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);
        
        // Di sini Anda bisa memuat data yang ingin diedit berdasarkan ID
        // Misalnya, menggunakan AJAX untuk mendapatkan data dari server
        
        // Mengatur data di modal
        modal.find('#editName').val('Nama Santri ' + id);
        modal.find('#editClass').val('Kelas ' + id);
        modal.find('#editUnit').val('SMA'); // Atur sesuai data
        modal.find('#editNilaiAkhlak').val('85'); // Atur sesuai data
        modal.find('#editNilaiBahasa').val('90'); // Atur sesuai data
        modal.find('#editNilaiIbadah').val('80'); // Atur sesuai data
        modal.find('#editNilaiAsrama').val('75'); // Atur sesuai data
    });
</script>

<?= $this->endSection(); ?>
