<?php
include "controller/koneksi.php";
$sql_profil = "SELECT * FROM profil order by id_profil ASC ";

$query_profil = mysqli_query($conn, $sql_profil);
$data_profil = mysqli_fetch_assoc($query_profil);
// return var_dump($data);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>
<title>Profil</title>
<!-- Page Heading -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Profil</h1>

</div>

<!-- Content Row -->
<div class="row">

    <div class="col-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data profil</h6>
                <a href="#" ole="button" data-toggle="modal" data-target="#editdetailprofilModal">
                <i class="fas fa-pen">Edit</i>
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="card-area">
                    <div>
                        <h6 class="font-weight-bold">Nama :</h6>
                        <p><?php echo $data_profil['nama_profil'];?></p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Nomer Telepon :<h6>
                        <p><?php echo $data_profil['nomer_profil'];?></p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Alamat :</h6>
                        <p><?php echo $data_profil['alamat_profil'];?></p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Link maps :</h6>
                        <p><?php echo $data_profil['link_map'];?></p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Deskripsi :</h6>
                        <p><?php echo $data_profil['deskripsi_profil'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Pie Chart -->
    <div class="col-xl-5 col-lg-7">
        <div> <a href="#"><img width="60%" src="img/MI.png"></a></div>

    </div>

    <!-- edit data -->
    <div class="modal fade" id="editdetailprofilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Ubah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>


                <div class="card-body">
                    <form action="controller/profil.php?id_profil=<?php echo $data_profil['id_profil']; ?>" method="post"
                        enctype="multipart/form-data" id="frm-mhs">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_profil" value="<?php echo $data_profil['nama_profil'];?>"
                                class="form-control"  class="required" />
                        </div>
                        <div class="form-group">
                            <label>Nomer</label>
                            <input type="number" name="nomer_profil" value="<?php echo $data_profil['nomer_profil'];?>"
                                class="form-control"  class="required" />
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat_profil" rows="5" cols="50"
                                class="required"><?php echo $data_profil['alamat_profil'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Link Map</label>
                            <textarea class="form-control" name="linkmap" rows="5" cols="50"
                                class="required"><?php echo $data_profil['link_map'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi_profil" class="form-control" rows="5" cols="50"
                                class="required"><?php echo $data_profil['deskripsi_profil'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ubah Logo</label><br>
                            <input type="file" name="img">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <input class="btn btn-primary" name="submit" type="submit" value="Simpan">
                        </div>


                    </form>

                </div>
            </div>
        </div>


