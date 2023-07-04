</div>
<script src="<?= BASE_URL . "js/bootstrap.bundle.min.js"; ?>"></script>
<script>
  let timeOut = 1200;
  let logoutTime = setTimeout(() => {
    window.location.href = "<?= BASE_URL . "function/auth_proses_logout.php" ?>";
  }, timeOut * 1000);

  function resetTimer() {
    clearTimeout(logoutTime);
    let logoutTimeReset = setTimeout(() => {
      window.location.href = "<?= BASE_URL . "function/auth_proses_logout.php" ?>";
    }, timeOut * 1000);

  }
  document.addEventListener("mousemove", resetTimer);
  document.addEventListener("keypress", resetTimer);
</script>
</body>

</html>