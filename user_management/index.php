<?php require_once('../config/session.php'); ?>
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
    <?php include '../components/admin_management.php'; ?>
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
  <script src="../assets/plugins/datatables/datatables.min.js"></script>
  <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="../assets/plugins/datatables/buttons.flash.min.js"></script>
  <script src="../assets/plugins/datatables/jszip.min.js"></script>
  <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
  <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
  <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
  <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
  <script>
      $(function() {
        var table = $('#myTable').DataTable({
          'order': [],
          'ajax': {
            url: 'sync.php',
            method: 'POST'
          },
          'columnDefs': [{
            'targets': 10,
            'orderable': false
          }]
        });
      });
  </script>
  <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
