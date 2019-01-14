var bool = false;
var table = $('#myTable').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 7,
    'orderable': false
  }]
});

function name_validation() {
  if ($('#infosystemnametxt').val() == '') {
    $('#infosystemnametxt').addClass('form-control-danger');
    $('#infosystemnameform').addClass('has-danger');
    bool = false;
  } else {
    $('#infosystemnametxt').removeClass('form-control-danger');
    $('#infosystemnameform').removeClass('has-danger');
    bool = true;
  }
}

function abbreviation_validation() {
  if ($('#infosystemabbreviationtxt').val() == '') {
    $('#infosystemabbreviationtxt').addClass('form-control-danger');
    $('#infosystemabbreviationform').addClass('has-danger');
    bool = false;
  } else {
    $('#infosystemabbreviationtxt').removeClass('form-control-danger');
    $('#infosystemabbreviationform').removeClass('has-danger');
    bool = true;
  }
}

function developer_validation() {
  if ($('#infosystemdevelopertxt').val() == '') {
    $('#infosystemdevelopertxt').addClass('form-control-danger');
    $('#infosystemdeveloperform').addClass('has-danger');
    bool = false;
  } else {
    $('#infosystemdevelopertxt').removeClass('form-control-danger');
    $('#infosystemdeveloperform').removeClass('has-danger');
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


$('#infosystemnametxt').blur(function() {
  name_validation();
});
$('#infosystemnametxt').bind('input', function() {
  name_validation();
});

$('#infosystemabbreviationtxt').blur(function() {
  abbreviation_validation();
});
$('#infosystemabbreviationtxt').bind('input', function() {
  abbreviation_validation();
});

$('#infosystemdevelopertxt').blur(function() {
  developer_validation();
});
$('#infosystemdevelopertxt').bind('input', function() {
  developer_validation();
});




function validate() {
  abbreviation_validation();
  developer_validation();
  name_validation();
  validateAll();
  return false;
}

$('#btnadd').click(function() {
  $('#action').val('Add');
  $('#infosystemtypetxt').val('');
  $('#infosystemtypetxt').removeClass('form-control-danger');
  $('#infosystemtypeform').removeClass('has-danger');
  $('#infosystemdevelopertxt').val('');
  $('#infosystemdevelopertxt').removeClass('form-control-danger');
  $('#infosystemdeveloperform').removeClass('has-danger');
  $('#infosystemabbreviationtxt').val('');
  $('#infosystemabbreviationtxt').removeClass('form-control-danger');
  $('#infosystemabbreviationform').removeClass('has-danger');
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
      $('#infosystemtypetxt').val(data.type);
      $('#infosystemnametxt').val(data.name);
      $('#infosystemabbreviationtxt').val(data.abbreviation);
      $('#infosystemdevelopertxt').val(data.developer)
      $('#infosystemdatecreatedtxt').val(data.datecreated);
      $('#infosystemrolestxt').val(data.roles)
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
              closeOnClickOutside: true
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
$(document).ready(function() {
  var specialKeys = new Array();
  specialKeys.push(8); //Backspace
    $(".numeric").keypress(function(e) {
      var keyCode = e.which ? e.which : e.keyCode
      var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
      return ret;
    });
});
