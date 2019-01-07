<?php include('../layout/header.php'); ?>
<link rel="stylesheet" href="../dist/css/datatable.style.css">
<link rel="stylesheet" href="../dist/css/mduploader.css">

<body class="fixed-sn white-skin">
  <header>
    <?php include('../layout/side_nav.php'); ?>
    <?php include('../layout/nav_header.php'); ?>
  </header>
  <main>
    <div class="container-fluid">
      <?php include('../components/section.php'); ?>
    </div>
  </main>
  <?php include('../layout/footer.php'); ?>
  <script type="text/javascript" src="section.js"></script>
  <script>
    $('#dtMaterialDesignExample_wrapper').find('label').each(function() {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function() {
      $('.dataTables_filter input').attr("placeholder", "Search");
      $('.dataTables_filter input').removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
    $('#dtMaterialDesignExample_wrapper select').removeClass('custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
  </script>
