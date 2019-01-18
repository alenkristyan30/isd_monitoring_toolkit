var bool = false;
var table = $('#myoffice').DataTable({
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


function id_validation() {
  if ($('#officeidtxt').val() == '') {
    $('#officeidtxt').addClass('is-invalid');
    $('#officeidform').addClass('is-invalid');
    bool = false;
  } else {
    $('#officeidtxt').removeClass('is-invalid');
    $('#officeidform').removeClass('is-invalid');
    bool = true;
  }
}

function name_validation() {
  if ($('#officenametxt').val() == '') {
    $('#officenametxt').addClass('is-invalid');
    $('#officenameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#officenametxt').removeClass('is-invalid');
    $('#officenameform').removeClass('is-invalid');
    bool = true;
  }
}

function level_validation() {
  if ($('#officeleveltxt').val() == '') {
    $('#officeleveltxt').addClass('is-invalid');
    $('#officelevelform').addClass('is-invalid');
    bool = false;
  } else {
    $('#officeleveltxt').removeClass('is-invalid');
    $('#officelevelform').removeClass('is-invalid');
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

$('#officeidtxt').blur(function() {
  id_validation();
});
$('#officeidtxt').bind('input', function() {
  id_validation();
});

$('#officenametxt').blur(function() {
  name_validation();
});
$('#officenametxt').bind('input', function() {
  name_validation();
});


$('#officeleveltxt').blur(function() {
  level_validation();
});
$('#officeleveltxt').bind('input', function() {
  level_validation();
});


function validate() {
  id_validation();
  level_validation();
  name_validation();
  validateAll();
  return false;
}

function removeValidation() {
  $('#officeleveltxt').val('');
  $('#officeleveltxt').removeClass('is-invalid');
  $('#officelevelform').removeClass('is-invalid');
  $('#officenametxt').val('');
  $('#officenametxt').removeClass('is-invalid');
  $('#officenameform').removeClass('is-invalid');
  $('#officeidtxt').val('');
  $('#officeidtxt').removeClass('is-invalid');
  $('#officeidform').removeClass('is-invalid')
}

$('#btnadd').click(function() {
  $('#action').val('Add');
  removeValidation();
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
      removeValidation();
      $('#id').val(id);
      $('#myModal').modal('show');
      $('#officeidtxt').val(data.id);
      $('#officeleveltxt').val(data.type);
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
          table.ajax.reload();
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
$(document).ready(function() {
  var specialKeys = new Array();
  specialKeys.push(8); //Backspace
  $(".numeric").keypress(function(e) {
    var keyCode = e.which ? e.which : e.keyCode
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    return ret;
  });
});
