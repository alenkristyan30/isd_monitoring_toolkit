<?php include("../config/validation.php");?>
<?php include('../layout/header.php'); ?>
<style>
  .intro-2 {
           background: url("../dist/img/intro-bg.jpeg")no-repeat center center;
           background-size: cover;
       }
       h6 {
           line-height: 1.7;
       }

       html,
       body,
       header,
       .view {
         height: 100%;
       }

       @media (min-width: 560px) and (max-width: 740px) {
         html,
         body,
         header,
         .view {
           height: 650px;
         }
       }

       @media (min-width: 800px) and (max-width: 850px) {
         html,
         body,
         header,
         .view  {
           height: 650px;
         }
       }

       .card {
           margin-top: 30px;
           /*margin-bottom: -45px;*/

       }
   </style>

<body>
  <section class="view intro-2">
    <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto">
            <div class="card wow fadeIn p-5" data-wow-delay="0.3s">
              <div class="card-body">
                <div class="text-center mb-5">
                  <img src="../dist/img/logo.png" class="w-25 mx-auto"></img>
                </div>
                <p class="card-subtitle text-center text-black-50 mb-5">Welcome back! Please login to your account.</p>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="text-center needs-validation" novalidate="novalidate">
                  <div id="alert" role="alert"></div>
                  <span>
                    <?php if(!empty($errors)) {?>
                    <div class="alert alert-warning fade show error" role="alert">
                      <?php foreach ($errors as $key => $value) {
                                      echo $value;
                                  } ?>
                    </div>
                    <?php } ?>
                  </span>
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
                    <button class="btn aqua-gradient waves-effect waves-light z-depth-0" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('../layout/footer.php'); ?>
  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
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
