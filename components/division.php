<section>
  <section>
    <div class="row">
      <div class="col">
        <div class="mb-3" align="left">
          <button type="button" class="btn default-color" id="add" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fal fa-plus pr-1"></i>ADD
          </button>
        </div>
      </div>
      <div class="col">
        <div class="mb-3" align="right">
          <button type="button" class="btn primary-color">
            <i class="fal fa-list"></i>
          </button>
          <button type="button" class="btn secondary-color">
            <i class="fal fa-grip-horizontal"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="card mb-5 ">
      <div class="card-body table-responsive">
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">Division Id
              </th>
              <th class="th-sm">Full Division Name
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
            <h5 class="modal-title w-100" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation">

              <div class="w-75 mx-auto">

                <div class="md-form">
                  <label for="divid">Division Id</label>
                  <input type="text" name="divid" class="form-control" id="divid" required="required">
                  <div class="invalid-feedback">
                    Division Id is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="divname">Full Division Name</label>
                  <textarea type="text" name="divname" class="form-control md-textarea" id="divname" required="required"></textarea>
                  <div class="invalid-feedback">
                    Full Division Name is required
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-rounded red" data-dismiss="modal">Close</button>
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
