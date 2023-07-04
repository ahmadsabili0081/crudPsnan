<?php
include('../config/config.php');
include('../config/koneksi.php');
$nama = $_POST['nama'];
$jurusan = $_POST['Jurusan'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$password = $_POST['password'];
$reType = $_POST['password2'];


$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE email='$email'");
if (empty($nama) || empty($jurusan) || empty($nim) || empty($email) || empty($password) || empty($reType)) {
  header('location:' . BASE_URL . "auth/register.php?notif=required");
} else if ($password != $reType) {
  header('location:' . BASE_URL . "auth/register.php?notif=noMacth");
} elseif (strlen($password) <= 3 || strlen($reType) <= 3) {
  header('location:' . BASE_URL . "auth/register.php?notif=lengthPass");
} elseif ($query->num_rows > 0) {
  header('location:' . BASE_URL . "auth/register.php?notif=emailIs");
} else {
  $passwordVery = password_hash($password, PASSWORD_DEFAULT);
  mysqli_query($koneksi, "INSERT INTO tb_mahasiswa (nama,jurusan,nim,email,password,gambar) VALUES ('$nama','$jurusan','$nim','$email','$passwordVery','default.jpg')");
  header('location:' . BASE_URL . "auth/login.php");
}
