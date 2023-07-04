<?php
include('../config/koneksi.php');
include('../config/config.php');
include('../function/methods.php');
$id_mahasiswa = isset($_GET['id_mahasiswa']) ? $_GET['id_mahasiswa'] : '';

hapusMahasiswa($koneksi, $id_mahasiswa);
header('location:' . BASE_URL . "mahasiswa.php?notif=successHapus");
