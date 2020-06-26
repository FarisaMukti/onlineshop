<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMventure</title>
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
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"  rel="stylesheet" >
    <!-- Bootstrap CSS
		============================================ -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" >
    <!-- adminpro icon CSS
		============================================ -->
    <link href="<?php echo base_url(); ?>assets/css/adminpro-custon-icon.css" rel="stylesheet">
    <!-- meanmenu icon CSS
		============================================ -->
    <link  href="<?php echo base_url(); ?>assets/css/meanmenu.min.css" rel="stylesheet">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link  href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <!-- animate CSS
		============================================ -->
    <link  href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <!-- normalize CSS
		============================================ -->
    <link  href="<?php echo base_url(); ?>assets/css/normalize.css" rel="stylesheet">
    <!-- form CSS
		============================================ -->
    <link  href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet">
    <!-- style CSS
		============================================ -->
    <link href="<?php echo base_url(); ?>assets/css/style1.css" rel="stylesheet">
    <!-- responsive CSS
		============================================ -->
    <link  href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/message/dudu.png" alt="" />
                    </a>
                    <h3>AMventure</h3>
                    <p></p>
                    <strong>AM</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>index.php/home" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn"> Dashboard</span></a>
                        </li>
                        <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/user/index" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-users"></i> <span class="mini-dn"> User</span></a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-book"></i><span class="mini-dn"> Product</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?php echo base_url(); ?>index.php/item/index" class="dropdown-item">All Item</a>
                                <a href="<?php echo base_url(); ?>index.php/barang/index" class="dropdown-item">Data Barang</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-shopping-bag"></i> <span class="mini-dn"> Transaksi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?php echo base_url(); ?>index.php/transaksi/index" class="dropdown-item">Transaksi</a>
                                <a href="<?php echo base_url(); ?>index.php/transaksi/riwayat" class="dropdown-item">Riwayat Transaksi</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="<?php echo base_url(); ?>assets/img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/home" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/profil" class="nav-link">About</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="fa big-icon fa-home"></span>
                                                <span class="admin-name">AMventure</span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="<?php echo base_url(); ?>index.php/Profil"><i class="fa fa-address-book"></i>Our Profile</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>index.php/login/logout">Log Out</a>
                                                </li>
                                            </ul>
                                            <li></li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="<?php echo base_url(); ?>index.php/home">Dashboard <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                         
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Barang <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="profile.html">Kategori Barang</a>
                                                </li>
                                                <li><a href="contact-client.html">Data Barang</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="<?php echo base_url(); ?>index.php/user/index">User<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- INI CONTENT -->
	<?php $this->load->view($content_view); ?>
            
        </div>
    </div>
    <!-- Footer Start-->
    <!-- Footer End-->
    <!-- jquery
    
        ============================================ -->
       
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.3.min.js"></script>
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