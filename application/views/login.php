<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logincss/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logincss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logincss/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logincss/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logincss/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="logincss/css/util.css">
  <link rel="stylesheet" type="text/css" href="logincss/css/main.css">
  <!--===============================================================================================-->
</head>

<body>
  <?= $this->session->flashdata('message'); ?>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="post" action="<?= base_url('login') ?>">
          <span class="login100-form-title">
            Login
          </span>

          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" id="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Belum punya akun ?
            </span>
            <a class="txt2" href="<?= base_url('register') ?>">
              Buat disini
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>




  <!--===============================================================================================-->
  <script src="logincss/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="logincss/vendor/bootstrap/js/popper.js"></script>
  <script src="logincss/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="logincss/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="logincss/vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <!--===============================================================================================-->
  <script src="logincss/js/main.js"></script>

</body>

</html>