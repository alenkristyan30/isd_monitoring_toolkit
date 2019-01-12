<?php require_once('../config/database.php'); ?>
<?php include '../layout/head.php'; ?>

<body class="fix-header fix-sidebar card-no-border">
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /></svg>
  </div>
  <div id="main-wrapper">
    <?php include '../layout/top-bar.php'; ?>
    <?php include '../layout/left-side-navbar.php'; ?>
    <?php include '../components/unit.php'; ?>
  </div>
  <?php include '../layout/footer-with-datatable.php'; ?>
  <script src="unit.js"></script>
  <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
