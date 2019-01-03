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
          <div class="progress mb-3">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div>



      <div class="col-md-12">
        <div class="timeline-main">
          <!-- Timeline Wrapper -->
          <ul class="stepper stepper-vertical timeline timeline-animated pl-0">

            <li>
              <!--Section Title -->
              <a href="#!">
                <span class="circle default-color z-depth-1-half"><i class="fas fa-heart" aria-hidden="true"></i></span>
              </a>

              <!-- Section Description -->
              <div class="step-content z-depth-1 ml-2 p-4">
                <h4 class="font-weight-bold">Ut enim ad minim veniam</h4>
                <p class="text-muted mt-3"><i class="far fa-clock" aria-hidden="true"></i> 11 hours ago via
                  Twitter</p>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </li>
            <li class="timeline-inverted">
              <!--Section Title -->
              <a href="#!">
                <span class="circle secondary-color z-depth-1-half"><i class="fas fa-users" aria-hidden="true"></i></span>
              </a>

              <!-- Section Description -->
              <div class="step-content z-depth-1 mr-xl-2 p-4">
                <h4 class="font-weight-bold">Duis aute irure dolor</h4>
                <p class=" mt-4 mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                  architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                  aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                  sequi nesciunt.</p>
              </div>
            </li>
            <li>
              <!--Section Title -->
              <a href="#!">
                <span class="circle primary-color z-depth-1-half"><i class="fas fa-cloud" aria-hidden="true"></i></span>
              </a>

              <!-- Section Description -->
              <div class="step-content z-depth-1 ml-2 p-4">
                <h4 class="font-weight-bold">Sed ut nihil unde omnis</h4>
                <p class="mt-4 mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                  adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                  aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                  suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                  reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
                  dolorem eum fugiat quo voluptas nulla pariatur?</p>
              </div>
            </li>
            <li class="timeline-inverted">
              <!--Section Title -->
              <a href="#!">
                <span class="circle pink z-depth-1-half"><i class="fas fa-coffee" aria-hidden="true"></i></span>
              </a>

              <!-- Section Description -->
              <div class="step-content z-depth-1 mr-xl-2 p-4">
                <h4 class="font-weight-bold"> Quis autem vel eum voluptate</h4>
                <p class="mt-4 mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                  praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                  occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                  id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
              </div>
            </li>
            <li>
              <!--Section Title -->
              <a href="#!">
                <span class="circle mdb-color z-depth-1-half"><i class="fab fa-instagram" aria-hidden="true"></i></span>
              </a>

              <!-- Section Description -->
              <div class="step-content z-depth-1 ml-2 p-4">
                <h4 class="font-weight-bold">Mussum ipsum cacilds</h4>
                <p class="mt-4 mb-0">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                  saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum
                  hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                  perferendis doloribus asperiores repellat.</p>
              </div>
            </li>
          </ul>
          <!-- Timeline Wrapper -->
        </div>
      </div>

    <!--div class="col-xl-9 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <canvas id="pieChart"></canvas>


        </div>
      </div>
    </div-->


    <div class="md-form">
      <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
      <label for="date-picker-example">Try me...</label>
    </div>
  </div>
  <!-- Timeline -->

<!-- Timeline -->
</section>
