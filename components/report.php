<div class="page-wrapper">
  <div class="container-fluid">
    <section>
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor m-b-0 m-t-0">Overall System Report</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Report</li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Overall System Report</a></li>
          </ol>
        </div>
      </div>
    </section>

    <section>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic Table</h4>
              <h6 class="card-subtitle">Add class <code>.table</code></h6>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                      <th>Role</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Deshmukh</td>
                      <td>Prohaska</td>
                      <td>@Genelia</td>
                      <td><span class="label label-danger">admin</span> </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive m-t-40 col-12">
              <table id="myTable" class="table table-striped w-100">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>SYSTEM NAME</th>
                    <th>USAGEROLES</th>
                    <th>REPORT CATEGORY</th>
                    <th>PRIORITY</th>
                    <th>SEVERITY</th>
                    <th>STATUS</th>
                    <th>REPORTED DATE</th>
                    <th>FIXED DATE</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>




  </div>
</div>


<section>
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal form-control-line" id="vform" onsubmit="return validate()" method="POST" novalidate>
            <div class="row">
              <div class="col-md-6">

                <h4 class="card-title">infosystem Information</h4>
                <h6 class="card-subtitle"></h6>
                <div class="form-group row" id="infosystemnameform">
                  <label for="infosystemnametxt" class="col-sm-3 text-left control-label col-form-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control alphabetic" id="infosystemnametxt" name="infosystemnametxt" placeholder="Name" required>
                  </div>
                </div>
                <div class="form-group row" id="infosystemabbreviationform">
                  <label for="infosystemabbreviationtxt" class="col-sm-3 text-left control-label col-form-label">Abbreviation</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control alphabetic" id="infosystemabbreviationtxt" name="infosystemabbreviationtxt" placeholder="Abbreviation" required>
                  </div>
                </div>
                <div class="form-group row" id="infosystemdeveloperform">
                  <label for="infosystemdevelopertxt" class="col-sm-3 text-left control-label col-form-label">Developer</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control alphabetic" id="infosystemdevelopertxt" name="infosystemdevelopertxt" placeholder="Developer" required>
                  </div>
                </div>
                <div class="form-group row" id="infosystemdatecreatedform">
                  <label for="infosystemdatecreatedtxt" class="col-sm-3 text-left control-label col-form-label">Date Created</label>
                  <div class="col-sm-8">
                    <input type="month" class="form-control alphabetic" id="infosystemdatecreatedtxt" name="infosystemdatecreatedtxt" placeholder="Date Created" required>
                  </div>
                </div>


              </div>
              <div class="col-md-6">
                <div class="form-group row" id="infosystemtypeform">
                  <label for="infosystemtypetxt" class="col-sm-3 text-left control-label col-form-label">Development Type</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control numeric" id="infosystemtypetxt" name="infosystemtypetxt" placeholder="Development Type" required>
                  </div>
                </div>
                <div class="form-group row" id="infosystemrolesform">
                  <label for="infosystemrolestxt" class="col-sm-3 text-left control-label col-form-label">Usage Roles</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control numeric" id="infosystemrolestxt" name="infosystemrolestxt" placeholder="Usage Roles" required>
                  </div>
                </div>
              </div>
            </div>

        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
          <input type="hidden" name="action" id="action">
          <input type="hidden" name="id" id="id">
        </div>
        </form>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</section>
