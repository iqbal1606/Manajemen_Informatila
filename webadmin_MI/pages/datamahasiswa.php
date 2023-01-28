<title>Data Mahasiswa</title>
<!-- Page Heading -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
    <li class="breadcrumb-item active">Data Mahasiswa</li>
</ol>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa</h1>

</div>

<!-- Content Row -->
<div class="row col">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Data Pegawai</h6>
                <br>
                <a class="btn btn-success" href="#" role="button" data-toggle="modal"
                    data-target="#tambahdatamhsModal">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jenis Kelamin</th>
                                <th>NIM</th>
                                <th>Angkatan</th>
                                <th>Email Unesa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Iqbal Hario</td>
                                <td>Laki-laki</td>
                                <td>20051397029</td>
                                <td>2020</td>
                                <td>iqbamhs@gmail</td>
                                <td>
                                    <a class="btn btn-primary" href="#" role="button" data-toggle="modal"
                                        data-target="#editdatamhsModal">Ubah</a>
                                    <a class="btn btn-danger" href="#" role="button" data-toggle="modal"
                                        data-target="#hapusdatamhsModal">Hapus</a>
                                </td>

                            </tr>

                            <!-- edit data -->

                            <div class="modal fade" id="editdatamhsModal<?=$no?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Silahkan Ubah Data Mahasiswa
                                            </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <form action="controller/pegawai.php" method="post"
                                                enctype="multipart/form-data" id="frm-mhs">
                                                <input type="hidden" name="id_mhs" value="">
                                                <div class="form-group">
                                                    <label>Nama Mahasiswa</label>
                                                    <input type="text" class="form-control" name="nama_mhs"
                                                        value="Iqbal Hario Syahputra" class="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jk_pegawai"
                                                            id="flexRadioDefault1" value="laki_laki">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Laki-laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jk_pegawai"
                                                            id="flexRadioDefault2" value="perempuan">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input type="number" class="form-control" value="20051397029"
                                                        name="nim" class="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Angkatan</label>
                                                    <select class="form-control" title="Please Select" id="select"
                                                        name="angkatan" required>
                                                        <option value="" selected>
                                                        </option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email Unesa</label>
                                                    <textarea id="alamat" class="form-control" name="email" rows="5"
                                                        cols="50" class="required"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Batal</button>
                                                    <input class="btn btn-primary" type="submit" name="ubah"
                                                        value="Ubah">
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- hapus data -->

                            <div class="modal fade" id="hapusdatamhsModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Data !!!</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form action="controller/pegawai.php" method="post">
                                            <input type="hidden" name="id_pegawai" value="">
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button"
                                                    data-dismiss="modal">Batal</button>
                                                <input class="btn btn-danger" type="submit" name="hapus" value="Hapus">
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- tambah data -->

    <div class="modal fade" id="tambahdatamhsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai Baru</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card-body">
                    <form action="controller/pegawai.php" method="post" enctype="multipart/form-data" id="frm-mhs">

                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mhs" value=""
                                class="required" />
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk_pegawai" id="flexRadioDefault1"
                                    value="laki_laki">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jkmhs" id="flexRadioDefault2"
                                    value="perempuan">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="number" class="form-control" value="" name="nim" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <select class="form-control" title="Please Select" id="select" name="angkatan" required>
                                <option value="" selected>
                                </option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email Unesa</label>
                            <input type="number" class="form-control" value="" name="email" class="required" />
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>
</div>