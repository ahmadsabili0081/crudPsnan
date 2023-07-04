<?php
session_start();
include('../config/config.php');
include('../config/koneksi.php');



$email = $_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE email = '$email'");
$queryResult = mysqli_fetch_array($query);
var_dump($test['nama']);
if (empty($email) || empty($password)) {
  header('location:' . BASE_URL . "auth/login.php?notif=required");
} else {
  if ($queryResult['email']) {
    if (password_verify($password, $queryResult['password'])) {
      $_SESSION['email'] = $queryResult['email'];
      $_SESSION['nama'] = $queryResult['nama'];
      $_SESSION['gambar'] = $queryResult['gambar'];

      header('location:' . BASE_URL);
    } else {
      header('location:' . BASE_URL . "auth/login.php?notif=password");
    }
  } else {
    header('location:' . BASE_URL . "auth/login.php?notif=email");
  }
}
