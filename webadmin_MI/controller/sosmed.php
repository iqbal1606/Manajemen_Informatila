<?php
include "koneksi.php"; 
if(isset($_POST['submit'])){
	$nama_sosmed = $_POST['nama_sosmed'];
  $link_sosmed = $_POST['link_sosmed'];
  $query = mysqli_query($conn,"INSERT INTO `sosmed`(`nama_sosmed`, `link_sosmed`) VALUES 
  ('$nama_sosmed','$link_sosmed')");
  // return var_dump($query);
 if(!$query){
  die ("Query gagal dijalankan: ".mysqli_errno($conn).
                   " - ".mysqli_error($conn));
} else {
echo "<script>alert('Data berhasil disimpan.');window.location='../index.php?page=sosmed';</script>";
}
}

// edit data
if(isset($_POST['ubah'])){
  $id_sosmed= $_POST['id_sosmed'];
	$nama_sosmed= $_POST['nama_sosmed'];
  $link_sosmed= $_POST['link_sosmed'];
  $query_ubah = mysqli_query($conn,"UPDATE `sosmed` SET `nama_sosmed`='$nama_sosmed',`link_sosmed`='$link_sosmed'
  WHERE id_sosmed='$id_sosmed'");
  // return var_dump($nama_sosmed);
 if(!$query_ubah){
  die ("Query gagal dijalankan: ".mysqli_errno($conn).
                   " - ".mysqli_error($conn));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='../index.php?page=sosmed';</script>";
}
}

//hapus data
if(isset($_POST['hapus'])){
  $id_sosmed= $_POST['id_sosmed'];
  $query_hapus = mysqli_query($conn,"DELETE FROM `sosmed` WHERE id_sosmed ='$id_sosmed'");
  // return var_dump($id_sosmed);
 if(!$query_hapus){
  die ("Query gagal dijalankan: ".mysqli_errno($conn).
                   " - ".mysqli_error($conn));
} else {
echo "<script>alert('Data berhasil dihapus.');window.location='../index.php?page=sosmed';</script>";
}
}
