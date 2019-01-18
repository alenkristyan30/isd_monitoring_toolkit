var bool = false;
var table = $('#myrole').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 3,
    'orderable': false
  },{
    "visible": false,
    "targets": 2
  }],

  "order": [
    [2, 'asc']
  ],
  "displayLength": 25,
  "drawCallback": function(settings) {
    var api = this.api();
    var rows = api.rows({
      page: 'current'
    }).nodes();
    var last = null;
    api.column(2, {
      page: 'current'
    }).data().each(function(group, i) {
      if (last !== group) {
        $(rows).eq(i).before('<tr class="group"> <td colspan="100%" > ' + group + ' </td></tr>');
        last = group;
      }
    });
  }
});
$('#myTable tbody').on('click', 'tr.group', function() {
  var currentOrder = table.order()[0];
  if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
    table.order([2, 'desc']).draw();
  } else {
    table.order([2, 'asc']).draw();
  }
});

function name_validation() {
  if ($('#systemrolenametxt').val() == '') {
    $('#systemrolenametxt').addClass('is-invalid');
    $('#systemrolenameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#systemrolenametxt').removeClass('is-invalid');
    $('#systemrolenameform').removeClass('is-invalid');
    bool = true;
  }
}

function system_validation() {
  if ($('#systemrolesystemtxt').val() == '') {
    $('#systemrolesystemtxt').addClass('is-invalid');
    $('#systemroletypeform').addClass('is-invalid');
    bool = false;
  } else {
    $('#systemrolesystemtxt').removeClass('is-invalid');
    $('#systemroletypeform').removeClass('is-invalid');
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


$('#systemrolenametxt').blur(function() {
  name_validation();
});
$('#systemrolenametxt').bind('input', function() {
  name_validation();
});


$('#systemrolesystemtxt').blur(function() {
  system_validation();
});
$('#systemrolesystemtxt').bind('input', function() {
  system_validation();
});


function validate() {
  system_validation();
  name_validation();
  validateAll();
  return false;
}

$('#btnadd').click(function() {
  $('#action').val('Add');
  $('#systemrolesystemtxt').removeClass('is-invalid');
  $('#systemroletypeform').removeClass('is-invalid');
  $('#systemrolenametxt').val('');
  $('#systemrolenametxt').removeClass('is-invalid');
  $('#systemrolenameform').removeClass('is-invalid');
});

$(document).on('click', 'a[name="edit"]', function() {
  $('#action').val('Edit');
  $('#systemrolesystemtxt').val('');
  $('#systemrolesystemtxt').removeClass('is-invalid');
  $('#systemroletypeform').removeClass('is-invalid');
  $('#systemrolenametxt').val('');
  $('#systemrolenametxt').removeClass('is-invalid');
  $('#systemrolenameform').removeClass('is-invalid');
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
      $('#systemrolesystemtxt').val(data.system);
      $('#systemrolenametxt').val(data.name);
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
