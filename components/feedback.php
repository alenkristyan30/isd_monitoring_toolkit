<!--section class="mt-lg-5">
  <div style="height: 5px"></div>
  <div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>

  </div>
</section-->
<section class="mt-lg-5">
  <div class="text-left">
    <h3 class="pb-3"><strong>Ratings</strong></h3>
  </div>
</section>
<div class="card card-cascade narrower">

  <!--Section: Chart-->
  <section>

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-xl-5 col-lg-12 mr-0">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header blue-gradient">
          <h2 class="h2-responsive mb-0">Sales</h2>
        </div>
        <!--/Card image-->

        <!--Card content-->
        <div class="card-body card-body-cascade pb-0">

          <!--Panel data-->
          <div class="row card-body pt-3">

            <!--First column-->
            <div class="col-md-6">

              <!--Date select-->
              <p class="lead"><span class="badge info-color p-2">Data range</span></p>
              <select class="mdb-select colorful-select dropdown-info">
                <option value="" disabled selected>Choose time period</option>
                <option value="1">Today</option>
                <option value="2">Yesterday</option>
                <option value="3">Last 7 days</option>
                <option value="3">Last 30 days</option>
                <option value="3">Last week</option>
                <option value="3">Last month</option>
              </select>

              <!--Date pickers-->
              <p class="lead mt-5"><span class="badge info-color p-2">Custom date</span></p>
              <br>
              <div class="md-form">
                <input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
                <label for="date-picker-example">From</label>
              </div>
              <div class="md-form">
                <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
                <label for="date-picker-example">To</label>
              </div>

            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-6 text-center">

              <!--Summary-->
              <p>Total sales: <strong>2000$</strong>
                <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top" title="Total sales in the given period"><i class="fas fa-question"></i></button>
              </p>
              <p>Average sales: <strong>100$</strong>
                <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top" title="Average daily sales in the given period"><i class="fas fa-question"></i></button>
              </p>

              <!--Change chart-->
              <span class="min-chart my-4" id="chart-sales" data-percent="76"><span class="percent"></span></span>
              <h5>
                <span class="badge green p-2">Change <i class="fas fa-arrow-circle-up ml-1"></i></span>
                <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top" title="Percentage change compared to the same period in the past"><i class="fas fa-question"></i>
                </button>
              </h5>
            </div>
            <!--/Second column-->

          </div>
          <!--/Panel data-->

        </div>
        <!--/.Card content-->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-xl-7 col-lg-12 mb-4">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header indigo">

          <!-- Chart -->
          <canvas id="lineChart-main" height="175"></canvas>

        </div>
        <!--/Card image-->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </section>
</div>
  <section class="mt-5">
    <div class="table-responsive">
      <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
        <thead class="elegant-color white-text">
          <tr>
            <th class="th-sm">System Name
            </th>
            <th class="th-sm">Total
            </th>
            <th class="th-sm">Timestamp
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Financial Accounting Reporting System</td>
            <td class="w-50">
              <div class="progress mb-3">
                <div class="progress-bar red" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  25 %
                </div>
              </div>
            </td>
            <td>2018-12-13 13:59:10</td>
          </tr>
          <tr>
            <td>Environmental Law Enforcement Management Information</td>
            <td class="w-50">
              <div class="progress mb-3">
                <div class="progress-bar amber" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  50 %
                </div>
              </div>
            </td>
            <td>2018-12-13 13:59:10</td>
          </tr>
          <tr>
            <td>Accounting Tracking Reports Information System</td>
            <td class="w-50">
              <div class="progress mb-3">
                <div class="progress-bar blue" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  75 %
                </div>
              </div>
            </td>
            <td>2018-12-13 13:59:10</td>
          </tr>
          <tr>
            <td>Stakeholder Management Information System</td>
            <td class="w-50">
              <div class="progress mb-3">
                <div class="progress-bar green" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  80 %
                </div>
              </div>
            </td>
            <td>2018-12-13 13:59:10</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <section class="mt-lg-5">
    <div class="text-left">
      <h3 class="pb-3"><strong>Feedback</strong></h3>
    </div>
  </section>

  <section>
    <div class="table-responsive">
      <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
        <thead class="elegant-color white-text">
          <tr>
            <th class="th-sm">Fullname
            </th>
            <th class="th-sm">Fullname
            </th>
            <th class="th-sm">Comments
            </th>
            <th class="th-sm">Rating
            </th>
            <th class="th-sm">Timestamp
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Jorolan , Jethro Talavera
            </th>
            <th>Financial Accounting Reporting System
            </th>
            <th>
              <span class="d-inline-block text-justify" style="width: 500px">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </span>
            </th>
            <th>
              <h4><span class="badge red ">VERY POOR</span></h4>
            </th>
            <th>2018-12-13 13:59:10
            </th>
          </tr>

          <tr>
            <th>Jorolan , Jethro Talavera
            </th>
            <th>Financial Accounting Reporting System
            </th>
            <th>
              <span class="d-inline-block text-justify" style="width: 500px">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </span>
            </th>
            <th>
              <h4><span class="badge orange ">POOR</span></h4>
            </th>
            <th>2018-12-13 13:59:10
            </th>
          </tr>

          <tr>
            <th>Jorolan , Jethro Talavera
            </th>
            <th>Financial Accounting Reporting System
            </th>
            <th>
              <span class="d-inline-block text-justify" style="width: 500px">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </span>
            </th>
            <th>
              <h4><span class="badge amber ">Average</span></h4>
            </th>
            <th>2018-12-13 13:59:10
            </th>
          </tr>

          <tr>
            <th>Jorolan , Jethro Talavera
            </th>
            <th>Financial Accounting Reporting System
            </th>
            <th>
              <span class="d-inline-block text-justify" style="width: 500px">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </span>
            </th>
            <th>
              <h4><span class="badge blue ">Good</span></h4>
            </th>
            <th>2018-12-13 13:59:10
            </th>
          </tr>
          <tr>
            <th>Jorolan , Jethro Talavera
            </th>
            <th>Financial Accounting Reporting System
            </th>
            <th>
              <span class="d-inline-block text-justify" style="width: 500px">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </span>
            </th>
            <th>
              <h4><span class="badge green ">Excellent</span></h4>
            </th>
            <th>2018-12-13 13:59:10
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
