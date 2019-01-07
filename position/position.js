var table = $('#dtMaterialDesignExample').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [
    {
      'targets': 3,
      'orderable': false
    }
  ]
})
function Validate() {
  $.ajax({
    url: 'function.php',
    method: 'POST',
    data: $('#vform').serialize(),
    success: function (data) {
      swal(data, '', 'success', {closeOnClickOutside: false}).then((value) => {
        $('#exampleModalCenter').modal('hide');
        toastr["success"]("Successful");
        table.ajax.reload();
      })
    }
  })
  return false;
}
$('#add').click(function () {
    $('label').addClass("active");
    $('#ModalLongTitle').text("Add");
  $('#action').val('Add');
  $('#postitle').val('');
  $('#posdes').val('');

});
$(document).on('click', 'a[name="edit"]', function () {
  $('#ModalLongTitle').text("Edit");
  $('#action').val('Edit');
  var id = $(this).attr('id');
  $.ajax({
    url: 'fetch_single.php',
    method: 'POST',
    data: {
      id: id
    },
    dataType: 'json',
    success: function (data) {
      $('#id').val(id);
      $('label').addClass("active");
      $('#exampleModalCenter').modal('show');
      $('#postitle').val(data.postitle);
      $('#posdes').val(data.posdes);
    }
  })
});
$(document).on('click', 'a[name="delete"]', function () {
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
        success: function (data) {
          toastr["info"]("Successfully deleted");
          table.ajax.reload();
        }
      })
    }
  })
});

$(document).ready(function() {
  $('#divsel').materialSelect();
  $('#possel').materialSelect();
  $('#secsel').materialSelect();
  $('#side-val').text("Position");
  $('#sidenav2').addClass("active");
  $('#sidenav2parent').addClass("active");
  $('#management-nav').css("display", "block");
  $('#position_side_parent').addClass("current-menu-item");
});


$(".button-collapse").sideNav();
var container = document.querySelector('.custom-scrollbar');
Ps.initialize(container, {
  wheelSpeed: 2,
  wheelPropagation: true,
  minScrollbarLength: 20
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$('.mdb_upload').mdb_upload();

$(function () {
  'use strict';
  window.addEventListener('load', function () {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
