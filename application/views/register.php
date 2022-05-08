<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Admin</title>
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
    <?= $this->session->flashdata('mesage'); ?>
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="logincss/koperasi.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post" action="<?= base_url('register') ?>">
                <span class="login100-form-title">
                    Register
                </span>
                <div class="wrap-input100 validate-input" data-validate="Nama lengkap belum terpenuhi">
                    <input class="input100" type="name" id="name" name="name" placeholder="Masukan Nama" value="<?= set_value('name') ?>">
                    <span class=" focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="email tidak valid harus berisi abc@gmail.com">
                    <input class="input100" type="text" id="email" name="email" placeholder="Masukan Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    <?= form_error('email', '<small class ="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="password belum isi">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                    <?= form_error('password', '<small class ="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-30">
                    <a class="txt2" href="<?= base_url('login') ?>">
                        Login ?
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
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