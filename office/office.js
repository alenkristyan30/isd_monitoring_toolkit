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
  if ($('#officenametxt').val() == '') {
    $('#officenametxt').addClass('form-control-danger');
    $('#officenameform').addClass('has-danger');
    bool = false;
  } else {
    $('#officenametxt').removeClass('form-control-danger');
    $('#officenameform').removeClass('has-danger');
    bool = true;
  }
}
function type_validation() {
  if ($('#officetypetxt').val() == '') {
    $('#officetypetxt').addClass('form-control-danger');
    $('#officetypeform').addClass('has-danger');
    bool = false;
  } else {
    $('#officetypetxt').removeClass('form-control-danger');
    $('#officetypeform').removeClass('has-danger');
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


$('#officenametxt').blur(function() {
  name_validation();
});
$('#officenametxt').bind('input', function() {
  name_validation();
});


$('#officetypetxt').blur(function() {
  type_validation();
});
$('#officetypetxt').bind('input', function() {
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
    $('#officetypetxt').val('');
  $('#officetypetxt').removeClass('form-control-danger');
  $('#officetypeform').removeClass('has-danger');
      $('#officenametxt').val('');
  $('#officenametxt').removeClass('form-control-danger');
  $('#officenameform').removeClass('has-danger');
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
      $('#officetypetxt').val(data.type);
      $('#officenametxt').val(data.name);
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
  $(".alphabetic").keypress(function(e) {
    var key = e.keyCode;
    if (key >= 48 && key <= 57) {
      e.preventDefault();
    }
  });
});
