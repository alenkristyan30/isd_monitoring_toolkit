<section>
  <div class="text-left">
    <h3 class="pb-3">Section</h3>
  </div>
  <section>
    <div class="row">
      <div class="col">
        <div class="mb-3" align="left">
          <button type="button" class="btn default-color" id="add" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fal fa-plus pr-1"></i>ADD
          </button>
        </div>
      </div>
      <!--div class="col">
        <div class="mb-3" align="right">
          <button type="button" class="btn primary-color">
            <i class="fal fa-list"></i>
          </button>
          <button type="button" class="btn secondary-color">
            <i class="fal fa-grip-horizontal"></i>
          </button>
        </div>
      </div-->
    </div>
  </section>

  <section>
    <div class="card mb-5">
      <div class="card-body table-responsive">
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
          <thead class="elegant-color white-text">
            <tr>
              <th class="th-sm">Name
              </th>
              <th class="th-sm">Division
              </th>
              <th class="th-sm">Description
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
                <div class="row">
                  <div class="col-sm">

                    <div class="md-form">
                      <label for="divname">Section Name</label>
                      <input type="text" name="secname" class="form-control" id="secname" required="required">
                      <div class="invalid-feedback">
                        Section Name is required
                      </div>
                    </div>
                    <?php  require_once('../config/database.php');
                      $sql = mysqli_query($connect, "SELECT * FROM division"); ?>
                    <select class="mdb-select md-form" searchable="Search here.." id="divsel" name="divsel" required>
                        <option value="" disabled selected>Division</option>
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['divid']."'>".$row['divname']."</option>";
                            }
                        ?>
                    </select>


                  </div>
                  <div class="col-sm ">
                    <div class="md-form">
                      <label for="divname">Description</label>
                      <textarea type="text" name="secdes" class="form-control" id="secdes" placeholder="..." required="required" style="height: 100px"></textarea>
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
