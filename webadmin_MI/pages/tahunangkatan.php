<title>Tahun ajar</title>
<!-- Page Heading -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
    <li class="breadcrumb-item active">Set Tahun Angkatan</li>
</ol>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Set Tahun Angkatan</h1>

</div>

<!-- Content Row -->
<div class="row col">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Tahun Angkatan</h6>
                <br>
                <a class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#tambahdatatahunajarModal">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Tahun Angkatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>2020</td>
                                <td>
                                    <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#hapusdatatahunajarModal">Hapus</a>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- tambah data -->

    <div class="modal fade" id="tambahdatatahunajarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Tambah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card-body">
                    <form action="index.php?page=datapegawai" method="post" enctype="multipart/form-data" id="frm-mhs">
                        <div class="form-group">
                            <label>Masukan Tahun Angkatan</label>
                            <input type="number" id="tahun" class="form-control" name="tahun" class="required" />
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <input class="btn btn-primary" type="submit" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>

   
    <!-- hapus data -->

    <div class="modal fade" id="hapusdatakontrakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Data ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="index.php?data=datapelanggan">Hapus</a>
                </div>
            </div>
        </div>


    </div>