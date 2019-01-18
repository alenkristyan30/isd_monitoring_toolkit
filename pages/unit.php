<ol class="breadcrumb pull-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
</ol>

<h1 class="page-header">Unit</h1>

<div class="row">
  <div class="col-lg-2">
    <p class="m-b-20">
      <a href="#myModal" class="btn btn-sm btn-primary" data-toggle="modal" id="btnadd">Add Unit</a>
    </p>
  </div>
</div>

<div class="row">



  <div class="col-lg-6 ui-sortable">
    <div class="panel panel-inverse">

      <div class="panel-heading">
        <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
        <h4 class="panel-title">Unit</h4>
      </div>

      <div class="panel-body table-responsive">
        <table id="myunit" class="table w-100">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>TYPE</th>
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
                <h4 class="card-title">Office Information</h4>
                <h6 class="card-subtitle"></h6>

                <div class="form-group row m-b-15" id="unitnameform">
                  <label for="unitnametxt" class="col-sm-3 text-left control-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="unitnametxt" name="unitnametxt" placeholder="Name" required>
                  </div>
                </div>
                <div class="form-group row m-b-15" id="unittypeform">
                  <label for="unittypetxt" class="col-sm-3 text-left control-label">Type</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="unittypetxt" name="unittypetxt" placeholder="Type" required>
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
