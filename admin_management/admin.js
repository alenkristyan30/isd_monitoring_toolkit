var bool = false;
var table = $('#dtMaterialDesignExample').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 10,
    'orderable': false
  }]
})

function img_validation() {
  var extension = $('#image_file').val().split('.').pop().toLowerCase();
  if (extension != '') {
    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
      swal("Invalid image file", "", "warning").
      then((value) => {
        $('#image_file').val('');
      });
      bool = false;
      return false;
    }
  }
  if ($('#image_file').val() == "") {
    swal("Please input image", "", "warning");
    bool = false;
    return false;
  } else {
    bool = true;
  }
}

function sname_validation() {
  if ($('#surname').val() == '') {
    bool = false;
  } else {
    $('#surname').removeClass('is-invalid');
    bool = true;
  }
}

function fname_validation() {
  if ($('#firstname').val() == '') {
    bool = false;
  } else {
    $('#firstname').removeClass('is-invalid');
    bool = true;
  }
}

function mname_validation() {
  if ($('#middlename').val() == '') {
    bool = false;
  } else {
    $('#middlename').removeClass('is-invalid');
    bool = true;
  }
}

function mname_validation() {
  if ($('#middlename').val() == '') {
    bool = false;
  } else {
    $('#middlename').removeClass('is-invalid');
    bool = true;
  }
}

function gender_validation() {
  if ($('input[name=gender]:checked').length > 0) {
    bool = false;
  } else {
    $('gender').removeClass('is-invalid');
    bool = true;
  }
}

function division_validation() {
  var opt = $('#divsel').val();
  if (opt == "") {
    bool = false;
  } else {
    $('#divsel').removeClass('is-invalid');
    bool = true;
  }
}

function section_validation() {
  var opt = $('#secsel').val();
  if (opt == "") {
    bool = false;
  } else {
    $('#secsel').removeClass('is-invalid');
    bool = true;
  }
}

function position_validation() {
  var opt = $('#possel').val();
  if (opt == "") {
    bool = false;
  } else {
    $('#possel').removeClass('is-invalid');
    bool = true;
  }
}

function username_validation() {
  if ($('#username').val() == '') {
    bool = false;
  } else {
    $('#username').removeClass('is-invalid');
    bool = true;
  }
}

function password_validation() {
  if ($('#password').val() == '') {
    bool = false;
  } else if ($('#password').val().length < 8) {
    $('#password').removeClass('is-invalid');
    $('#password').html('Password must be more than 8 characters!');
    bool = false;
  } else {
    $('#password').removeClass('is-invalid');
    bool = true;
  }
}

function validateAll() {
  if (bool) {
    $.ajax({
      url: 'function.php',
      method: 'POST',
      data: $('#vform').serialize(),
      success: function(data) {
        swal(data, '', 'success', {
          closeOnClickOutside: false
        }).then((value) => {
          $('#exampleModalCenter').modal('hide');
          toastr["success"]("Successfully Added");
          table.ajax.reload();
        })
      }
    });
  }
}

function Validate() {
  img_validation();
  sname_validation();
  fname_validation();
  mname_validation();
  gender_validation();
  division_validation();
  section_validation();
  position_validation();
  username_validation();
  password_validation();
  validateAll();
  return false;
}


$('#add').click(function() {
  $('#modaltitle').text('Add');
  $('#action').val('Add');
  $('#surname').val('');
  $('#firstname').val('');
  $('#middlename').val('');
  $('#nameext').val('');
  $('#divsel').val('');
  $('#secsel').val('');
  $('#possel').val('');
  $('#username').val('');
  $('#password').val('');
  $('#image_file').empty();
  $('#male').prop('checked', false);
  $('#female').prop('checked', false);
  $('#vform').removeClass('was-validated');

});
$(document).on('click', 'a[name="edit"]', function() {
  $('#modaltitle').text('Edit');
  $('#action').val('Edit');
  var id = $(this).attr('id');
  $.ajax({
    url: 'fetch_single.php',
    method: 'POST',
    data: {
      id: id
    },
    dataType: 'json',
    success: function(data) {
      $('#id').val(id);
      $('label').addClass("active");
      $('#exampleModalCenter').modal('show');
      $('#surname').val(data.sname);
      $('#firstname').val(data.fname);
      $('#middlename').val(data.mname);
      $('#nameext').val(data.extname);
      $('#divsel').val(data.divsel);
      $('#secsel').val(data.secsel);
      $('#possel').val(data.possel);
      $('#password').val(data.password);
      $('#username').val(data.username);
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
        url: 'function.php',
        method: 'POST',
        data: {
          id: id,
          action: 'Delete'
        },
        success: function(data) {
          toastr["info"]("I was launched via jQuery!");
          table.ajax.reload();
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
  $('#divsel').materialSelect();
  $('#possel').materialSelect();
  $('#secsel').materialSelect();
  $('#side-val').text("Admin Management");
  $('#sidenav2').addClass("active");
  $('#sidenav2parent').addClass("active");
  $('#management-nav').css("display", "block");
  $('#admin_side_parent').addClass("current-menu-item");
});





$('.mdb_upload').mdb_upload();
$(".button-collapse").sideNav();
var container = document.querySelector('.custom-scrollbar');
Ps.initialize(container, {
  wheelSpeed: 2,
  wheelPropagation: true,
  minScrollbarLength: 20
});

$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});
$(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})
