var bool = false;
var tableadmin = $('#myuser').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST',
    responsive: true
  },
  'columnDefs': [{
    'targets': 13,
    'orderable': false
  }
]
});

var tableuser = $('#myadmin').DataTable({
  'order': [],
  'ajax': {
    url: 'syncadmin.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 13,
    'orderable': false
  }
]
});



function firstname_validation() {
  if ($('#firstname').val() == '') {
    $('#firstname').addClass('is-invalid');
    $('#firstnameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#firstname').removeClass('is-invalid');
    $('#firstnameform').removeClass('is-invalid');
    bool = true;
  }
}

function middle_validation() {
  if ($('#middlename').val() == '') {
    $('#middlename').addClass('is-invalid');
    $('#middlenameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#middlename').removeClass('is-invalid');
    $('#middlenameform').removeClass('is-invalid');
    bool = true;
  }
}

function surname_validation() {
  if ($('#surname').val() == '') {
    $('#surname').addClass('is-invalid');
    $('#surnameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#surname').removeClass('is-invalid');
    $('#surnameform').removeClass('is-invalid');
    bool = true;
  }
}

function gender_validation() {
  if ($('input[name=gender]:checked').length > 0) {
    $('#female').removeClass('is-invalid');
    $('#male').removeClass('is-invalid');
    bool = true;
  } else {
    $('#female').addClass('is-invalid');
      $('#male').addClass('is-invalid');
    bool = false;
  }
}

function lengthservice_validation() {
  if ($('#lengthservice').val() == '') {
    $('#lengthservice').addClass('is-invalid');
    $('#lengthserviceform').addClass('is-invalid');
    bool = false;
  } else {
    $('#lengthservice').removeClass('is-invalid');
    $('#lengthserviceform').removeClass('is-invalid');
    bool = true;
  }
}

function type_validation() {
  if ($('#type').val() == '') {
    $('#type').addClass('is-invalid');
    $('#typeform').addClass('is-invalid');
    bool = false;
  } else {
    $('#type').removeClass('is-invalid');
    $('#typeform').removeClass('is-invalid');
    bool = true;
  }
}

function username_validation() {
  if ($('#username').val() == '') {
    $('#username').addClass('is-invalid');
    $('#usernameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#username').removeClass('is-invalid');
    $('#usernameform').removeClass('is-invalid');
    bool = true;
  }
}

function password_validation() {
  if ($('#password').val() == '') {
    $('#password').addClass('is-invalid');
    $('#passwordform').addClass('is-invalid');
    bool = false;
  } else {
    $('#password').removeClass('is-invalid');
    $('#passwordform').removeClass('is-invalid');
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
          //toastr["success"]("Successfully Added");
          tableadmin.ajax.reload();
          tableuser.ajax.reload();
        })
      }
    });
  }
}

$('#firstname').blur(function() {
  firstname_validation();
});
$('#firstname').bind('input', function() {
  firstname_validation();
});

$('#middlename').blur(function() {
  middle_validation();
});
$('#middlename').bind('input', function() {
  middle_validation();
});

$('#surname').blur(function() {
  surname_validation();
});
$('#surname').bind('input', function() {
  surname_validation();
});
$('#female').blur(function() {
  gender_validation();
});
$('#female').bind('input', function() {
  gender_validation();
});
$('#male').blur(function() {
  gender_validation();
});
$('#male').bind('input', function() {
  gender_validation();
});

$('#lengthservice').blur(function() {
  lengthservice_validation();
});
$('#lengthservice').bind('input', function() {
  lengthservice_validation();
});

$('#type').blur(function() {
  type_validation();
});
$('#type').bind('input', function() {
  type_validation();
});

$('#username').blur(function() {
  username_validation();
});
$('#username').bind('input', function() {
  username_validation();
});

$('#password').blur(function() {
  password_validation();
});
$('#password').bind('input', function() {
  password_validation();
});


function Validate() {
  firstname_validation();
  middle_validation();
  surname_validation();
  gender_validation();
  lengthservice_validation();
  type_validation();
  username_validation();
  password_validation();
  validateAll();
  return false;
}

function removeValidation() {
  $('#firstname').val('');
  $('#firstname').removeClass('is-invalid');
  $('#firstnameform').removeClass('is-invalid');
  $('#middlename').val('');
  $('#middlename').removeClass('is-invalid');
  $('#middlenameform').removeClass('is-invalid');
  $('#surname').val('');
  $('#surname').removeClass('is-invalid');
  $('#surnameform').removeClass('is-invalid');
  $('#lengthservice').val('');
  $('#lengthservice').removeClass('is-invalid');
  $('#lengthserviceform').removeClass('is-invalid');
  $('#username').val('');
  $('#username').removeClass('is-invalid');
  $('#usernameform').removeClass('is-invalid');
  $('#password').val('');
  $('#password').removeClass('is-invalid');
  $('#passwordform').removeClass('is-invalid');
  $('#female').removeClass('is-invalid');
  $('#male').removeClass('is-invalid');
  $('#male').prop('checked', false);
  $('#female').prop('checked', false);
}

$('#btnadd').click(function() {
  $('#action').val('Add');
  removeValidation();
});


$(document).on('click', 'a[name="edit"]', function() {
  $('#modaltitle').text('Edit');
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
      $('#surname').val(data.surname);
      $('#firstname').val(data.firstname);
      $('#middlename').val(data.middlename);
      $('#lengthservice').val(data.lservice);

      $('#username').val(data.username);
      $('#password').val(data.password);
      $('#usertypeselect').val(data.type);

      $('#officeselect').val(data.office);
      $('#divisionselect').val(data.division);
      $('#sectionselect').val(data.section);
      $('#positionselect').val(data.position);
      $('#unitselect').val(data.unit);

      if (data.gender == 'Male') {
        $('#male').prop('checked', true);
      } else {
        $('#female').prop('checked', true);
      }
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
          //toastr["info"]("I was launched via jQuery!");
          tableadmin.ajax.reload();
          tableuser.ajax.reload();
        }
      })
    }
  })
});

$(document).on('click', 'a[name="view"]', function() {
  $('#modalviewtitle').text('Details');
  $('#action').val('View');
  var id = $(this).attr('id');
  $.ajax({
    url: ' view_fetch.php',
    method: 'POST',
    data: {
      id: id
    },
    dataType: 'json',
    success: function(data) {
      $('#id').val(id);
      $('label').addClass("active");
      $('#modalview').modal('show');
      $('#idview').text(data.userid);
      $('#surnameview').text(data.sname);
      $('#firstnameview').text(data.fname);
      $('#middlenameview').text(data.mname);
      $('#nameextview').text(data.extname);
      $('#divisionview').text(data.divsel);
      $('#sectionview').text(data.secsel);
      $('#positionview').text(data.possel);
      $('#usernameview').text(data.username);
      $('#genderview').text(data.gender);
      if (data.gender == 'Male') {
        $('#img_src').attr('src', '../dist/img/male-avatar.png');
      } else {
        $('#img_src').attr('src', '../dist/img/female-avatar.png');
      }
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
