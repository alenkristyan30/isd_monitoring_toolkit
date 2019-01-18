<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <?php include '../../layout/headdetail.php'; ?>
  <?php include '../../layout/basecss.php'; ?>
  <script src="../../assets/plugins/pace/pace.min.js"></script>
</head>

<body class="pace-top bg-white">

  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
  <div id="page-container" class="fade">
    <?php include '../../pages/login.php'; ?>
  </div>

  <?php include '../../layout/basejs.php'; ?>
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script>
</body>

</html>
