<?php
include 'koneksi.php';
// mengecek apakah di url ada nilai GET id
if (isset($_GET['id_profil'])) {
  $id = ($_GET["id_profil"]);
  // return var_dump($id);
  $query = "SELECT * FROM profil WHERE id_profil ='$id'";
  $result = mysqli_query($conn, $query);
  // return var_dump($result);
  if (!$result) {
    die("Query Error: " . mysqli_errno($conn) .
      " - " . mysqli_error($conn));
  }
  $data = mysqli_fetch_assoc($result);



  if(isset($_POST['submit'])){
  $nama_profil = $_POST['nama_profil'];
  $nomer_profil = $_POST['nomer_profil'];
  $alamat_profil = $_POST['alamat_profil'];
  $linkmap = $_POST['linkmap'];
  $deskripsi_profil = $_POST['deskripsi_profil'];
  $query  = "UPDATE profil SET nama_profil = '$nama_profil', nomer_profil ='$nomer_profil', alamat_profil='$alamat_profil',
  link_map='$linkmap', deskripsi_profil='$deskripsi_profil'";
    $query .= "WHERE id_profil = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($conn).
                               " - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='../index.php';</script>";
        }
      }

}

?>