<ol class="breadcrumb pull-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
</ol>

<h1 class="page-header">User Account</h1>



<div class="row">
  <div class="col-lg-2">
    <p class="m-b-20">
      <a href="#myModal" class="btn btn-sm btn-primary" data-toggle="modal" id="btnadd">Add Account</a>
    </p>
  </div>


  <div class="col-lg-12 ui-sortable">
    <div class="panel panel-inverse">

      <div class="panel-heading">
        <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
        <h4 class="panel-title">User</h4>
      </div>

      <div class="panel-body table-responsive">
        <table id="myuser" class="table w-100">
          <thead>
            <tr>
              <th width="1%">ID</th>
              <th width="1%">USERNAME</th>
              <th style="white-space: nowrap;width: 1%;">FIRSTNAME</th>
              <th class="text-nowrap">MIDDLENAME</th>
              <th class="text-nowrap">SURNAME</th>
              <th class="text-nowrap">GENDER</th>
              <th class="text-nowrap">SERVICE LENGTH</th>
              <th class="text-nowrap">OFFICE</th>
              <th class="text-nowrap">DIVISION</th>
              <th class="text-nowrap">SECTION</th>
              <th class="text-nowrap">POSITION</th>
              <th class="text-nowrap">UNIT</th>
              <th class="text-nowrap">STATUS</th>
              <th class="text-nowrap">ACTION
              </th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-lg-12 ui-sortable">
    <div class="panel panel-inverse">

      <div class="panel-heading">
        <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
        <h4 class="panel-title">Admin</h4>
      </div>

      <div class="panel-body table-responsive">
        <table id="myadmin" class="table w-100">
          <thead>
            <tr>
              <th width="1%">ID</th>
              <th width="1%">USERNAME</th>
              <th style="white-space: nowrap;width: 1%;">FIRSTNAME</th>
              <th class="text-nowrap">MIDDLENAME</th>
              <th class="text-nowrap">SURNAME</th>
              <th class="text-nowrap">GENDER</th>
              <th class="text-nowrap">SERVICE LENGTH</th>
              <th class="text-nowrap">OFFICE</th>
              <th class="text-nowrap">DIVISION</th>
              <th class="text-nowrap">SECTION</th>
              <th class="text-nowrap">POSITION</th>
              <th class="text-nowrap">UNIT</th>
              <th class="text-nowrap">STATUS</th>
              <th class="text-nowrap">ACTION
              </th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>


<section>
  <div class="modal modal-message fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Message Header</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form onsubmit="return Validate()" id="vform" name="vform" method="POST" novalidate>

          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <h4 class="card-title">Personal Information</h4>
                <h6 class="card-subtitle"></h6>
                <div class="form-group row m-b-15" id="firstnameform">
                  <label class="col-md-3 col-sm-3 col-form-label" for="firstname">Firstname</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control " type="text" id="firstname" name="firstname" placeholder="Required" required />
                  </div>
                </div>

                <div class="form-group row m-b-15" id="middlenameform">
                  <label class="col-md-3 col-sm-3 col-form-label" for="middlename">Middlename</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control " type="text" id="middlename" name="middlename" placeholder="Required" required />
                  </div>
                </div>

                <div class="form-group row m-b-15" id="surnameform">
                  <label class="col-md-3 col-sm-3 col-form-label" for="surname">Surname</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control " type="text" id="surname" name="surname" placeholder="Required" required />
                  </div>
                </div>

                <div class="form-group row  m-b-15">
                  <label class="col-md-3 col-form-label">Gender</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female" />
                      <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input " type="radio" name="gender" id="male" value="male" />
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="lengthserviceform">
									<label for="lengthservice"  class="col-md-3 col-sm-3 col-form-label">Length of Service</label>
									<div class="col-md-8">
										<div class="input-group date" >
											<input type="month" id="lengthservice" name="lengthservice" class="form-control">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
										</div>
									</div>
								</div>


              </div>

              <div class="col-md-6">
                <h4 class="card-title">Personal Information</h4>
                <h6 class="card-subtitle"></h6>

                <div class="form-group row m-b-15" id="lengthserviceform">
                  <label for="officeselect" class="col-md-3 col-sm-3 col-form-label">Office</label>
                  <?php  require_once('../../config/database.php');
                    $sql = mysqli_query($connect, "SELECT * FROM tbloffice"); ?>
                  <div class="col-md-8 col-sm-8">
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
                  <?php  require_once('../../config/database.php');
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
                  <?php  require_once('../../config/database.php');
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
                  <?php  require_once('../../config/database.php');
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
                  <?php  require_once('../../config/database.php');
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

              <div class="col-md-6">
                <h4 class="card-title ">Account</h4>
                <h6 class="card-subtitle"></h6>
                <div class="form-group row m-t-40" id="typeform">

                  <label for="usertypeselect" class="col-sm-3 text-left control-label col-form-label">Type</label>
                  <?php  require_once('../../config/database.php');
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

                <div class="form-group row m-b-15" id="usernameform">
                  <label class="col-md-3 col-sm-3 col-form-label" for="username">Username</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control " type="text" id="username" name="username" placeholder="Required" required />
                  </div>
                </div>

                <div class="form-group row m-b-15" id="passwordform">
                  <label class="col-md-3 col-sm-3 col-form-label" for="password">Password</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control " type="password" id="password" name="password" placeholder="Required" required />
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
    </div>
  </div>
</section>
