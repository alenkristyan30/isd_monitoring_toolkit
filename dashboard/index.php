<?php include('../layout/header.php'); ?>
<style type="text/css">
  .cascading-admin-card {
    margin-top: 20px
  }

  .cascading-admin-card .admin-up {
    margin-left: 4%;
    margin-right: 4%;
    margin-top: -20px
  }

  .cascading-admin-card .admin-up .fa {
    padding: 1.7rem;
    font-size: 2rem;
    color: #fff;
    text-align: left;
    margin-right: 1rem;
    -webkit-border-radius: 3px;
    border-radius: 3px
  }

  .cascading-admin-card .admin-up .data {
    float: right;
    margin-top: 2rem;
    text-align: right
  }

  .cascading-admin-card .admin-up .data p {
    color: #999;
    font-size: 12px
  }

  .progress,
  .progress .progress-bar {
    height: 6px
  }
</style>

<body class="fixed-sn white-skin">
  <header>
    <?php include('../layout/side_nav.php'); ?>
    <?php include('../layout/nav_header.php'); ?>
  </header>
  <main>
    <div class="container-fluid">
      <?php include('../components/dashboard.php'); ?>
    </div>
  </main>
  <?php include('../layout/footer.php'); ?>
  <script>
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Tooltips Initialization
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#side-val').text("Dashboard");
    })
  </script>
