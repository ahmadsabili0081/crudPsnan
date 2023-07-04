<?php
session_start();
include('../config/config.php');

unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['gambar']);
session_destroy();

header("location:" . BASE_URL . "auth/login.php");
