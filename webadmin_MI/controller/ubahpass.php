<?php
include 'koneksi.php';
  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_admin'])) {
    $id = ($_GET["id_admin"]);
    $query = "SELECT * FROM admin WHERE id_admin ='$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);

  if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password = md5($_POST["password"]);
    $query  = "UPDATE admin SET username = '$username', password ='$password'";
    $query .= "WHERE id_admin = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($conn).
                               " - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='../index.php';</script>";
        }
      }
  
   
  

}
