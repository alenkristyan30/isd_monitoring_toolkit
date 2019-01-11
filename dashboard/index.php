<?php require_once('../config/database.php'); ?>
<?php include '../layout/head.php'; ?>
<body class="fix-header fix-sidebar card-no-border">
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
  </div>
  <div id="main-wrapper">
    <?php include '../layout/top-bar.php'; ?>
    <?php include '../layout/left-side-navbar.php'; ?>
    <?php include '../components/dashboard.php'; ?>
  </div>
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <script src="../assets/plugins/popper/popper.min.js"></script>
  <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="../material/js/jquery.slimscroll.js"></script>
  <script src="../material/js/waves.js"></script>
  <script src="../material/js/sidebarmenu.js"></script>
  <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="../material/js/custom.min.js"></script>
  <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
