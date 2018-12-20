<?php include('../layout/header.php'); ?>
<style>

  .intro-2 {
           background: url("../dist/img/intro-bg.jpeg")no-repeat center center;
           background-size: cover;
       }
       /**
       .card {
           background-color: rgba(229, 228, 255, 0.2);
       }
       .md-form label {
           color: #ffffff;
       }**/
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
       /**
       .md-form input[type=text]:focus:not([readonly]),
       .md-form input[type=password]:focus:not([readonly]) {
           border-bottom: 1px solid #8EDEF8;
           box-shadow: 0 1px 0 0 #8EDEF8;
       }
       .md-form input[type=text]:focus:not([readonly])+label,
       .md-form input[type=password]:focus:not([readonly])+label {
           color: #8EDEF8;
       }

       .md-form .form-control {
           color: #fff;
       }
        **/

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
                    <button class="btn aqua-gradient waves-effect waves-light z-depth-0" type="submit">NEXT</button>
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
    function Validate() {
      var form = $('#vform').serialize();
      $.ajax({
        url: 'login.php',
        method: 'POST',
        data: form,
        success: function(data) {
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
