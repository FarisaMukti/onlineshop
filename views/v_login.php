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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/v_login1.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <img src="<?php echo base_url(); ?>assets/foto/2048.jpg" alt="gambar" class="bg" />
    <br>
    <div class="typewriter">
    <h1>Selamat Datang di AMventure.</h1>
    </div>
    <br>
        <div class="content">
            <div class="wrapper-pro">
            <div class="content-inner-all">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="">AMventure</a>
                    </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
                        <div class="col-lg-12">
                        <div class="text-center">
                        <h3><b>Register</b></h3></div>
                        <form id="adminpro-form" class="adminpro-form" action="<?php echo base_url(); ?>index.php/register/index" method="post">
                
                        <div class="form-group">
                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                        </div>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-xs-6 col-xs-offset-3">
                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-success" value="Register Now">
                        </div>
                  </div>
                </div>
              </form>
            </div>
          </ul>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
            <div class="col-lg-12">
              <div class="text-center">
                <h3><b>Log In</b></h3></div>
                <form id="adminpro-form" class="adminpro-form" action="<?php echo base_url(); ?>index.php/login/act_login" method="post">
                
                <div class="row">
                <div class="col-lg-12">
                    <div class="login-input-area">
                        <input type="text" name="username" placeholder="Username">
                        <i  aria-hidden="true"></i>
                        </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
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

              </form>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
        var i = 0;
        var txt = 'Selamat Datang di AMventure.'; /* The text */
        var speed = 50; /* The speed/duration of the effect in milliseconds */

        function typeWriter() {
        if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
            }
        }
    </script>

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


