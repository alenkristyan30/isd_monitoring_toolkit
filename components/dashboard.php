<section class="mt-lg-5">
  <div style="height: 5px"></div>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-male blue" style="padding-left: 2.5rem; padding-right : 2.5rem;"></i>
          <div class="data">
            <p>MALE</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(gender) FROM userinfo WHERE gender = 'Male'");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(gender)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
          <div class="progress mb-3">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-female pink" style="padding-left: 2.5rem; padding-right : 2.5rem;"></i>
          <div class="data">
            <p>FEMALE</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(gender) FROM userinfo WHERE gender = 'Female'");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(gender)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
          <div class="progress mb-3">
            <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-users red"></i>
          <div class="data">
            <p>REGISTERED USERS</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(id) FROM userinfo");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(id)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
          <div class="progress mb-3">
            <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-users orange"></i>
          <div class="data">
            <p>ADMINS</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(id) FROM useracc WHERE type = 'admin'");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(id)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
          <div class="progress mb-3">
            <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-building amber"></i>
          <div class="data">
            <p>DIVISIONS</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(id) FROM division");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(id)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
          <div class="progress mb-3">
            <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-stream green"></i>
          <div class="data">
            <p>REGISTERED SYSTEM</p>
            <?php  require_once('../config/database.php');
              $sql = mysqli_query($connect, "SELECT COUNT(id) FROM infosys");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(id)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
          <div class="progress mb-3">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

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
              $sql = mysqli_query($connect, "SELECT COUNT(id) FROM infosys");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h4 class='font-weight-bold dark-grey-text'>".$row['COUNT(id)']."</h4>";
                  }
              ?>
          </div>
        </div>
        <div class="card-body card-body-cascade">
          <div class="progress mb-3">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xl-9 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <canvas id="pieChart"></canvas>


        </div>
      </div>
    </div>

  </div>

</section>
