<?php require_once('../config/session.php'); ?>
<?php require_once('../config/database.php'); ?>
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
<style type="text/css">
  /* Chart.js */
  @-webkit-keyframes chartjs-render-animation {
    from {
      opacity: 0.99
    }

    to {
      opacity: 1
    }
  }

  @keyframes chartjs-render-animation {
    from {
      opacity: 0.99
    }

    to {
      opacity: 1
    }
  }

  .chartjs-render-monitor {
    -webkit-animation: chartjs-render-animation 0.001s;
    animati onload="
    "on: chartjs-render-animation 0.001s;

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
  <script>
    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>
