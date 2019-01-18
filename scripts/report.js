var bool = false;
var table = $('#myreport').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 9,
    'orderable': false
  }]
});

function id_validation() {
  if ($('#reportidtxt').val() == '') {
    $('#reportidtxt').addClass('form-control-danger');
    $('#reportidform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportidtxt').removeClass('form-control-danger');
    $('#reportidform').removeClass('has-danger');
    bool = true;
  }
}

function name_validation() {
  if ($('#reportnametxt').val() == '') {
    $('#reportnametxt').addClass('form-control-danger');
    $('#reportnameform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportnametxt').removeClass('form-control-danger');
    $('#reportnameform').removeClass('has-danger');
    bool = true;
  }
}

function system_validation() {
  if ($('#reportsystemtxt').val() == '') {
    $('#reportsystemtxt').addClass('form-control-danger');
    $('#reportsystemform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportsystemtxt').removeClass('form-control-danger');
    $('#reportsystemform').removeClass('has-danger');
    bool = true;
  }
}

function date_validation() {
  if ($('#reportdatetxt').val() == '') {
    $('#reportdatetxt').addClass('form-control-danger');
    $('#reportdateform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportdatetxt').removeClass('form-control-danger');
    $('#reportdateform').removeClass('has-danger');
    bool = true;
  }
}

function comment_validation() {
  if ($('#reportcommenttxt').val() == '') {
    $('#reportcommenttxt').addClass('form-control-danger');
    $('#reportcommentform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportcommenttxt').removeClass('form-control-danger');
    $('#reportcommentform').removeClass('has-danger');
    bool = true;
  }
}

function category_validation() {
  if ($('#reportcategorytxt').val() == '') {
    $('#reportcategorytxt').addClass('form-control-danger');
    $('#reportcategoryform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportcategorytxt').removeClass('form-control-danger');
    $('#reportcategoryform').removeClass('has-danger');
    bool = true;
  }
}

function priority_validation() {
  if ($('#reportprioritytxt').val() == '') {
    $('#reportprioritytxt').addClass('form-control-danger');
    $('#reportpriorityform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportprioritytxt').removeClass('form-control-danger');
    $('#reportpriorityform').removeClass('has-danger');
    bool = true;
  }
}

function severity_validation() {
  if ($('#reportseveritytxt').val() == '') {
    $('#reportseveritytxt').addClass('form-control-danger');
    $('#reportseverityform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportseveritytxt').removeClass('form-control-danger');
    $('#reportseverityform').removeClass('has-danger');
    bool = true;
  }
}

function assignment_validation() {
  if ($('#reportassignmenttxt').val() == '') {
    $('#reportassignmenttxt').addClass('form-control-danger');
    $('#reportassignmentform').addClass('has-danger');
    bool = false;
  } else {
    $('#reportassignmenttxt').removeClass('form-control-danger');
    $('#reportassignmentform').removeClass('has-danger');
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
