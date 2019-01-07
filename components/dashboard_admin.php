<section class="mt-lg-5">
  <div class="text-left">
    <h3 class="pb-3"><strong>Dashboard</strong></h3>
  </div>

  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-building amber" style="padding-left: 2rem; padding-right : 2rem;"></i>
          <div class="data">
            <p>TOTAL REPORTS</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(divid) FROM division");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(divid)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">


        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-layer-group blue" style="padding-left: 2rem; padding-right : 2rem;"></i>
          <div class="data">
            <p>TOTAL PENDING</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(secid) FROM section");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(secid)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-stream green" style="padding-left: 2rem; padding-right : 2rem;"></i>
          <div class="data">
            <p>TOTAL FINISHED</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(posid) FROM position");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(posid)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-stream purple"></i>
          <div class="data">
            <p>REGISTERED SYSTEM</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(sysid) FROM infosys");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(sysid)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
        </div>
      </div>
    </div>



    <!--div class="col-xl-9 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <canvas id="pieChart"></canvas>


        </div>
      </div>
    </div-->

  </div>
