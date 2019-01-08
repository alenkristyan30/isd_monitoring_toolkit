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
      <?php include('../components/feedback.php'); ?>
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
    // Data Picker Initialization
   $('.datepicker').pickadate();

   // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });

    $('.mdb_upload').mdb_upload();

    $(function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();

    $('#side-val').text("User Management");
    $('.mdb-select').materialSelect();
    $('.datepicker').pickadate();
  </script>

  <script>
  // Small chart
     $(function () {
       $('.min-chart#chart-sales').easyPieChart({
         barColor: "#4caf50",
         onStep: function (from, to, percent) {
           $(this.el).find('.percent').text(Math.round(percent));
         }
       });
     });

     //Main chart
     var ctxL = document.getElementById("lineChart-main").getContext('2d');
     var myLineChart = new Chart(ctxL, {
       type: 'line',
       data: {
         labels: ["January", "February", "March", "April", "May", "June", "July"],
         datasets: [{
           label: "My First dataset",
           fillColor: "#fff",
           backgroundColor: 'rgba(255, 255, 255, .3)',
           borderColor: 'rgba(255, 255, 255, .9)',
           data: [0, 10, 5, 2, 20, 30, 45],
         }]
       },
       options: {
         legend: {
           labels: {
             fontColor: "#fff",
           }
         },
         scales: {
           xAxes: [{
             gridLines: {
               display: true,
               color: "rgba(255,255,255,.25)"
             },
             ticks: {
               fontColor: "#fff",
             },
           }],
           yAxes: [{
             display: true,
             gridLines: {
               display: true,
               color: "rgba(255,255,255,.25)"
             },
             ticks: {
               fontColor: "#fff",
             },
           }],
         }
       }
     });
     //minimalist
  $(function () {
    $('.min-chart#chart-sales').easyPieChart({
      barColor: "#4caf50",
      onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });

    $('.min-chart#chart-roi').easyPieChart({
      barColor: "#F44336",
      onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });

    $('.min-chart#chart-conversion').easyPieChart({
      barColor: "#9e9e9e",
      onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });
  </script>

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
