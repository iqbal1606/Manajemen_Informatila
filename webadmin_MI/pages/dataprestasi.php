<title>Data Preatasi</title>
<!-- Page Heading -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
    <li class="breadcrumb-item active">Data Prestasi</li>
</ol>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Data Prestasi</h1>

</div>

<!-- Content Row -->
<div class="row col">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Data Prestasi</h6>
                <br>
                <a class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#tambahdataprestasiModal">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Nama Lomba</th>
                                <th>Tingkat Lomba</th>
                                <th>Tingkat Juara</th>
                                <th>Tahun </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Iqbal Hario</td>
                                <td>lomba makan kerupuk</td>
                                <td>Nasional</td>
                                <td>Pertama</td>
                                <td>2019</td>
                                <td>
                                    <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#editdataprestasiModal">Ubah</a>
                                    <a class="btn btn-warning" href="index.php?page=detailprestasi" role="button">Detail</a>
                                    <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#hapusdataprestasiModal">Hapus</a>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- tambah data -->

    <div class="modal fade" id="tambahdataprestasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Tambah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card-body">
                    <form action="index.php?page=datapelanggan" method="post" enctype="multipart/form-data" id="frm-mhs">
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" id="nama_pemilik" class="form-control" name="namamahasiswa" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Tahun Ajar</label>
                            <select class="form-control" title="Please Select" id="select" name="Jenis Kelamin" required>
                                <option value="" selected>- Pilih Tahun Ajar -</option>
                                <option value="user">2019/2020</option>
                                <option value="user">2020/2021</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Lomba</label>
                            <input type="text" id="nama_kos" class="form-control" name="namalomba" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Skala Lomba</label>
                            <input type="text" id="nama_kos" class="form-control" name="skalalomba" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Tingkat Juara</label>
                            <input type="text" id="nama_kos" class="form-control" name="tingkatjuara" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Tahun Lomba</label>
                            <input type="text" id="nama_kos" class="form-control" name="thnlomba" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Bukti Sertifikat</label>
                            <input type="file" id="nama_kos" class="form-control" name="sertifikat" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Foto Mahasiswa</label>
                            <input type="file" id="nama_kos" class="form-control" name="fotomhs" class="required" />
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

    <!-- edit data -->

    <div class="modal fade" id="editdataprestasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Ubah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card-body">
                    <form action="index.php?page=detailprofil" method="post" enctype="multipart/form-data" id="frm-mhs">
                    <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" id="nama_pemilik" class="form-control" name="namamahasiswa" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Tahun Ajar</label>
                            <select class="form-control" title="Please Select" id="select" name="Jenis Kelamin" required>
                                <option value="" selected>- Pilih Tahun Ajar -</option>
                                <option value="user">2019/2020</option>
                                <option value="user">2020/2021</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Lomba</label>
                            <input type="text" id="nama_kos" class="form-control" name="namalomba" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Skala Lomba</label>
                            <input type="text" id="nama_kos" class="form-control" name="skalalomba" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Tingkat Juara</label>
                            <input type="text" id="nama_kos" class="form-control" name="tingkatjuara" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Tahun Lomba</label>
                            <input type="text" id="nama_kos" class="form-control" name="thnlomba" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Bukti Sertifikat</label>
                            <input type="file" id="nama_kos" class="form-control" name="sertifikat" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Foto Mahasiswa</label>
                            <input type="file" id="nama_kos" class="form-control" name="fotomhs" class="required" />
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

    <div class="modal fade" id="hapusdataprestasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Data</h5>
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