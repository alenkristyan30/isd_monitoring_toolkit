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
      <?php include('../components/system_management.php'); ?>
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

    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });

    $('.mdb_upload').mdb_upload();

    $(function () {
      'use strict';
      window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
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
    $('.datepicker').pickadate();
  </script>
  <script>
    var table = $('#dtMaterialDesignExample').DataTable({
      'order': [],
      'ajax': {
        url: 'sync.php',
        method: 'POST'
      },
      'columnDefs': [
        {
          'targets': 4,
          'orderable': false
        }
      ]
    })
    function Validate() {
      $.ajax({
        url: 'function.php',
        method: 'POST',
        data: $('#vform').serialize(),
        success: function (data) {
          swal(data, '', 'success', {closeOnClickOutside: false}).then((value) => {
            $('#exampleModalCenter').modal('hide');
            toastr["success"]("I was launched via jQuery!");
            table.ajax.reload();
          })
        }
      })
      return false;
    }
    $('#add').click(function () {
      $('#action').val('Add');
      $('#codename').val('');
      $('#sysname').val('');
      $('#yrcreated').val('');
      $('#sysdes').val('');
      $('label').removeClass("active");
    });
    $(document).on('click', 'a[name="edit"]', function () {
      $('#action').val('Edit');
      var id = $(this).attr('id');
      $.ajax({
        url: 'fetch_single.php',
        method: 'POST',
        data: {
          id: id
        },
        dataType: 'json',
        success: function (data) {
          $('#id').val(id);
          $('label').addClass("active");
          $('#exampleModalCenter').modal('show');
          $('#codename').val(data.codename);
          $('#sysname').val(data.sysname);
          $('#yrcreated').val(data.yrcreated);
          $('#sysdes').val(data.sysdes);
        }
      })
    });
    $(document).on('click', 'a[name="delete"]', function () {
      $('#action').val('Delete');
      var id = $(this).attr('id');
      swal('Are you sure you want to delete this?', '', 'warning', {
        buttons: true,
        dangerMode: true
      }).then((value) => {
        if (value) {
          $.ajax({
            url: 'function.php',
            method: 'POST',
            data: {
              id: id,
              action: 'Delete'
            },
            success: function (data) {
              toastr["info"]("I was launched via jQuery!");
              table.ajax.reload();
            }
          })
        }
      })
    });
  </script>
  <script>
    $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
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
