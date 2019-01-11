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
    <?php include '../components/management.php'; ?>
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
    var bool = false;
    var table = $('#myTable').DataTable({
      'ajax': {
        url: 'sync.php',
        method: 'POST'
      },
      'columnDefs': [{
        'targets': 13,
        'orderable': false
      }],
      "order": [
        [7, 'asc']
      ],
      "displayLength": 25,
      "drawCallback": function(settings) {
        var api = this.api();
        var rows = api.rows({
          page: 'current'
        }).nodes();
        var last = null;
        api.column(7, {
          page: 'current'
        }).data().each(function(group, i) {
          if (last !== group) {
            $(rows).eq(i).before('<tr class="group"><td colspan="100%">' + group + '</td></tr>');
            last = group;
          }
        });
      }
    });
    $('#myTable tbody').on('click', 'tr.group', function() {
      var currentOrder = table.order()[0];
      if (currentOrder[0] === 7 && currentOrder[1] === 'asc') {
        table.order([7, 'desc']).draw();
      } else {
        table.order([7, 'asc']).draw();
      }
    });



    function firstname_validation() {
      if ($('#surname').val() == '') {
        bool = false;
      } else {
        $('#surname').removeClass('is-invalid');
        bool = true;
      }
    }

    function validateAll() {
      if (bool) {
        $.ajax({
          url: 'function.php',
          method: 'POST',
          data: $('#vform').serialize(),
          success: function(data) {
            swal(data, '', 'success', {
              closeOnClickOutside: false
            }).then((value) => {
              $('#exampleModalCenter').modal('hide');
              toastr["success"]("Successfully Added");
              table.ajax.reload();
            })
          }
        });
      }
    }

    function Validate() {
      img_validation();
      sname_validation();
      validateAll();
      return false;
    }

  </script>
  <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
