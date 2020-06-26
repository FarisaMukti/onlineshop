<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMventure | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo/dudu.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form2.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style1.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
        <img src="<?php echo base_url(); ?>assets/foto/2048.jpg" alt="gambar" class="bg" />
        <div class="content">
        <div class="wrapper-pro">
        <div class="content-inner-all">
            <!-- login Start-->

            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-form" class="adminpro-form" action="<?php echo base_url(); ?>index.php/login/act_login" method="post">
                        <?php 
                            $notif = $this->session->flashdata('notif');
                            if (!empty($notif)) {
                                echo '<div class="alert alert-danger">'.$notif.'</div>';
                          		  }
                        ?>
                            <div class="col-lg-4">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo/dudu.png" alt="" /></a>
                                                <div class="login-title">
                                                <h1>LOGIN</h1>
                                                </div>
                                            </div>
                                            <div class="row">
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="username" placeholder="Username">
                                                <i  aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <!-- Password field -->
                                            <input type="password" name="password" placeholder="Password" value="" id="myInput">
                                            <!-- An element to toggle between password visibility -->
                                            <input type="checkbox"  onclick="myFunction()"> Show Password
                                            <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div>
                                            <button value="Login" name="submit" type="submit" class="btn btn-success" style="margin-left:120px;">Log in</button>
                                    </div>    
                                    </div>
                                    <div class="position-static">
                                        <h6><a href="#tambah" class="tect-decoration-none" data-toggle="modal">Register</a></h6>

                                    </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
            <!-- login End-->
        </div>
    </div>
</div>
        
    <!-- Footer Start-->

    </li>
    <!-- Footer End-->
    <!-- jquery
        ============================================ -->
        
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.3.min.js"></script>
    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
        x.type = "text";
        } else {
             x.type = "password";
                }
        }
    </script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.form.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>