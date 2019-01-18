var bool = false;
var table = $('#myunit').DataTable({
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
    $('#unitnametxt').addClass('is-invalid');
    $('#unitnameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#unitnametxt').removeClass('is-invalid');
    $('#unitnameform').removeClass('is-invalid');
    bool = true;
  }
}
function type_validation() {
  if ($('#unittypetxt').val() == '') {
    $('#unittypetxt').addClass('is-invalid');
    $('#unittypeform').addClass('is-invalid');
    bool = false;
  } else {
    $('#unittypetxt').removeClass('is-invalid');
    $('#unittypeform').removeClass('is-invalid');
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
  $('#unittypetxt').removeClass('is-invalid');
  $('#unittypeform').removeClass('is-invalid');
      $('#unitnametxt').val('');
  $('#unitnametxt').removeClass('is-invalid');
  $('#unitnameform').removeClass('is-invalid');
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
            table.ajax.reload();
            })
        }
      })
    }
  })
});
