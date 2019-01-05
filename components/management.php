<section class="mt-lg-5">
  <div class="text-left">
    <h3 class="pb-3"><strong>User Management</strong></h3>
  </div>
  <section>
    <div class="row">
      <div class="col">
        <div class="mb-3" align="left">
          <button type="button" class="btn default-color" id="add" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fal fa-plus pr-1"></i>ADD
          </button>
        </div>
      </div>
      <!--div class="col">
        <div class="mb-3" align="right">
          <button type="button" class="btn primary-color">
            <i class="fal fa-list"></i>
          </button>
          <button type="button" class="btn secondary-color">
            <i class="fal fa-grip-horizontal"></i>
          </button>
        </div>
      </div-->
    </div>
  </section>
  <section>
    <div class="table-responsive col-md-12">
      <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
        <thead class="elegant-color white-text">
          <tr>
            <th class="th-sm">Id
            </th>
            <th class="th-sm">Username
            </th>
            <th class="th-sm">Surname
            </th>
            <th class="th-sm">Firstname
            </th>
            <th class="th-sm">Middlename
            </th>
            <th class="th-sm">Extension
            </th>
            <th class="th-sm">Division
            </th>
            <th class="th-sm">Section
            </th>
            <th class="th-sm">Position
            </th>
            <th class="th-sm">Gender
            </th>
            <th class="th-sm">Action
            </th>
          </tr>
        </thead>
      </table>
    </div>

  </section>

  <section>
    <div class="modal fade" id="exampleModalCenter" name="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="modaltitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation" novalidate>

              <div class="w-75 mx-auto">

                <div class="row">
                  <div class="col-sm">
                    <div class="fileupload-wrapper">
                      <input type="file" id="image_file" name="image_file" aria-describedby="fileInput" class="mdb_upload" />
                    </div>

                    <div class="md-form">
                      <label for="surname">Surname</label>
                      <input type="text" name="surname" class="form-control" id="surname" required>
                      <div class="invalid-feedback">
                        Surname is required
                      </div>
                    </div>

                    <div class="md-form">
                      <label for="firstname">First name</label>
                      <input type="text" name="firstname" class="form-control" id="firstname" required>
                      <div class="invalid-feedback">
                        Firstname is required
                      </div>
                    </div>

                    <div class="md-form">
                      <label for="middlename">Middle name</label>
                      <input type="text" name="middlename" class="form-control" id="middlename" required>
                      <div class="invalid-feedback">
                        Lastname is required
                      </div>
                    </div>

                    <div class="md-form">
                      <label for="nameext">Name extension</label>
                      <input type="text" name="nameext" class="form-control" id="nameext" aria-describedby="ext">
                      <small id="ext-mute" class="form-text text-muted">
                        Optional
                      </small>
                    </div>

                    <div align="left" class="pl-0 mt-0">
                      <label for="gender" style="color : #757575 ; font-size: .8rem">Gender</label>
                      <div class="">

                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="female" name="gender" value="Female" required>
                          <label class="form-check-label" for="female">Female</label>
                        </div>

                        <!-- Group of material radios - option 2 -->
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                          <label class="form-check-label" for="male">Male</label>
                          <div class="invalid-feedback">
                            You must to select before submitting.
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-sm">
                    <div class="form-group">
                      <label for="divsel"></label>
                      <?php  require_once('../config/database.php');
                        $sql = mysqli_query($connect, "SELECT * FROM division"); ?>
                      <select class="mdb-select" searchable="Search here.." id="divsel" name="divsel" required>
                        <option value="" disabled>Choose division</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($sql))
                            {
                              echo "<option value='".$row['divid']."'>".$row['divname']."</option>";
                              }
                          ?>
                      </select>
                      <div class="invalid-feedback">
                        Username is required
                      </div>
                    </div>

                    <div class="form-group">
                      <?php  require_once('../config/database.php');
                        $sql = mysqli_query($connect, "SELECT * FROM section"); ?>
                      <select class="mdb-select md-form" searchable="Search here.." id="secsel" name="secsel" required>
                        <option value="" disabled>Choose section</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($sql))
                            {
                              echo "<option value='".$row['secid']."'>".$row['secname']."</option>";
                              }
                          ?>

                      </select>
                      <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>

                    <div class="form-group">
                      <?php  require_once('../config/database.php');
                        $sql = mysqli_query($connect, "SELECT * FROM position"); ?>
                      <select class="mdb-select md-form" searchable="Search here.." id="possel" name="possel" required>
                        <option value="" disabled selected>Choose position</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($sql))
                            {
                              echo "<option value='".$row['posid']."'>".$row['postitle']."</option>";
                              }
                          ?>
                      </select>
                      <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>



                    <div class="md-form">
                      <label for="username">Username</label>
                      <input type="text" name="username" class="form-control " id="username" required>
                      <div class="invalid-feedback">
                        Username is required
                      </div>
                    </div>

                    <div class="md-form">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="password" min="8" aria-describedby="ext" required>
                      <div class="invalid-feedback">
                        Password is required
                      </div>
                      <small id="ext-mute" class="form-text text-muted">

                        All new passwords must contain at least 8 characters.
                        We also suggest having at least one capital and one lower-case letter (Aa-Zz), one special symbol (#, &, % etc), and one number (0-9) in your password for the best strength.
                      </small>
                    </div>
                  </div>
                </div>

              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn aqua-gradient btn-rounded waves-effect waves-light">Save changes</button>
            <input type="hidden" name="action" id="action">
            <input type="hidden" name="id" id="id">
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="modal fade" id="modalview" name="modalview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="modalviewtitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="w-75 mx-auto">

              <div class="row">
                <div class="col-sm">
                  <div class="fileupload-wrapper">
                    <img src="" id="img_src" name="img_src" class="img-fluid z-depth-1 rounded-circle" alt="Responsive image">
                  </div>
                </div>

                <div class="col-sm">

                  <div class="md-form">
                    <label for="">Id</label>
                    <div class="">
                      <p class="text-justify"><span id="idview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Username</label>
                    <div class="">
                      <h3 class="text-justify"><span id="usernameview"></span></h3>
                    </div>
                  </div>

                  <div class="md-form">
                    <label for="">Fullname</label>
                    <div class="">
                      <p class="text-justify"><span id="surnameview"></span> , <span id="firstnameview"></span> <span id="middlenameview"></span> <span id="nameextview"></span></p>
                    </div>

                  </div>
                  <div class="md-form">
                    <label for="">Gender</label>
                    <div class="">
                      <p class="text-justify"><span id="genderview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Division</label>
                    <div class="">
                      <p class="text-justify"><span id="divisionview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Section</label>
                    <div class="">
                      <p class="text-justify"><span id="sectionview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Position</label>
                    <div class="">
                      <p class="text-justify"><span id="positionview"></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</section>
