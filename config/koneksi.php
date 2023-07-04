<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "mahasiswaCrud";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) die('Koneksi tidak bisa');
return $koneksi;
