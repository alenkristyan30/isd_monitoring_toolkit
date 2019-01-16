var bool = false;
var table = $('#myTable').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 2,
    'orderable': false
  }]
});

function type_validation() {
  if ($('#typetxt').val() == '') {
    $('#typetxt').addClass('form-control-danger');
    $('#usertypeform').addClass('has-danger');
    bool = false;
  } else {
    $('#typetxt').removeClass('form-control-danger');
    $('#usertypeform').removeClass('has-danger');
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
          $('#myModal').modal('hide');
          // toastr["success"]("Successfully Added");
          table.ajax.reload();
        })
      }
    });
  }
}


$('#typetxt').blur(function() {
  type_validation();
});
$('#typetxt').bind('input', function() {
  type_validation();
});

function validate() {
  type_validation();
  validateAll();
  return false;
}

$('#btnadd').click(function() {
  $('#action').val('Add');
  $('#typetxt').val('');
  $('#typetxt').removeClass('form-control-danger');
  $('#usertypeform').removeClass('has-danger');
});

$(document).on('click', 'a[name="edit"]', function() {
  $('#action').val('Edit');
  var id = $(this).attr('id');
  $.ajax({
    url: 'fetch.php',
    method: 'POST',
    data: {
      id: id
    },
    dataType: 'json',
    success: function(data) {
      $('#id').val(id);
      $('#myModal').modal('show');
      $('#roletxt').val(data.role);
      $('#typetxt').val(data.type);
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
        url: 'cud.php',
        method: 'POST',
        data: {
          id: id,
          action: 'Delete'
        },
        success: function(data) {
          swal('Deleted Successfully', '', 'success', {
              closeOnClickOutside: false
            })
            .then((value) => {
              location.reload();
            })
        }
      })
    }
  })
});
$(document).ready(function() {
  $('#acc_parent').addClass("active");
  $('#acc_sub_parent').addClass("in");
  $('#acc_child2').addClass("active");
  $('#user_type').addClass("active");
});
