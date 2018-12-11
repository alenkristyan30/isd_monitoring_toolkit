<section class="mt-lg-5">
  <div style="height: 5px"></div>
  <div class="row">
    <canvas id="pieChart"></canvas>
    <div class="col-xl-12 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">

        </div>
      </div>
    </div>

  </div>
</section>
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
