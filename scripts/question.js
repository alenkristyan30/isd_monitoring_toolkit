var bool = false;
var table = $('#myquestion').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 2,
    'orderable': false
  }]
});

function id_validation() {
  if ($('#questionidtxt').val() == '') {
    $('#questionidtxt').addClass('is-invalid');
    $('#questionidform').addClass('is-invalid');
    bool = false;
  } else {
    $('#questionidtxt').removeClass('is-invalid');
    $('#questionidform').removeClass('is-invalid');
    bool = true;
  }
}

function query_validation() {
  if ($('#questionquerytxt').val() == '') {
    $('#questionquerytxt').addClass('is-invalid');
    $('#questionqueryform').addClass('is-invalid');
    bool = false;
  } else {
    $('#questionquerytxt').removeClass('is-invalid');
    $('#questionqueryform').removeClass('is-invalid');
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


$('#questionidtxt').blur(function() {
  id_validation();
});
$('#questionidtxt').bind('input', function() {
  id_validation();
});


$('#questionquerytxt').blur(function() {
  query_validation();
});
$('#questionquerytxt').bind('input', function() {
  query_validation();
});


function validate() {
  id_validation();
  query_validation();
  validateAll();
  return false;
}

function removeValidation() {
  $('#questionquerytxt').val('');
  $('#questionquerytxt').removeClass('is-invalid');
  $('#questionqueryform').removeClass('is-invalid');
  $('#questionidtxt').val('');
  $('#questionidtxt').removeClass('is-invalid');
  $('#questionidform').removeClass('is-invalid');
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
      $('#questionquerytxt').val(data.qq);
      $('#questionidtxt').val(data.qid);
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
