<?php require_once('../config/session.php'); ?>
<?php require_once('../config/database.php'); ?>
<?php include('../layout/header.php'); ?>
<style id="css-ddslick" type="text/css">
  .dd-select {
    border-radius: 2px;
    border: solid 1px #ccc;
    position: relative;
    cursor: pointer;
  }

  .dd-desc {
    color: #aaa;
    display: block;
    overflow: hidden;
    font-weight: normal;
    line-height: 1.4em;
  }

  .dd-selected {
    overflow: hidden;
    display: block;
    padding: 10px;
    font-weight: bold;
  }

  .dd-pointer {
    width: 0;
    height: 0;
    position: absolute;
    right: 10px;
    top: 50%;
    margin-top: -3px;
  }

  .dd-pointer-down {
    border: solid 5px transparent;
    border-top: solid 5px #000;
  }

  .dd-pointer-up {
    border: solid 5px transparent !important;
    border-bottom: solid 5px #000 !important;
    margin-top: -8px;
  }

  .dd-options {
    border: solid 1px #ccc;
    border-top: none;
    list-style: none;
    box-shadow: 0px 1px 5px #ddd;
    display: none;
    position: absolute;
    z-index: 2000;
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: auto;
  }

  .dd-option {
    padding: 10px;
    display: block;
    border-bottom: solid 1px #ddd;
    overflow: hidden;
    text-decoration: none;
    color: #333;
    cursor: pointer;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    -ms-transition: all 0.25s ease-in-out;
  }

  .dd-options>li:last-child>.dd-option {
    border-bottom: none;
  }

  .dd-option:hover {
    background: #f3f3f3;
    color: #000;
  }

  .dd-selected-description-truncated {
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .dd-option-selected {
    background: #f6f6f6;
  }

  .dd-option-image,
  .dd-selected-image {
    vertical-align: middle;
    float: left;
    margin-right: 5px;
    max-width: 64px;
  }

  .dd-image-right {
    float: right;
    margin-right: 15px;
    margin-left: 5px;
  }

  .dd-container {
    position: relative;
  }

  &#8203;

  .dd-selected-text {
    font-weight: bold
  }

  &#8203;
</style>
<style>
  .main-tabs-docs .nav-mtd {
    white-space: nowrap;
    overflow-x: auto;
    position: relative;
  }

  @media (min-width: 62rem) {
    .main-tabs-docs .nav-mtd {
      overflow-x: hidden;
    }
  }

  .main-tabs-docs .nav-mtd li a {
    display: block;
    padding: 20px 24px;
    font-size: 13px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.8);
    text-align: center;
    -webkit-border-radius: 0;
    border-radius: 0;
    font-weight: 500;
    border-bottom: 3px solid #33b5e5;
  }

  .main-tabs-docs .nav-mtd li a.active {
    border-bottom: 3px solid;
    color: #fff;
  }

  @media (min-width: 62em) {
    .main-tabs-docs .nav-mtd li:first-child {
      margin-left: 56px;
    }
  }

  .documentation .primary-heading {
    font-size: 2.7rem;
    font-weight: 500;
  }

  .documentation .secondary-heading {
    font-size: 1.5rem;
    font-weight: 500;
    color: #444343;
    overflow: hidden;
    padding-bottom: .3rem;
    margin-bottom: .7rem;
  }

  .documentation .section-heading {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 1.4rem;
  }

  .documentation .docs-pills {
    margin-top: 1.4rem;
  }

  .documentation .section-preview {
    border: 1px solid #e0e0e0;
    padding: 15px;
  }

  @media only screen and (max-width: 991px) {

    .sticky,
    .sticky2,
    .sticky3,
    .sticky-placeholder {
      display: none;
    }
  }
</style>
<style>
  .timeline-main .stepper.stepper-vertical.timeline li a {
    padding: 0px 24px;
    left: 50%;
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline li a {
      left: 6%;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline li a {
      left: 6%;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline li a .circle {
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    margin-left: -50px;
    background-color: #ccc;
    z-index: 2;
  }

  .timeline-main .stepper.stepper-vertical.timeline li .step-content {
    width: 45%;
    float: left;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    position: relative;
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline li .step-content {
      width: 80%;
      left: 3rem;
      margin-right: 3rem;
      margin-bottom: 2rem;
      float: right;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline li .step-content {
      width: 85%;
      left: 3rem;
      margin-right: 3rem;
      margin-bottom: 2rem;
      float: right;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline li .step-content:before {
    position: absolute;
    top: 26px;
    right: -15px;
    display: inline-block;
    border-top: 15px solid transparent;
    border-left: 15px solid #e0e0e0;
    border-right: 0 solid #e0e0e0;
    border-bottom: 15px solid transparent;
    content: " ";
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline li .step-content:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline li .step-content:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline li .step-content:after {
    position: absolute;
    top: 27px;
    right: -14px;
    display: inline-block;
    border-top: 14px solid transparent;
    border-left: 14px solid #fff;
    border-right: 0 solid #fff;
    border-bottom: 14px solid transparent;
    content: " ";
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline li .step-content:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline li .step-content:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline li.timeline-inverted {
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
  }

  .timeline-main .stepper.stepper-vertical.timeline li.timeline-inverted .step-content {
    float: right;
  }

  .timeline-main .stepper.stepper-vertical.timeline li.timeline-inverted .step-content:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }

  .timeline-main .stepper.stepper-vertical.timeline li.timeline-inverted .step-content:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
  }

  .timeline-main .stepper.stepper-vertical.timeline li:not(:last-child):after {
    content: " ";
    position: absolute;
    width: 3px;
    background-color: #e0e0e0;
    left: 50%;
    top: 65px;
    margin-left: -1.5px;
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline li:not(:last-child):after {
      left: 6%;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline li:not(:last-child):after {
      left: 6%;
    }
  }

  @media (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline li {
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li .step-content:before {
    top: 1rem;
    border-left: 15px solid #D32F2F;
    border-right: 0 solid #D32F2F;
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li .step-content:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li .step-content:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li .step-content:after {
    top: 1rem;
    border-left: 14px solid #D32F2F;
    border-right: 0 solid #D32F2F;
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li .step-content:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li .step-content:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li .step-content .timeline-header {
    -webkit-border-top-left-radius: 2px;
    border-top-left-radius: 2px;
    -webkit-border-top-right-radius: 2px;
    border-top-right-radius: 2px;
  }

  .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li.timeline-inverted .step-content:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
  }

  .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li.timeline-inverted .step-content:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
  }

  .timeline-main .stepper.stepper-vertical.timeline.colorful-timeline li:not(:last-child):after {
    background-color: #D32F2F;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-animated .more-padding {
    padding-right: 100px;
    padding-left: 100px;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-animated li {
    -webkit-transition: all 0.7s ease-in-out;
    -o-transition: all 0.7s ease-in-out;
    transition: all 0.7s ease-in-out;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li a {
    padding: 0px;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li a .circle {
    width: 23px;
    height: 23px;
    line-height: 23px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    margin-left: -12px;
    background-color: #ccc;
    z-index: 2;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content {
    width: 45%;
    float: left;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    position: relative;
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content {
      width: 80%;
      left: 3rem;
      margin-right: 3rem;
      margin-bottom: 2rem;
      float: right;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content {
      width: 85%;
      left: 3rem;
      margin-right: 3rem;
      margin-bottom: 2rem;
      float: right;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content:before {
    position: absolute;
    top: 26px;
    display: inline-block;
    border-top: 15px solid transparent;
    border-left: 15px solid #e0e0e0;
    border-right: 0 solid #e0e0e0;
    border-bottom: 15px solid transparent;
    content: " ";
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content:after {
    position: absolute;
    top: 27px;
    display: inline-block;
    border-top: 14px solid transparent;
    border-left: 14px solid #fff;
    border-right: 0 solid #fff;
    border-bottom: 14px solid transparent;
    content: " ";
  }

  @media (max-width: 450px) {
    .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }
  }

  @media (min-width: 451px) and (max-width: 1025px) {
    .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content.hoverable {
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li .step-content.hoverable:hover {
    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li:not(:last-child):after {
    width: 2px;
    background-color: #9e9e9e;
    top: 32px;
    height: 100%;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li.timeline-inverted .step-content:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-simple li.timeline-inverted .step-content:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-images li a .circle {
    font-size: 1rem;
  }

  .timeline-main .stepper.stepper-vertical.timeline.timeline-images li:not(:last-child):after {
    background-color: #26c6da;
  }
</style>
<style type="text/css">
  .cascading-admin-card {
    margin-top: 20px
  }

  .cascading-admin-card .admin-up {
    margin-left: 4%;
    margin-right: 4%;
    margin-top: -20px
  }

  .cascading-admin-card .admin-up .fa {
    padding: 1.7rem;
    font-size: 2rem;
    color: #fff;
    text-align: left;
    margin-right: 1rem;
    -webkit-border-radius: 3px;
    border-radius: 3px
  }

  .cascading-admin-card .admin-up .data {
    float: right;
    margin-top: 2rem;
    text-align: right
  }

  .cascading-admin-card .admin-up .data p {
    color: #999;
    font-size: 12px
  }

  .progress,
  .progress .progress-bar {
    height: 6px
  }
</style>
<style type="text/css">
  /* Chart.js */
  @-webkit-keyframes chartjs-render-animation {
    from {
      opacity: 0.99
    }

    to {
      opacity: 1
    }
  }

  @keyframes chartjs-render-animation {
    from {
      opacity: 0.99
    }

    to {
      opacity: 1
    }
  }

  .chartjs-render-monitor {
    -webkit-animation: chartjs-render-animation 0.001s;
    animati onload="
"on: chartjs-render-animation 0.001s;

  }
</style>

<body class="fixed-sn white-skin">
  <header>
    <?php include('../layout/side_nav.php'); ?>
    <?php include('../layout/nav_header.php'); ?>
  </header>
  <main>
    <div class="container-fluid">
      <?php
      include_once("../config/database.php");
       $sql = "SELECT * FROM useracc WHERE id = $user";
       $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($connect));
       while( $record = mysqli_fetch_assoc($resultset) ) {
        if ($record['type'] == 1) {
          include('../components/dashboard.php');
        }else if ($record['type'] == 2) {
            include('../components/dashboard_admin.php');
        } }?>
    </div>
  </main>
  <?php include('../layout/footer.php'); ?>
  <script type="text/javascript" src="dashboard.js"></script>
  <script>
    //pie
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
  </script>

  <script>
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
  </script>
  <script>
    $('.datepicker').pickadate();
  </script>
