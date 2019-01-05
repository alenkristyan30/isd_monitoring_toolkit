var table = $('#dtMaterialDesignExample').DataTable({
  'order': [],
  'ajax': {
    url: 'sync.php',
    method: 'POST'
  },
  'columnDefs': [{
    'targets': 4,
    'orderable': false
  }]
});


$(document).ready(function() {
  $('#side-val').text("Accounts");
  $('#sidenav2').addClass("active");
  $('#sidenav2parent').addClass("active");
  $('#management-nav').css("display", "block");
  $('#acc_side_parent').addClass("current-menu-item");
});


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

$('.mdb_upload').mdb_upload();

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
