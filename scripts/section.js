var bool = false;
var table = $('#mysection').DataTable({
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
  if ($('#sectionnametxt').val() == '') {
    $('#sectionnametxt').addClass('is-invalid');
    $('#sectionnameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#sectionnametxt').removeClass('is-invalid');
    $('#sectionnameform').removeClass('is-invalid');
    bool = true;
  }
}
function type_validation() {
  if ($('#sectiondivisiontxt').val() == '') {
    $('#sectiondivisiontxt').addClass('is-invalid');
    $('#sectiondivisionform').addClass('is-invalid');
    bool = false;
  } else {
    $('#sectiondivisiontxt').removeClass('is-invalid');
    $('#sectiondivisionform').removeClass('is-invalid');
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


$('#sectionnametxt').blur(function() {
  name_validation();
});
$('#sectionnametxt').bind('input', function() {
  name_validation();
});


$('#sectiondivisiontxt').blur(function() {
  type_validation();
});
$('#sectiondivisiontxt').bind('input', function() {
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
  $('#sectiondivisiontxt').val('');
  $('#sectiondivisiontxt').removeClass('is-invalid');
  $('#sectiondivisionform').removeClass('is-invalid');
  $('#sectionnametxt').val('');
  $('#sectionnametxt').removeClass('is-invalid');
  $('#sectionnameform').removeClass('is-invalid');
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
      $('#sectiondivisiontxt').val(data.type);
      $('#sectionnametxt').val(data.name);
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
