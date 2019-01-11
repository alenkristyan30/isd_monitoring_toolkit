<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
    <div class="row">

      <!-- Column -->
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
              <div class="m-l-10 align-self-center">
                <?php  require_once('../config/database.php');
                $sql = mysqli_query($connect, "SELECT COUNT(gender) FROM userinfo WHERE gender = 'Male'");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h3 class='m-b-0 font-light'>".$row['COUNT(gender)']."</h3>";
                  }
                  ?>
                <h5 class="text-muted m-b-0">Male</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
              <div class="m-l-10 align-self-center">
                <?php  require_once('../config/database.php');
                $sql = mysqli_query($connect, "SELECT COUNT(gender) FROM userinfo WHERE gender = 'Female'");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h3 class='m-b-0 font-light'>".$row['COUNT(gender)']."</h3>";
                  }
                  ?>
                <h5 class="text-muted m-b-0">Female</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
              <div class="m-l-10 align-self-center">
                <?php  require_once('../config/database.php');
                $sql = mysqli_query($connect, "SELECT COUNT(id) FROM useracc WHERE type = 2");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h3 class='m-b-0 font-light'>".$row['COUNT(id)']."</h3>";
                  }
                  ?>
                <h5 class="text-muted m-b-0">Admin</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
              <div class="m-l-10 align-self-center">
                <?php  require_once('../config/database.php');
                $sql = mysqli_query($connect, "SELECT COUNT(id) FROM useracc WHERE type = 3");
                while ($row = mysqli_fetch_assoc($sql))
                {
                  echo "<h3 class='m-b-0 font-light'>".$row['COUNT(id)']."</h3>";
                  }
                  ?>
                <h5 class="text-muted m-b-0">User</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->

      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-body">
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col p-r-0 align-self-center">
              <h2 class="font-light m-b-0">324</h2>
              <h6 class="text-muted">New Clients</h6>
            </div>
            <!-- Column -->
            <div class="col text-right align-self-center">
              <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-body">
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col p-r-0 align-self-center">
              <h2 class="font-light m-b-0">2376</h2>
              <h6 class="text-muted">Total Visits</h6>
            </div>
            <!-- Column -->
            <div class="col text-right align-self-center">
              <div data-label="30%" class="css-bar m-b-0 css-bar-success css-bar-20"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-body">
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col p-r-0 align-self-center">
              <h2 class="font-light m-b-0">1795</h2>
              <h6 class="text-muted">New Leads</h6>
            </div>
            <!-- Column -->
            <div class="col text-right ">
              <div data-label="40%" class="css-bar m-b-0 css-bar-primary css-bar-40"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-6 col-lg-3">
        <div class="card card-body">
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col p-r-0 align-self-center">
              <h2 class="font-light m-b-0">36870</h2>
              <h6 class="text-muted">Page Views</h6>
            </div>
            <!-- Column -->
            <div class="col text-right align-self-center">
              <div data-label="60%" class="css-bar m-b-0 css-bar-danger css-bar-60"></div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12">

        <div class="card">
          <div class="card-body">
            This is some text within a card block.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
