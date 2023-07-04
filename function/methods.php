<?php
function getMahasiswa($koneksi)
{
  $query = mysqli_query($koneksi, 'SELECT * FROM tb_mahasiswa');
  $queryResult  = mysqli_fetch_all($query, MYSQLI_ASSOC);
  return $queryResult;
}

function getMahasiswaById($koneksi, $id)
{
  $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = $id");
  $queryResult = mysqli_fetch_object($query);
  return $queryResult;
}
function updateData($koneksi, $data)
{
  $query = "UPDATE tb_mahasiswa SET nama= '$data[nama]', jurusan= '$data[jurusan]', nim= '$data[nim]', email='$data[email]', gambar= '$data[gambar]' WHERE id_mahasiswa= $data[id_mahasiswa]";
  $queryResult = mysqli_query($koneksi, $query);
  if ($queryResult) {
    return true;
  }
}
function hapusMahasiswa($koneksi, $id_mahasiswa)
{
  $query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa=$id_mahasiswa";
  $queryResult = mysqli_query($koneksi, $query);
  if ($queryResult) {
    return true;
  }
}
