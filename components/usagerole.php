<div class="page-wrapper">
  <div class="container-fluid">
    <section>
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor m-b-0 m-t-0">Division</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Department</li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Division</a></li>
          </ol>
        </div>
      </div>
    </section>


    <section>
      <div class="row">
        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-primary" alt="default" data-toggle="modal" data-target="#myModal" name="btnadd" id="btnadd">ADD DIVISION</button>
            <div class="table-responsive m-t-40 col-12">
              <table id="myTable" class="table table-striped w-100">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>OFFICE</th>
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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal form-control-line" id="vform" onsubmit="return validate()" method="POST" novalidate>

            <h4 class="card-title">Division Information</h4>
            <h6 class="card-subtitle"></h6>
            <div class="form-group row" id="divisionnameform">
              <label for="divisionnametxt" class="col-sm-3 text-left control-label col-form-label">Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="divisionnametxt" name="divisionnametxt" placeholder="Name" required>
              </div>
            </div>
            <div class="form-group row" id="divisiontypeform">
              <label for="divisionofficetxt" class="col-sm-3 text-left control-label col-form-label">Office</label>
              <div class="col-sm-8">
                <?php  require_once('../config/database.php');
                  $sql = mysqli_query($connect, "SELECT * FROM tbloffice"); ?>
                <select class="form-control" id="divisionofficetxt" name="divisionofficetxt" placeholder="Office" required>
                  <?php
                      while ($row = mysqli_fetch_assoc($sql))
                      {
                        echo "<option value='".$row['officeID']."'>".$row['officeNAME']."</option>";
                        }
                    ?>
                  </select>
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