<?php include('../auth/header_auth.php'); ?>
<div class="row mt-5">
  <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Registrasi</h3>
      </div>
      <div class="card-body">
        <?php
        $notif = isset($_GET['notif']) ? $_GET['notif']  : "";
        if ($notif == "required") {
          echo '<div class="alert alert-danger" role="alert">
                 Isi Form Dengan Benar!
                </div>';
        } else if ($notif == "noMacth") {
          echo '<div class="alert alert-danger" role="alert">
                  Password Tidak Sama Dengan Re-Type Password!
                </div>';
        } else if ($notif == "lengthPass") {
          echo '<div class="alert alert-danger" role="alert">
                  Panjang Password Harus Lebih Dari 3 Karakter!
                </div>';
        } else if ($notif == "emailIs") {
          echo '<div class="alert alert-danger" role="alert">
                 Email Yang Anda Masukkan Sudah Terdaftar!
                </div>';
        }
        ?>
        <form action="<?= BASE_URL . "function/auth_proses.php"; ?>" method="post">
          <div class="mb-3">
            <label for="Nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Ahmad sabili" name="nama">
          </div>
          <div class="mb-3">
            <label for="Jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" placeholder="Sistem Informasi" name="Jurusan">
          </div>
          <div class="mb-3">
            <label for="Jurusan" class="form-label">NIM</label>
            <input type="text" class="form-control" placeholder="11180332" name="nim">
          </div>
          <div class="mb-3">
            <label for="Jurusan" class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="name@example.com" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Re-Type Password</label>
            <input type="password" class="form-control" name="password2">
          </div>
          <button class="btn btn-sm btn-primary" type="submit">login</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('../auth/footer_auth.php'); ?>