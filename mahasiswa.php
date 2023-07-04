<?php
include('./config/config.php');
include('./config/koneksi.php');
include("./function/methods.php");
session_start();

if (empty($_SESSION['email'])) {
  header('location:' . BASE_URL . "auth/login.php");
}
include('./templates/header.php'); ?>
<div class="col-md-12 mt-4">
  <div class="card">
    <div class="card-header">
      <h5>Halaman Mahasiswa</h5>
    </div>
    <div class="card-body">
      <?php $notif = isset($_GET['notif']) ? $_GET['notif'] : '';
      if ($notif == "success") {
        echo '<div class="alert alert-success" role="alert">
               Data Berhasil DiUpdate!
              </div>';
      } elseif ($notif == "successHapus") {
        echo '<div class="alert alert-success" role="alert">
                Data Berhasil Dihapus!
              </div>';
      }
      ?>
      <?php
      $dataMahasiswa = getMahasiswa($koneksi);
      ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center" style="width: 30px;">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Nim</th>
            <th class="text-center">Jurusan</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gambar</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($dataMahasiswa as $mahasiswa) : ?>
            <tr>
              <td class="text-center"><?= $no++; ?></td>
              <td class="text-center"><?= $mahasiswa['nama']; ?></td>
              <td class="text-center"><?= $mahasiswa['nim']; ?></td>
              <td class="text-center"><?= $mahasiswa['jurusan']; ?></td>
              <td class="text-center"><?= $mahasiswa['email']; ?></td>
              <td class="text-center"><img style="width: 150px; height:150px;" class="img-thumbnail" src="<?= BASE_URL . "images/" . $mahasiswa['gambar']; ?>" alt=""></td>
              <td class="text-center">
                <a class="btn btn-sm btn-success" href="<?= BASE_URL . "mahasiswaEdit.php?id_mahasiswa=$mahasiswa[id_mahasiswa]"; ?>">Edit</a>
                <a class="btn btn-sm btn-danger" href="<?= BASE_URL . "function/prosesHapus.php?id_mahasiswa=$mahasiswa[id_mahasiswa]"; ?>">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include('./templates/footer.php'); ?>