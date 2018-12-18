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
      <?php include('../components/report.php'); ?>
    </div>
  </main>
  <?php include('../layout/footer.php'); ?>
  <script>
    $(document).ready(function() {
      $('#divsel').materialSelect();
        $('#possel').materialSelect();
    });
  </script>
  <script>
    $('.mdb_upload').mdb_upload();
    $(".button-collapse").sideNav();
    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
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
  </script>
  <script>
    var table = $('#dtMaterialDesignExample').DataTable({
      'order': [],
      'ajax': {
        url: 'sync.php',
        method: 'POST'
      },
      'columnDefs': [{
        'targets': 8,
        'orderable': false
      }]
    })

    function Validate() {
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
        })
        return false;
    }
    $('#add').click(function() {
      $('#modaltitle').text('Add');
      $('#action').val('Add');
      $('#surname').val('');
      $('#firstname').val('');
      $('#middlename').val('');
      $('#nameext').val('');
      $('#divsel').val('');
      $('#possel').val('');
      $('#username').val('');
      $('#password').val('');
      $('#image_file').empty();
      $('#male').prop('checked', false);
      $('#female').prop('checked', false);
        $('#vform').removeClass('was-validated');

    });
    $(document).on('click', 'a[name="assign"]', function() {
      $('#modaltitle').text('Assign');
      $('#action').val('Assign');
      var id = $(this).attr('id');
      $.ajax({
        url: 'fetch_single.php',
        method: 'POST',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(data) {
          $('#id').val(id);
          $('label').addClass("active");
          $('#exampleModalCenter').modal('show');
          $('#surname').val(data.sname);
          $('#firstname').val(data.fname);
          $('#middlename').val(data.mname);
          $('#nameext').val(data.extname);
          $('#divsel').val(data.divsel);
            $('#possel').val(data.possel);
          $('#username').val(data.username);
          if (data.gender == 'Male') {
            $('#male').prop('checked', true);
          } else {
            $('#female').prop('checked', true);
          }
        }
      })
    });
    $(document).on('click', 'a[name="delete"]', function() {
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
            success: function(data) {
              toastr["info"]("I was launched via jQuery!");
              table.ajax.reload();
            }
          })
        }
      })
    });
    $(document).on('click', 'a[name="view"]', function() {
      $('#modalviewtitle').text('Details');
      $('#action').val('View');
      var id = $(this).attr('id');
      $.ajax({
        url: ' view_fetch.php',
        method: 'POST',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(data) {
          $('#id').val(id);
          $('label').addClass("active");
          $('#modalview').modal('show');
          $('#reportidview').text(data.reportidview);
          $('#usernameview').text(data.usernameview);
          $('#systemview').text(data.systemview);
          $('#categoryview').text(data.categoryview);
          $('#statusview').text(data.statusview);
          $('#commentview').text(data.commentview);
          $('#timestamnpview').text(data.timestamnpview);
        }
      })
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
