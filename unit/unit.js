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
  if ($('#unitnametxt').val() == '') {
    $('#unitnametxt').addClass('form-control-danger');
    $('#unitnameform').addClass('has-danger');
    bool = false;
  } else {
    $('#unitnametxt').removeClass('form-control-danger');
    $('#unitnameform').removeClass('has-danger');
    bool = true;
  }
}
function type_validation() {
  if ($('#unittypetxt').val() == '') {
    $('#unittypetxt').addClass('form-control-danger');
    $('#unittypeform').addClass('has-danger');
    bool = false;
  } else {
    $('#unittypetxt').removeClass('form-control-danger');
    $('#unittypeform').removeClass('has-danger');
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


$('#unitnametxt').blur(function() {
  name_validation();
});
$('#unitnametxt').bind('input', function() {
  name_validation();
});


$('#unittypetxt').blur(function() {
  type_validation();
});
$('#unittypetxt').bind('input', function() {
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
    $('#unittypetxt').val('');
  $('#unittypetxt').removeClass('form-control-danger');
  $('#unittypeform').removeClass('has-danger');
      $('#unitnametxt').val('');
  $('#unitnametxt').removeClass('form-control-danger');
  $('#unitnameform').removeClass('has-danger');
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
      $('#unittypetxt').val(data.type);
      $('#unitnametxt').val(data.name);
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
