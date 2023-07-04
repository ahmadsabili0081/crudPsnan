<?php
include('../config/config.php');
include('../config/koneksi.php');
include('../function/methods.php');

$gambar = $_FILES['gambar']['name'];
$idMahasiswa = $_POST['id_mahasiswa'];

$newGambar = null;
if ($gambar) {
  $maxSize = 2 * 1024 * 1024;
  $tipe = ['jpg', 'png', 'jpeg'];
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $tipeFile = $_FILES['gambar']['type'];
  $tmpFile = $_FILES['gambar']['tmp_name'];
  if ($ukuranFile > $maxSize) {
    header("location:" . BASE_URL . "mahasiswaEdit.php?id_mahasiswa=$idMahasiswa&notif=size");
  } else {
    $fileExtensi = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if (!in_array($fileExtensi, $tipe)) {
      header("location:" . BASE_URL . "mahasiswaEdit.php?id_mahasiswa=$idMahasiswa&notif=ekstensi");
    } else {
      $targetFile =  uniqid() . '_' . $namaFile;
      $gambarLama = $_POST['gambarLama'];
      if ($gambarLama != 'default.jpg') {
        unlink($gambarLama);
      }
      move_uploaded_file($tmpFile,  '../images/' . $targetFile);
      $newGambar = $targetFile;
    }
  }
} else {
  $newGambar = $_POST['gambarLama'];
}

$data = [
  'id_mahasiswa' => $_POST['id_mahasiswa'],
  'nama' => $_POST['nama'],
  'jurusan' => $_POST['Jurusan'],
  'nim' => $_POST['nim'],
  'email' => $_POST['email'],
  'gambar' => $newGambar,
];
updateData($koneksi, $data);
header("location:" . BASE_URL . "mahasiswa.php?notif=success");
