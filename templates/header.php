<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="<?= BASE_URL . "css/bootstrap.min.css"; ?>">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL; ?>">MahasiswaCrud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASE_URL; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL . "mahasiswa.php"; ?>">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <?php if (isset($_SESSION['email'])) : ?>
            <span class="navbar-text d-flex">
              <p class="m-2"><?= $_SESSION['nama']; ?></p>
              <a class="btn btn-sm btn-danger text-white m-2" href="<?= BASE_URL . "function/auth_proses_logout.php" ?>">Logout</a>
            </span>
          <?php else :  ?>

          <?php endif; ?>
        </div>
      </div>
    </nav>