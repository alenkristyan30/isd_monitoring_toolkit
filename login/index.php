<?php include('../layout/header.php'); ?>
<body class="white">
  <div class="d-flex justify-content-center mt-5">
    <div class="card z-depth-0 col-md-5 col-md-offset-3">
      <div class="card-body">
        <div class="text-center mb-5">
          <img src="../dist/img/logo.png" class="w-25 mx-auto"></img>
        </div>
        <p class="card-subtitle text-center text-black-50 mb-5">Welcome back! Please login to your account.</p>

        <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation" novalidate="novalidate">
          <div id="alert" role="alert"></div>
          <div class="md-form">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control " id="username" value="" required="required">
            <div class="invalid-feedback">
              Username is required
            </div>
          </div>
          <div class="md-form">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control " id="password" value="" required="required">
            <div class="invalid-feedback">
              Password is required
            </div>
          </div>
          <div class="mt-5">
            <button class="btn aqua-gradient btn-rounded waves-effect waves-light z-depth-0" type="submit">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="text-center py-1 fixed-bottom mb-5">© 2018 Copyright
  </div>

  <?php include('../layout/footer.php'); ?>
  <script>
    function Validate() {
      var form = $('#vform').serialize();
      $.ajax({
        url: 'login.php',
        method: 'POST',
        data: form,
        success: function (data) {
          if (data == 'Success') {
            $('#alert').removeClass('alert alert-success');
            $('#alert').html('');
            window.location = '../dashboard';
          } else {
            $('#alert').addClass('alert alert-danger alert-dismissible fade show');
            $('#alert').html('Invalid Username or Password<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
          }
        }
      });
      return false
    }
  </script>
  <script>
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
