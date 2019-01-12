var bool = false;
var table = $('#myTable').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 3,
    'orderable': false
  }]
});

function name_validation() {
  if ($('#divisionnametxt').val() == '') {
    $('#divisionnametxt').addClass('form-control-danger');
    $('#divisionnameform').addClass('has-danger');
    bool = false;
  } else {
    $('#divisionnametxt').removeClass('form-control-danger');
    $('#divisionnameform').removeClass('has-danger');
    bool = true;
  }
}
function type_validation() {
  if ($('#divisiontypetxt').val() == '') {
    $('#divisiontypetxt').addClass('form-control-danger');
    $('#divisiontypeform').addClass('has-danger');
    bool = false;
  } else {
    $('#divisiontypetxt').removeClass('form-control-danger');
    $('#divisiontypeform').removeClass('has-danger');
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


$('#divisionnametxt').blur(function() {
  name_validation();
});
$('#divisionnametxt').bind('input', function() {
  name_validation();
});


$('#divisiontypetxt').blur(function() {
  type_validation();
});
$('#divisiontypetxt').bind('input', function() {
  type_validation();
});


function validate() {
  type_validation();
  name_validation();
  validateAll();
  return false;
}

$('#btnadd').click(function() {
  $('#action').val('Add');
    $('#divisiontypetxt').val('');
  $('#divisiontypetxt').removeClass('form-control-danger');
  $('#divisiontypeform').removeClass('has-danger');
      $('#divisionnametxt').val('');
  $('#divisionnametxt').removeClass('form-control-danger');
  $('#divisionnameform').removeClass('has-danger');
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
      $('#divisiontypetxt').val(data.type);
      $('#divisionnametxt').val(data.name);
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
