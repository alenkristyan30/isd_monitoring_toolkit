<section>
  <div class="text-left">
    <h3>Accounts</h3>
    <hr>
  </div>

  <section>
    <div class="card mb-5 col-md-6">
      <div class="card-body table-responsive">
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">Account Id
              </th>
              <th class="th-sm">Username
              </th>
              <th class="th-sm">Type
              </th>
              <th class="th-sm">Registered Date
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
                <div class="row">
                  <div class="col-sm">
                    <div class="md-form">
                      <label for="divname">Position Title</label>
                      <input type="text" name="postitle" class="form-control" id="postitle" required="required">
                      <div class="invalid-feedback">
                        Position Title is required
                      </div>
                    </div>
                  </div>
                  <div class="col-sm ">

                    <div class="md-form">
                      <label for="divname">Description</label>
                      <textarea type="text" name="posdes" class="form-control md-textarea" id="posdes" required="required"></textarea>
                      <div class="invalid-feedback">
                      Description is required
                      </div>
                    </div>
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
