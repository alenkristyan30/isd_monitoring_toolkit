<section>

  <section class="section pb-3 text-center">
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card testimonial-card">
          <div class="card-up teal lighten-2">
          </div>
          <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
          </div>
          <div class="card-body">
            <h4 class="card-title mt-1">John Doe</h4>
            <hr>
            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
              adipisci.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card testimonial-card">
          <div class="card-up blue lighten-2">
          </div>
          <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
          </div>
          <div class="card-body">
            <h4 class="card-title mt-1">Anna Aston</h4>
            <hr>
            <p><i class="fa fa-quote-left"></i> Neque cupiditate assumenda in maiores repudiandae mollitia
              architecto.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card testimonial-card">
          <div class="card-up deep-purple lighten-2"></div>
          <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid">
          </div>
          <div class="card-body">
            <h4 class="card-title mt-1">Maria Kate</h4>
            <hr>
            <p><i class="fa fa-quote-left"></i> Delectus impedit saepe officiis ab aliquam repellat, rem totam
              unde ducimus.</p>
          </div>
        </div>
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
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation">

              <div class="w-75 mx-auto">

                <div class="row">
                  <div class="col-sm">
                    <div class="fileupload-wrapper">
                      <input type="file" id="image_file" name="image_file" class="mdb_upload" />
                    </div>

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

                    <div class="md-form">
                      <label for="middlename">Middle name</label>
                      <input type="text" name="middlename" class="form-control " id="middlename" required>
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
                      <div class="form-row">
                        <label for="username" style="color : #757575">Gender</label>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="female" name="gender" value="Female" required>
                          <label class="form-check-label" for="female">Female</label>
                        </div>

                        <!-- Group of material radios - option 2 -->
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                          <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="invalid-feedback">
                          You must to select before submitting.
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm">

                    <?php  require_once('../config/database.php');
                      $sql = mysqli_query($connect, "SELECT * FROM division"); ?>
                    <select class="mdb-select md-form" searchable="Search here.." id="divsel" name="divsel" required>
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['id']."'>".$row['divname']."</option>";
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
                      <input type="password" name="password" class="form-control" id="password" min="8" aria-describedby="ext">
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
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation" enctype="multipart/form-data">

              <div class="w-75 mx-auto">

                <div class="row">
                  <div class="col-sm">
                    <div class="fileupload-wrapper">
                      <input type="file" id="image_file" class="mdb_upload" />
                    </div>

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

                    <div class="md-form">
                      <label for="middlename">Middle name</label>
                      <input type="text" name="middlename" class="form-control " id="middlename" required>
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
                      <div class="form-row">
                        <label for="username" style="color : #757575">Gender</label>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="female" name="gender" value="Female" required>
                          <label class="form-check-label" for="female">Female</label>
                        </div>

                        <!-- Group of material radios - option 2 -->
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                          <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="invalid-feedback">
                          You must to select before submitting.
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm">
                    <?php  require_once('../config/database.php');
                      $sql = mysqli_query($connect, "SELECT * FROM division"); ?>
                    <select class="mdb-select md-form" searchable="Search here.." id="divsel" name="divsel" required>
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['id']."'>".$row['divname']."</option>";
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
                      <input type="password" name="password" class="form-control" id="password" minlength="8" aria-describedby="ext" required>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</section>
