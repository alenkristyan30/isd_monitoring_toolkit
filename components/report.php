<section>
  <div class="text-left">
    <h3>Report</h3>
    <hr>
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
    <div class="card mb-5 ">
      <div class="card-body table-responsive">
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">id
              </th>
              <th class="th-sm">Username
              </th>
              <th class="th-sm">System
              </th>
              <th class="th-sm">Status
              </th>
              <th class="th-sm">Category
              </th>
              <th class="th-sm">Comment
              </th>
              <th class="th-sm">Image
              </th>
              <th class="th-sm">Timestamp
              </th>
              <th class="th-sm">Action
              </th>
            </tr>
          </thead>
        </table>
      </div>
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

                    <div class="md-form">
                      <label for="surname">Surname</label>
                      <input type="text" name="surname" class="form-control " id="surname" required>
                      <div class="invalid-feedback">
                        Surname is required
                      </div>
                    </div>

                    <div class="md-form">
                      <label for="firstname">First name</label>
                      <input type="text" name="firstname" class="form-control " id="firstname" required>
                      <div class="invalid-feedback">
                        Firstname is required
                      </div>
                    </div>

                  </div>

                  <div class="col-sm">

                    <?php  require_once('../config/database.php');
                      $sql = mysqli_query($connect, "SELECT * FROM infosys"); ?>
                    <select class="mdb-select md-form" searchable="Search here.." id="divsel" name="divsel" required>
                        <option value="" disabled selected>Choose division</option>
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['sysid']."'>".$row['code_name']."</option>";
                            }
                        ?>
                    </select>

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


                    <div class="md-form">
                      <label for="username">Username</label>
                      <input type="text" name="username" class="form-control " id="username" required>
                      <div class="invalid-feedback">
                        Username is required
                      </div>
                    </div>

                    <div class="md-form">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="password" min="8" aria-describedby="ext"  required>
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
                    <img src="" id="img_src" name="img_src" class="img-fluid z-depth-1 " alt="Responsive image">
                  </div>
                </div>

                <div class="col-sm">

                  <div class="md-form">
                    <label for="">Report Id</label>
                    <div class="">
                      <h3 class="text-justify"><span id="reportidview"></span></h3>
                    </div>
                  </div>

                  <div class="md-form">
                    <label for="">Username</label>
                    <div class="">
                      <p class="text-justify"><span id="usernameview"></span></p>
                    </div>

                  </div>
                  <div class="md-form">
                    <label for="">System Name</label>
                    <div class="">
                      <p class="text-justify"><span id="systemview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Category</label>
                    <div class="">
                      <p class="text-justify"><span id="categoryview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Status</label>
                    <div class="">
                      <p class="text-justify"><span id="statusview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Date</label>
                    <div class="">
                      <p class="text-justify"><span id="timestamnpview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Comment</label>
                    <div class="">
                      <p class="text-justify"><span id="commentview"></span></p>
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
