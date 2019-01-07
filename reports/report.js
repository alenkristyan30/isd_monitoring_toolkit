var table = $('#dtMaterialDesignExample').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 8,
    'orderable': false
  }]
})

function Validate() {
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
  })
  return false;
}
$('#add').click(function() {
  $('#modaltitle').text('Add');
  $('#action').val('Add');
  $('#surname').val('');
  $('#vform').removeClass('was-validated');

});
$(document).on('click', 'a[name="assign"]', function() {
  $('#modaltitle').text('Assign');
  $('#action').val('Assign');
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
      $('#reportidassign').text(data.reportidview);
      $('#usernameassign').text(data.usernameview);
      $('#systemassign').text(data.systemview);
      $('#categoryassign').text(data.categoryview);
      $('#statusassign').text(data.statusview);
      $('#commentassign').text(data.commentview);
      $('#timestamnpassign').text(data.timestamnpview);
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
      $('#reportidview').text(data.reportidview);
      $('#usernameview').text(data.usernameview);
      $('#systemview').text(data.systemview);
      $('#categoryview').text(data.categoryview);
      $('#statusview').text(data.statusview);
      $('#commentview').text(data.commentview);
      $('#timestamnpview').text(data.timestamnpview);
    }
  })
});


$(document).ready(function() {
  $('#divsel').materialSelect();
  $('#possel').materialSelect();
  $('#secsel').materialSelect();
  $('#side-val').text("Reports");
  $('#sidenav3').addClass("active");
  $('#sidenav3parent').addClass("active");
  $('#report-nav').css("display", "block");
  $('#report_side_parent').addClass("current-menu-item");
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
})();
