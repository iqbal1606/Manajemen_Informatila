<?php
include "controller/koneksi.php";
$sql_sosmed = "SELECT * FROM sosmed";

$query_sosmed = mysqli_query($conn, $sql_sosmed);

if (!$query_sosmed) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>
<title>Data Sosial Media</title>
<!-- Page Heading -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
    <li class="breadcrumb-item active">Data Sosial Media</li>
</ol>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Data Sosial Media</h1>

</div>

<!-- Content Row -->
<div class="row col">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Sosial Media</h6>
                <br>
                <a class="btn btn-success" href="#" role="button" data-toggle="modal"
                    data-target="#tambahdatasosmedModal">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($data_sosmed = mysqli_fetch_assoc($query_sosmed)) {
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data_sosmed['nama_sosmed']; ?></td>
                                <td><?php echo $data_sosmed['link_sosmed']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#editdatasosmedModal<?=$no?>">Ubah</a>
                                    <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#hapusdatasosmedModal<?=$no?>">Hapus</a>
                                </td>
                            </tr>

                            <!-- edit data -->

                            <div class="modal fade" id="editdatasosmedModal<?=$no?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Silahkan Ubah Data Pegawai
                                            </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <form action="controller/sosmed.php" method="post"
                                                enctype="multipart/form-data" id="frm-mhs">
                                                <input type="hidden" name="id_sosmed"
                                                    value="<?php echo $data_sosmed['id_sosmed']; ?>">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="nama_sosmed"
                                                        value="<?php echo $data_sosmed['nama_sosmed']; ?>"
                                                        class="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Link Sosmed</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $data_sosmed['link_sosmed']; ?>"
                                                        name="link_sosmed" class="required" />
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

                            <div class="modal fade" id="hapusdatasosmedModal<?=$no?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Data !!!</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form action="controller/sosmed.php" method="post">
                                            <input type="hidden" name="id_sosmed"
                                                value="<?php echo $data_sosmed['id_sosmed']; ?>">
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button"
                                                    data-dismiss="modal">Batal</button>
                                                <input class="btn btn-danger" type="submit" name="hapus" value="Hapus">
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>


                            <?php
                                $no++; //untuk nomor urut terus bertambah 1
                            }
                            ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- tambah data -->

    <div class="modal fade" id="tambahdatasosmedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Sosial Media</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card-body">
                    <form action="controller/sosmed.php" method="post" enctype="multipart/form-data" id="frm-mhs">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_sosmed" class="required" />
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link_sosmed" class="required" />
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