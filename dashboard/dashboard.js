$(document).ready(function() {
  $('#side-val').text("Dashboard");
  $('#sidenav1parent').addClass("active");
  $('#sidenav1').addClass("active");
});

$(".button-collapse").sideNav();
var container = document.querySelector('.custom-scrollbar');
Ps.initialize(container, {
  wheelSpeed: 2,
  wheelPropagation: true,
  minScrollbarLength: 20
});
// Tooltips Initialization
$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
