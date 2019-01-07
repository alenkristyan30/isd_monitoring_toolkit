<section class="mt-lg-5">
  <div class="text-left">
    <h3 class="pb-3"><strong>Reports</strong></h3>
  </div>

  <section>
      <div class="table-responsive col-md-12">
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
          <thead class="elegant-color white-text">
            <tr>
              <th class="th-sm">id
              </th>
              <th class="th-sm">Username
              </th>
              <th class="th-sm">System
              </th>
              <th class="th-sm">Status
              </th>
              <th class="th-sm">Category
              </th>
              <th class="th-sm">Comment
              </th>
              <th class="th-sm">Image
              </th>
              <th class="th-sm">Timestamp
              </th>
              <th class="th-sm">Action
              </th>
            </tr>
          </thead>
        </table>
      </div>
  </section>

  <section>
    <div class="modal fade" id="exampleModalCenter" name="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="modaltitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation" novalidate>

              <div class="w-75 mx-auto">

                <div class="row">
                  <div class="col-sm">

                    <div class="md-form">
                      <label for="">Report Id</label>
                      <div class="">
                        <h3 class="text-left"><span id="reportidassign"></span></h3>
                      </div>
                    </div>

                    <div class="md-form">
                      <label for="">Username</label>
                      <div class="">
                        <p class="text-left"><span id="usernameassign"></span></p>
                      </div>

                    </div>
                    <div class="md-form">
                      <label for="">System Name</label>
                      <div class="">
                        <p class="text-left"><span id="systemassign"></span></p>
                      </div>
                    </div>
                    <div class="md-form">
                      <label for="">Category</label>
                      <div class="">
                        <p class="text-left"><span id="categoryassign"></span></p>
                      </div>
                    </div>
                    <div class="md-form">
                      <label for="">Status</label>
                      <div class="">
                        <p class="text-left"><span id="statusassign"></span></p>
                      </div>
                    </div>
                    <div class="md-form">
                      <label for="">Date</label>
                      <div class="">
                        <p class="text-left"><span id="timestamnpassign"></span></p>
                      </div>
                    </div>
                    <div class="md-form">
                      <label for="">Comment</label>
                      <div class="">
                        <p class="text-left"><span id="commentassign"></span></p>
                      </div>
                    </div>

                  </div>

                  <div class="col-sm">

                    <?php  require_once('../config/database.php');
                      $sql = mysqli_query($connect, "SELECT useracc.id , sname , fname , mname FROM useracc INNER JOIN userinfo ON userinfo.id = useracc.id WHERE useracc.type = 2"); ?>
                    <select class="mdb-select md-form" searchable="Search here.." id="divsel" name="divsel" required>
                      <option value="" disabled selected>Choose Person to Assign</option>
                      <?php
                          while ($row = mysqli_fetch_assoc($sql))
                          {
                            echo "<option value='".$row['id']."'>".$row['sname']." , ".$row['fname']." ".$row['mname']."</option>";
                            }
                        ?>
                    </select>



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

  <section>
    <div class="modal fade" id="modalview" name="modalview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="modalviewtitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="w-75 mx-auto">

              <div class="row">
                <div class="col-sm">
                  <div class="fileupload-wrapper">
                    <img src="" id="img_src" name="img_src" class="img-fluid z-depth-1 " alt="Responsive image">
                  </div>
                </div>

                <div class="col-sm">

                  <div class="md-form">
                    <label for="">Report Id</label>
                    <div class="">
                      <h3 class="text-left"><span id="reportidview"></span></h3>
                    </div>
                  </div>

                  <div class="md-form">
                    <label for="">Username</label>
                    <div class="">
                      <p class="text-left"><span id="usernameview"></span></p>
                    </div>

                  </div>
                  <div class="md-form">
                    <label for="">System Name</label>
                    <div class="">
                      <p class="text-left"><span id="systemview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Category</label>
                    <div class="">
                      <p class="text-left"><span id="categoryview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Status</label>
                    <div class="">
                      <p class="text-left"><span id="statusview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Date</label>
                    <div class="">
                      <p class="text-left"><span id="timestamnpview"></span></p>
                    </div>
                  </div>
                  <div class="md-form">
                    <label for="">Comment</label>
                    <div class="">
                      <p class="text-left"><span id="commentview"></span></p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</section>
