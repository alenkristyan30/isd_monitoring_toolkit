 <section>
  <section>
    <div class="mb-3" align="right">
      <button type="button" class="btn btn-warning btn-floating" id="add" data-toggle="modal" data-target="#exampleModalCenter">
        <i class="fal fa-plus"></i>
      </button>
      <button type="button" class="btn btn-floating btn-danger">
        <i class="fal fa-list"></i>
      </button>
      <button type="button" class="btn btn-info btn-floating">
        <i class="fal fa-grip-horizontal"></i>
      </button>
    </div>
  </section>

  <section>
    <div class="card mb-5 ">
      <div class="card-body table-responsive">
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">Surname
              </th>
              <th class="th-sm">Firstname
              </th>
              <th class="th-sm">Middlename
              </th>
              <th class="th-sm">Name extension
              </th>
              <th class="th-sm">Username
              </th>
              <th class="th-sm">Password
              </th>
              <th class="th-sm">Gender
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
    <div class="modal fade right" id="exampleModalCenter" name="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-full-height modal-right modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation">

              <div class="w-75 mx-auto">

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
                  <input type="text" name="nameext" class="form-control" id="nameext" aria-describedby="ext" >
                  <small id="ext-mute" class="form-text text-muted">
                    Input N/A if the user doesn't have
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

                <div class="md-form">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control " id="username" required>
                  <div class="invalid-feedback">
                    Username is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" aria-describedby="ext" >
                  <small id="ext-mute" class="form-text text-muted">

All new passwords must contain at least 8 characters.
We also suggest having at least one capital and one lower-case letter (Aa-Zz), one special symbol (#, &, % etc), and one number (0-9) in your password for the best strength.
                  </small>
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

</section>
