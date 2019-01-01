<section class="mt-lg-5">
  <div class="text-left">
    <h3 class="pb-3">Dashboards</h3>

  </div>
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
              $sql = mysqli_query($connect, "SELECT COUNT(id) FROM useracc WHERE type = 2");
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
          <i class="fa fa-building amber" style="padding-left: 2rem; padding-right : 2rem;"></i>
          <div class="data">
            <p>DIVISIONS</p>
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
          <div class="progress mb-3">
            <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-layer-group blue" style="padding-left: 2rem; padding-right : 2rem;"></i>
          <div class="data">
            <p>SECTIONS</p>
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
          <div class="progress mb-3">
            <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-stream green" style="padding-left: 2rem; padding-right : 2rem;"></i>
          <div class="data">
            <p>POSITIONS</p>
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
          <div class="progress mb-3">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card card-cascade cascading-admin-card">
        <div class="admin-up">
          <i class="fa fa-stream purple" style="padding-left: 2rem; padding-right : 2rem;"></i>
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
          <div class="progress mb-3">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

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

  <div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="text-left">
        <h3>Top 5 Ratings</h3>
        <hr>
      </div>
      <div class="card">
        <div class="card-body">
          <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">System Name
                </th>
                <th class="th-sm">Total
                </th>
                <th class="th-sm">Timestamp
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Financial Accounting Reporting System</td>
                <td class="w-50">
                  <div class="progress mb-3">
                    <div class="progress-bar red" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      25 %
                    </div>
                  </div>
                </td>
                <td>2018-12-13 13:59:10</td>
              </tr>
              <tr>
                <td>Environmental Law Enforcement Management Information</td>
                <td class="w-50">
                  <div class="progress mb-3">
                    <div class="progress-bar amber" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      50 %
                    </div>
                  </div>
                </td>
                <td>2018-12-13 13:59:10</td>
              </tr>
              <tr>
                <td>Accounting Tracking Reports Information System</td>
                <td class="w-50">
                  <div class="progress mb-3">
                    <div class="progress-bar blue" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      75 %
                    </div>
                  </div>
                </td>
                <td>2018-12-13 13:59:10</td>
              </tr>
              <tr>
                <td>Stakeholder Management Information System</td>
                <td class="w-50">
                  <div class="progress mb-3">
                    <div class="progress-bar green" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      80 %
                    </div>
                  </div>
                </td>
                <td>2018-12-13 13:59:10</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
      <div class="text-left">
        <h3>Recent feedback</h3>
        <hr>
      </div>
      <div class="mb-4">
        <div class="card">
          <div class="card-body">
            <div class="media d-block d-md-flex mt-3">
              <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3" src="../dist/img/male-avatar.png" alt="Generic placeholder image">
              <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="mt-0">
                  <a class="text-default" href="">Jethuro</a>
                  <soan class="pull-right text-sm">
                    2018-12-13 13:59:10
                    </span>
                </h5>
                <h4>Environmental Law Enforcement Management Information</h4>
                <span class="badge green">Excellent</span>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-4">
        <div class="card">
          <div class="card-body">
            <div class="media d-block d-md-flex mt-3">
              <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3" src="../dist/img/male-avatar.png" alt="Generic placeholder image">
              <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="mt-0">
                  <a class="text-default" href="">Jethuro</a>
                  <soan class="pull-right text-sm">
                    2018-12-13 13:59:10
                    </span>
                </h5>
                <h4>Environmental Law Enforcement Management Information</h4>
                <span class="badge green">Excellent</span>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>


</section>
