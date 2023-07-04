<?php include('../auth/header_auth.php'); ?>
<div class="row mt-5">
  <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Login</h3>
      </div>
      <div class="card-body">
        <?php
        $notif = isset($_GET['notif']) ? $_GET['notif']  : "";
        if ($notif == "required") {
          echo '<div class="alert alert-danger" role="alert">
                 Isi Form Dengan Benar!
                </div>';
        } elseif ($notif == "email") {
          echo '<div class="alert alert-danger" role="alert">
                 Email Yang Anda Masukkan Tidak Terdaftar!
                </div>';
        } elseif ($notif == "password") {
          echo '<div class="alert alert-danger" role="alert">
                 Password Yang Anda Masukkan Tidak Terdaftar!
                </div>';
        }
        ?>
        <form action="<?= BASE_URL . "function/auth_proses_login.php"; ?>" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="name@example.com" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <button class="btn btn-sm btn-primary" type="submit">login</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('../auth/footer_auth.php'); ?>