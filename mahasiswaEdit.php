<?php
include('./config/config.php');
include('./config/koneksi.php');
include('./function/methods.php');

$id = isset($_GET['id_mahasiswa'])  ? $_GET['id_mahasiswa'] : '';
?>
<?php include('./templates/header.php'); ?>
<div class="row mt-4">
  <div class="col-md-12">
    <?php $dataMahasiswa = getMahasiswaById($koneksi, $id); ?>

    <div class="card">
      <div class="card-header">
        <h4>Edit Mahasiswa</h4>
      </div>
      <div class="card-body">
        <?php
        $notif = isset($_GET['notif']) ? $_GET['notif'] : '';
        if ($notif == "size") {
          echo '<div class="alert alert-danger" role="alert">
                 Ukuran Foto Terlalu Besar!, Max Ukuran 2Mb!
                </div>';
        } elseif ($notif == 'ekstensi') {
          echo '<div class="alert alert-danger" role="alert">
                 Ektensi Yang Diperbolehkan JPG,PNG,JPEG!
                </div>';
        }
        ?>
        <form action="<?= BASE_URL . "function/prosesEdit.php"; ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_mahasiswa" value="<?= $dataMahasiswa->id_mahasiswa; ?>">
          <input type="hidden" name="gambarLama" value="<?= $dataMahasiswa->gambar; ?>">
          <div class="mb-3">
            <label for="Nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" value="<?= $dataMahasiswa->nama; ?>" placeholder="Ahmad sabili" name="nama">
          </div>
          <div class="mb-3">
            <label for="Jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" value="<?= $dataMahasiswa->jurusan; ?>" placeholder="Sistem Informasi" name="Jurusan">
          </div>
          <div class="mb-3">
            <label for="Jurusan" class="form-label">NIM</label>
            <input type="text" class="form-control" value="<?= $dataMahasiswa->nim; ?>" placeholder="11180332" name="nim">
          </div>
          <div class="mb-3">
            <label for="Jurusan" class="form-label">Email</label>
            <input type="text" class="form-control" value="<?= $dataMahasiswa->email; ?>" placeholder="name@example.com" name="email">
          </div>
          <div class="mb-3">
            <div class="col-md-4">
              <img class="img-thubmnail m-2" src="<?= BASE_URL . "images/" . $dataMahasiswa->gambar; ?>" alt="">
            </div>
            <input type="file" class="form-control" name="gambar">
          </div>
          <a class="btn btn-sm btn-warning" href="<?= BASE_URL . "mahasiswa.php"; ?>">Kembali</a>
          <button class="btn btn-sm btn-primary" type="submit">Edit Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('./templates/footer.php'); ?>