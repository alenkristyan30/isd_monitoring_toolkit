<ol class="breadcrumb pull-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
</ol>

<h1 class="page-header">Section</h1>
<div class="row">
  <div class="col-lg-2">
    <p class="m-b-20">
      <a href="#myModal" class="btn btn-sm btn-primary" data-toggle="modal" id="btnadd">Add Section</a>
    </p>
  </div>
</div>


<div class="row">
  <div class="col-lg-12 ui-sortable">
    <div class="panel panel-inverse">

      <div class="panel-heading">
        <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
        <h4 class="panel-title">Section</h4>
      </div>

      <div class="panel-body table-responsive">
        <table id="myreport" class="table w-100">
          <thead>
            <tr>
              <th>ID</th>
              <th>USER NAME</th>
              <th>SYSTEM NAME</th>
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


<section>
  <div class="modal modal-message fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Message Header</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form onsubmit="return validate()" id="vform" name="vform" method="POST">

          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">

                <h4 class="card-title">Report Information</h4>
                <h6 class="card-subtitle"></h6>
                <div class="form-group row m-b-15" id="reportidform">
                  <label for="reportidtxt" class="col-sm-3 text-left col-form-label">Report ID</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control numeric" id="reportidtxt" name="reportidtxt" placeholder="Report ID" required>
                  </div>
                </div>
                <div class="form-group row m-b-15" id="reportnameform">
                  <label for="reportnametxt" class="col-sm-3 text-left col-form-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control alphabetic" id="reportnametxt" name="reportnametxt" placeholder="Name" required>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportsystemform">
                  <label for="reportsystemtxt" class="col-sm-3 text-left col-form-label">System Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control alphabetic" id="reportsystemtxt" name="reportsystemtxt" placeholder="Report Category" required>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportstatusform">
                  <label for="reportstatustxt" class="col-sm-3 text-left col-form-label">Status</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control alphabetic" id="reportstatustxt" name="reportstatustxt" placeholder="Status" required>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportdateform">
                  <label for="reportdatetxt" class="col-sm-3 text-left col-form-label">Report Date</label>
                  <div class="col-sm-8">
                    <input type="datetime-local" class="form-control alphabetic" id="reportdatetxt" name="reportdatetxt" placeholder="Report Date" required>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportcommentform">
                  <label for="reportcommenttxt" class="col-sm-3 text-left col-form-label">Comment</label>
                  <div class="col-sm-8">
                    <textarea type="text" class="form-control alphabetic" id="reportcommenttxt" name="reportcommenttxt" rows="3" placeholder="Comment" required></textarea>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportimgform">
                  <label for="reportimgtxt" class="col-sm-3 text-left col-form-label">Image</label>
                  <div class="col-sm-8">
                    <div class="media media-lg w-auto">
                      <a class="media-left" href="javascript:;">
                        <img src="https://seantheme.com/color-admin-v4.2/admin/assets/img/gallery/gallery-1.jpg" alt="" class="media-object">
                      </a>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-6">

                <div class="form-group row m-b-15" id="reportcategoryform">
                  <label for="reportcategorytxt" class="col-sm-3 text-left col-form-label">Category</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control alphabetic" id="reportcategorytxt" name="reportcategorytxt" placeholder="Report Category" required></select>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportpriorityform">
                  <label for="reportprioritytxt" class="col-sm-3 text-left col-form-label">Priority</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control alphabetic" id="reportprioritytxt" name="reportprioritytxt" placeholder="Priority" required></select>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportseverityform">
                  <label for="reportseveritytxt" class="col-sm-3 text-left col-form-label">Severity</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control alphabetic" id="reportseveritytxt" name="reportseveritytxt" placeholder="Severity" required></select>
                  </div>
                </div>

                <div class="form-group row m-b-15" id="reportassignmentform">
                  <label for="reportassignmenttxt" class="col-sm-3 text-left col-form-label">Assignment to</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control alphabetic" id="reportassignmenttxt" name="reportassignmenttxt" placeholder="Assignment to" required></select>
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
