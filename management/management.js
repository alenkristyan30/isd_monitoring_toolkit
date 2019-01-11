var bool = false;
var table = $('#myTable').DataTable({
      'order': [],
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
              $(rows).eq(i).before('<tr class="group"> <td colspan = "100%" > ' + group + ' </td></tr>');
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
      if ($('#firstname').val() == '') {
        $('#firstname').addClass('form-control-danger');
        $('#firstnameform').addClass('has-danger');
        bool = false;
      } else {
        $('#firstname').removeClass('form-control-danger');
        $('#firstnameform').removeClass('has-danger');
        bool = true;
      }
    }

    function middle_validation() {
      if ($('#middlename').val() == '') {
        $('#middlename').addClass('form-control-danger');
        $('#middlenameform').addClass('has-danger');
        bool = false;
      } else {
        $('#middlename').removeClass('form-control-danger');
        $('#middlenameform').removeClass('has-danger');
        bool = true;
      }
    }

    function surname_validation() {
      if ($('#surname').val() == '') {
        $('#surname').addClass('form-control-danger');
        $('#surnameform').addClass('has-danger');
        bool = false;
      } else {
        $('#surname').removeClass('form-control-danger');
        $('#surnameform').removeClass('has-danger');
        bool = true;
      }
    }

    function gender_validation() {
      if ($('input[name=gender]:checked').length > 0) {
        $('#genderform').removeClass('has-danger');
        bool = true;
      } else {
        $('#genderform').addClass('has-danger');
        bool = false;
      }
    }

    function lengthservice_validation() {
      if ($('#lengthservice').val() == '') {
        $('#lengthservice').addClass('form-control-danger');
        $('#lengthserviceform').addClass('has-danger');
        bool = false;
      } else {
        $('#lengthservice').removeClass('form-control-danger');
        $('#lengthserviceform').removeClass('has-danger');
        bool = true;
      }
    }

    function type_validation() {
      if ($('#type').val() == '') {
        $('#type').addClass('form-control-danger');
        $('#typeform').addClass('has-danger');
        bool = false;
      } else {
        $('#type').removeClass('form-control-danger');
        $('#typeform').removeClass('has-danger');
        bool = true;
      }
    }

    function username_validation() {
      if ($('#username').val() == '') {
        $('#username').addClass('form-control-danger');
        $('#usernameform').addClass('has-danger');
        bool = false;
      } else {
        $('#username').removeClass('form-control-danger');
        $('#usernameform').removeClass('has-danger');
        bool = true;
      }
    }

    function password_validation() {
      if ($('#password').val() == '') {
        $('#password').addClass('form-control-danger');
        $('#passwordform').addClass('has-danger');
        bool = false;
      } else {
        $('#password').removeClass('form-control-danger');
        $('#passwordform').removeClass('has-danger');
        bool = true;
      }
    }

    function validateAll() {
      if (bool) {
        $.ajax({
          url: 'cud.php',
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

    $('#firstname').blur(function() {
      firstname_validation();
    }); $('#firstname').bind('input', function() {
      firstname_validation();
    });

    $('#middlename').blur(function() {
      middle_validation();
    }); $('#middlename').bind('input', function() {
      middle_validation();
    });

    $('#surname').blur(function() {
      surname_validation();
    }); $('#surname').bind('input', function() {
      surname_validation();
    }); $('#gender').blur(function() {
      gender_validation();
    });

    $('#lengthservice').blur(function() {
      lengthservice_validation();
    }); $('#lengthservice').bind('input', function() {
      lengthservice_validation();
    });

    $('#type').blur(function() {
      type_validation();
    }); $('#type').bind('input', function() {
      type_validation();
    });

    $('#username').blur(function() {
      username_validation();
    }); $('#username').bind('input', function() {
      username_validation();
    });

    $('#password').blur(function() {
      password_validation();
    }); $('#password').bind('input', function() {
      password_validation();
    });


    function Validate() {
      firstname_validation();
      middle_validation();
      surname_validation();
      gender_validation();
      lengthservice_validation();
      type_validation();
      username_validation();
      password_validation();
      validateAll();
      return false;
    }

     $(document).on('click', 'a[name="edit"]', function() {
      $('#modaltitle').text('Edit');
      $('#action').val('Edit');
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
          $('#secsel').val(data.secsel);
          $('#possel').val(data.possel);
          $('#password').val(data.password);
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
          $('#idview').text(data.userid);
          $('#surnameview').text(data.sname);
          $('#firstnameview').text(data.fname);
          $('#middlenameview').text(data.mname);
          $('#nameextview').text(data.extname);
          $('#divisionview').text(data.divsel);
          $('#sectionview').text(data.secsel);
          $('#positionview').text(data.possel);
          $('#usernameview').text(data.username);
          $('#genderview').text(data.gender);
          if (data.gender == 'Male') {
            $('#img_src').attr('src', '../dist/img/male-avatar.png');
          } else {
            $('#img_src').attr('src', '../dist/img/female-avatar.png');
          }
        }
      })
    });
