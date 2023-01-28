<?php
session_start();
include "koneksi.php";
if (isset($_POST['login'])) {
    $username = $_POST['username']; // form pengisian di html yaitu emal
    // return var_dump($username);
    $password = md5($_POST["password"]); //form pengisisan password yang telah di enskripsi dengan md5
    $cek_user = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' and password='$password'");// menampilkan data keseluruan
    // return var_dump($cek_user);
    $row      = mysqli_num_rows($cek_user);
    if ($row == 1) {
        $fetch_pass = mysqli_fetch_assoc($cek_user);
        $cek_pass = $fetch_pass['password'];
        if ($cek_pass != $password) {
        echo "<script>alert('password salah');document.location.href='../login.php';</script>";
        } else{
        $_SESSION['log'] =  $fetch_pass ;
        $_SESSION['username'] = $username;
        echo "<script>alert('login Berhasil');document.location.href='../index.php';</script>";
        }
    } else {
      echo "<script>alert('password/username salah');document.location.href='../login.php';</script>";
    }
}

?>