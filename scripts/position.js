var bool = false;
var table = $('#myposition').DataTable({
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
  if ($('#positionnametxt').val() == '') {
    $('#positionnametxt').addClass('is-invalid');
    $('#positionnameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#positionnametxt').removeClass('is-invalid');
    $('#positionnameform').removeClass('is-invalid');
    bool = true;
  }
}
function type_validation() {
  if ($('#positiontypetxt').val() == '') {
    $('#positiontypetxt').addClass('is-invalid');
    $('#positiontypeform').addClass('is-invalid');
    bool = false;
  } else {
    $('#positiontypetxt').removeClass('is-invalid');
    $('#positiontypeform').removeClass('is-invalid');
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


$('#positionnametxt').blur(function() {
  name_validation();
});
$('#positionnametxt').bind('input', function() {
  name_validation();
});


$('#positiontypetxt').blur(function() {
  type_validation();
});
$('#positiontypetxt').bind('input', function() {
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
    $('#positiontypetxt').val('');
  $('#positiontypetxt').removeClass('is-invalid');
  $('#positiontypeform').removeClass('is-invalid');
      $('#positionnametxt').val('');
  $('#positionnametxt').removeClass('is-invalid');
  $('#positionnameform').removeClass('is-invalid');
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
      $('#positiontypetxt').val(data.type);
      $('#positionnametxt').val(data.name);
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
