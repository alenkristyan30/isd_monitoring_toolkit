<section id="wrapper">
  <!-- style="background-image:url(../assets/images/background/intro-bg.jpeg);"-->
  <div class="login-register">
    <div class="login-box card">
      <div class="card-body">
        <form class="form-horizontal form-material" action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">
          <div class="text-center m-t-40">
            <img src="../assets/images/logo.png" class="w-25" alt="">
            <img src="../assets/images/centered-text.png" class="w-25" alt="">
          </div>
          <h3 class="box-title m-b-20">Sign In</h3>
          <span>
            <?php if(!empty($errors)) {?>
            <div class="alert alert-warning fade show error" role="alert">
              <?php foreach ($errors as $key => $value) {
                              echo $value;
                          } ?>
            </div>
            <?php } ?>
          </span>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" required placeholder="Username" id="username" name="username">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" type="password" required placeholder="Password" id="password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="d-flex no-block align-items-center">
              <div class="checkbox checkbox-primary p-t-0">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> Remember me </label>
              </div>
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
