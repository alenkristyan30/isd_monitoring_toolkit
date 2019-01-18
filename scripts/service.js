var bool = false;
var table = $('#myservice').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 2,
    'orderable': false
  },{
    "visible": false,
    "targets": 1
  }],

  "order": [
    [1, 'asc']
  ],
  "displayLength": 25,
  "drawCallback": function(settings) {
    var api = this.api();
    var rows = api.rows({
      page: 'current'
    }).nodes();
    var last = null;
    api.column(1, {
      page: 'current'
    }).data().each(function(group, i) {
      if (last !== group) {
        $(rows).eq(i).before('<tr class="group"> <td colspan="100%" ><strong>' + group + '</strong></td></tr>');
        last = group;
      }
    });
  }
});
$('#myTable tbody').on('click', 'tr.group', function() {
  var currentOrder = table.order()[0];
  if (currentOrder[0] === 1 && currentOrder[1] === 'asc') {
    table.order([1, 'desc']).draw();
  } else {
    table.order([1, 'asc']).draw();
  }
});

function name_validation() {
  if ($('#servicenametxt').val() == '') {
    $('#servicenametxt').addClass('is-invalid');
    $('#servicenameform').addClass('is-invalid');
    bool = false;
  } else {
    $('#servicenametxt').removeClass('is-invalid');
    $('#servicenameform').removeClass('is-invalid');
    bool = true;
  }
}

function type_validation() {
  if ($('#serviceofficetxt').val() == '') {
    $('#serviceofficetxt').addClass('is-invalid');
    $('#servicetypeform').addClass('is-invalid');
    bool = false;
  } else {
    $('#serviceofficetxt').removeClass('is-invalid');
    $('#servicetypeform').removeClass('is-invalid');
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


$('#servicenametxt').blur(function() {
  name_validation();
});
$('#servicenametxt').bind('input', function() {
  name_validation();
});


$('#serviceofficetxt').blur(function() {
  type_validation();
});
$('#serviceofficetxt').bind('input', function() {
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
  $('#serviceofficetxt').removeClass('is-invalid');
  $('#servicetypeform').removeClass('is-invalid');
  $('#servicenametxt').val('');
  $('#servicenametxt').removeClass('is-invalid');
  $('#servicenameform').removeClass('is-invalid');
});

$(document).on('click', 'a[name="edit"]', function() {
  $('#action').val('Edit');
  $('#serviceofficetxt').val('');
  $('#serviceofficetxt').removeClass('is-invalid');
  $('#servicetypeform').removeClass('is-invalid');
  $('#servicenametxt').val('');
  $('#servicenametxt').removeClass('is-invalid');
  $('#servicenameform').removeClass('is-invalid');
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
      $('#serviceofficetxt').val(data.office);
      $('#servicenametxt').val(data.name);
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
