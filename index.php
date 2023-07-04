<?php
session_start();
include('./config/config.php');
?>
<?php include('./templates/header.php'); ?>
<div class="row align-items-md-stretch mt-2">
  <div class="col-md-12">
    <div class="h-100 p-5 text-white bg-dark rounded-3">
      <h2>Selamat Datang <?= (isset($_SESSION['email']) ? $_SESSION['nama'] : "di MahasiswaCrud"); ?></h2>
      <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
      <button class="btn btn-outline-light" type="button">Example button</button>
    </div>
  </div>
</div>
<?php include('./templates/footer.php'); ?>