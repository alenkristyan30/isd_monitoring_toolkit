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
});


var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
  type: 'pie',
  data: {
    labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
    datasets: [{
      data: [300, 50, 100, 40, 120],
      backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
      hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
    }]
  },
  options: {
    responsive: true
  }
});


$(window).scroll(function() {
  $('.timeline-animated li').each(function() {
    var scrollTop = $(window).scrollTop(),
      elementOffset = $(this).offset().top,
      distance = (elementOffset - scrollTop),
      windowHeight = $(window).height(),
      breakPoint = windowHeight * 0.9;

    if (distance > breakPoint) {
      $(this).addClass("more-padding");
    }
    if (distance < breakPoint) {
      $(this).removeClass("more-padding");
    }
  });
});
