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
              <th class="th-sm">Code Name
              </th>
              <th class="th-sm">System Fullname
              </th>
              <th class="th-sm">Description
              </th>
              <th class="th-sm">Created
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
                  <label for="codename">Code name</label>
                  <input type="text" name="codename" class="form-control" id="codename" required>
                  <div class="invalid-feedback">
                    Code name is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="sysname">System Fullname</label>
                  <input type="text" name="sysname" class="form-control " id="sysname" required>
                  <div class="invalid-feedback">
                    System Fullname is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="yrcreated">Year Created</label>
                  <input type="text" name="yrcreated" class="form-control" id="yrcreated" required>
                  <div class="invalid-feedback">
                    Year Created is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="sysdes">Description</label>
                  <textarea type="text" name="sysdes" class="form-control md-textarea" id="sysdes" required="required"></textarea>
                  <div class="invalid-feedback">
                    Description is required
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

</section>
