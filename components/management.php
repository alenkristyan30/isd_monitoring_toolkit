<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Admin Management</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Administration</li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin Management</a></li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-primary" alt="default" data-toggle="modal" data-target="#myModal" name="button">ADD Admin</button>
            <div class="table-responsive m-t-40">
              <table id="myTable" class="table table-striped">
                <thead>
                  <tr>
                    <th>ID
                    </th>
                    <th>USERNAME
                    </th>
                    <th>FIRSTNAME
                    </th>
                    <th>MIDDLENAME
                    </th>
                    <th>SURNAME
                    </th>
                    <th>GENDER
                    </th>
                    <th>SERVICE LENGTH
                    </th>
                    <th>TYPE
                    </th>
                    <th>OFFICE
                    </th>
                    <th>DIVISION
                    </th>
                    <th>SECTION
                    </th>
                    <th>POSITION
                    </th>
                    <th>UNIT
                    </th>
                    <th colspan="50%">ACTION
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
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">

        <form class="form-material form-horizontal" novalidate>
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Personal Information</h4>
              <h6 class="card-subtitle"></h6>
              <div class="form-group row m-t-40">
                <label for="firstname" class="col-sm-3 text-right control-label col-form-label" id="">Firstname <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">MIddlename</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Middlename">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Surname</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Surname">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                <div class="col-sm-9">
                  <input name="group1" type="radio" id="radio_1">
                  <label for="radio_1">Female</label>
                  <input name="group1" type="radio" id="radio_2">
                  <label for="radio_2">Male</label>

                </div>
              </div>
              <div class="form-group row">
                <label for="example-month-input" class="col-sm-3 text-right control-label col-form-label">Length of Service</label>
                <div class="col-sm-9">
                  <input class="form-control" type="month" value="2011-08" id="example-month-input">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <h4 class="card-title">Account</h4>
              <h6 class="card-subtitle"></h6>
              <div class="form-group row m-t-40">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Firstname">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputEmail3" placeholder="Password">
                </div>
              </div>
            </div>

            <div class="col-md-6 m-t-40">
              <h4 class="card-title">Department</h4>
              <h6 class="card-subtitle"></h6>
              <div class="form-group row m-t-40">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Office</label>
                <div class="col-sm-9">
                  <select class="form-control" id="inputEmail3" placeholder="Username">
                    <option value="">null</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Division</label>
                <div class="col-sm-9">
                  <select class="form-control" id="inputEmail3" placeholder="Username">
                    <option value="">null</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Section</label>
                <div class="col-sm-9">
                  <select class="form-control" id="inputEmail3" placeholder="Username">
                    <option value="">null</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Unit</label>
                <div class="col-sm-9">
                  <select class="form-control" id="inputEmail3" placeholder="Username">
                    <option value="">null</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Position</label>
                <div class="col-sm-9">
                  <select class="form-control" id="inputEmail3" placeholder="Username">
                    <option value="">null</option>
                  </select>
                </div>
              </div>

            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-inverse">Cancel</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
