<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">User Management</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Account</li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <button type="button" class="btn btn-primary" alt="default" data-toggle="modal" data-target="#myModal" name="btnadd" id="btnadd">Add Account</button>
          <div class="table-responsive m-t-40 col-12">
            <table id="myTable" class="table dataTable table-hover w-100 ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>USERNAME</th>
                  <th>FIRSTNAME</th>
                  <th>MIDDLENAME</th>
                  <th>SURNAME</th>
                  <th>GENDER</th>
                  <th>SERVICE LENGTH</th>
                  <th>TYPE</th>
                  <th>OFFICE</th>
                  <th>DIVISION</th>
                  <th>SECTION</th>
                  <th>POSITION</th>
                  <th>UNIT</th>
                  <th>STATUS</th>
                  <th>ACTION
                  </th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">

        <form class="form-horizontal form-control-line" onsubmit="return Validate()" id="vform" name="vform" method="POST" novalidate>
          <div class="mx-auto p-5">
            <div class="row">
              <div class="col-md-6">
                <h4 class="card-title">Personal Information</h4>
                <h6 class="card-subtitle"></h6>
                <div class="form-group row m-t-40 " id="firstnameform">
                  <label for="firstname" class="col-sm-3 text-left control-label col-form-label">Firstname</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>
                  </div>
                </div>

                <div class="form-group row" id="middlenameform">
                  <label for="middlename" class="col-sm-3 text-left control-label col-form-label">MIddlename</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control alphabetic" id="middlename" name="middlename" placeholder="Middlename">
                  </div>
                </div>

                <div class="form-group row" id="surnameform">
                  <label for="surname" class="col-sm-3 text-left control-label col-form-label">Surname</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control alphabetic" id="surname" name="surname" placeholder="Surname">
                  </div>
                </div>
                <div class="form-group row" id="genderform">
                  <label for="inputEmail3" class="col-sm-3 text-left control-label col-form-label">Gender</label>
                  <div class="col-sm-8">
                    <input name="gender" type="radio" id="female" value="female" >
                    <label for="female">Female</label>
                    <input name="gender" type="radio" id="male" value="male">
                    <label for="male">Male</label>

                  </div>
                </div>
                <div class="form-group row" id="lengthserviceform">
                  <label for="lengthservice" class="col-sm-3 text-left control-label col-form-label">Length of Service</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="month" id="lengthservice" name="lengthservice" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <h4 class="card-title ">Account</h4>
                <h6 class="card-subtitle"></h6>
                <div class="form-group row m-t-40" id="typeform">

                  <label for="usertypeselect" class="col-sm-3 text-left control-label col-form-label">Type</label>
                  <?php  require_once('../config/database.php');
                    $sql = mysqli_query($connect, "SELECT * FROM tblusertype WHERE usertypeID != 1"); ?>
                  <div class="col-sm-8">
                    <select class="form-control" id="usertypeselect" name="usertypeselect" placeholder="Type" required>
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['usertypeID']."'>".$row['usertypeTITLE']."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>


                <div class="form-group row" id="usernameform">
                  <label for="username" class="col-sm-3 text-left control-label col-form-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Firstname">
                  </div>
                </div>

                <div class="form-group row" id="passwordform">
                  <label for="password" class="col-sm-3 text-left control-label col-form-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                </div>
              </div>

              <div class="col-md-6 m-t-40">
                <h4 class="card-title">Department</h4>
                <h6 class="card-subtitle"></h6>
                <div class="form-group row m-t-40">
                  <label for="officeselect" class="col-sm-3 text-left control-label col-form-label">Office</label>
                  <?php  require_once('../config/database.php');
                    $sql = mysqli_query($connect, "SELECT * FROM tbloffice"); ?>
                  <div class="col-sm-8">
                    <select class="form-control" id="officeselect" name="officeselect" placeholder="Office">
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['officeID']."'>".$row['officeNAME']."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="divisionselect" class="col-sm-3 text-left control-label col-form-label">Division</label>
                  <?php  require_once('../config/database.php');
                    $sql = mysqli_query($connect, "SELECT * FROM tbldivision"); ?>
                  <div class="col-sm-8">
                    <select class="form-control" id="divisionselect" name="divisionselect" placeholder="Division">
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['divisionID']."'>".$row['divisionNAME']."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="sectionselect" class="col-sm-3 text-left control-label col-form-label">Section</label>
                  <?php  require_once('../config/database.php');
                    $sql = mysqli_query($connect, "SELECT * FROM tblsection"); ?>
                  <div class="col-sm-8">
                    <select class="form-control" id="sectionselect" name="sectionselect" placeholder="Username">
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['sectionID']."'>".$row['sectionNAME']."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="unitselect" class="col-sm-3 text-left control-label col-form-label">Unit</label>
                  <?php  require_once('../config/database.php');
                    $sql = mysqli_query($connect, "SELECT * FROM tblunit"); ?>
                  <div class="col-sm-8">
                    <select class="form-control" id="unitselect" name="unitselect" placeholder="Username">
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['unitID']."'>".$row['unitNAME']."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="positionselect" class="col-sm-3 text-left control-label col-form-label">Position</label>
                  <?php  require_once('../config/database.php');
                    $sql = mysqli_query($connect, "SELECT * FROM tblposition"); ?>
                  <div class="col-sm-8">
                    <select class="form-control" id="positionselect" name="positionselect" placeholder="Username">
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['positionID']."'>".$row['positionNAME']."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>



              </div>
            </div>
          </div>



      </div>
      <div class="modal-footer">
        <input type="hidden" name="action" id="action">
        <input type="hidden" name="id" id="id">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
