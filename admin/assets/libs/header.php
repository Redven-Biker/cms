<?php
include('../libs/config.php');
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/logout.php');
  } else{ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><strong>ADMIN PANEL</strong></a>
				
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i><b><?php echo $_SESSION['username']; ?></b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
<ul id="dropdown1" class="dropdown-content">
<li><a href="assets/libs/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul> 
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="blog.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Blog</a>
                    </li>
                    <li>
                        <a href="devlog.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Devlog</a>
                    </li>
                    <li>
                        <a href="donate.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Donate</a>
                    </li>
                    <li>
                        <a href="faq.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> FAQ</a>
                    </li>
                    <li>
                        <a href="gallery.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Gallery</a>
                    </li>
                    <li>
                        <a href="news.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> News</a>
                    </li>
                    <li>
                        <a href="orders.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Orders</a>
                    </li>
                    <li>
                        <a href="shop.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Shop</a>
                    </li>
                    <li>
                        <a href="staff.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Staff</a>
                    </li>
                    <li>
                        <a href="timeline.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Timeline</a>
                    </li>
                    <li>
                        <a href="users.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Users</a>
                    </li>
                    <li>
                        <a href="vote.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Vote</a>
                    </li>
                    <li>
                        <a href="admin.php" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Admin</a>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="setting.php?id=1">Setting</a>
                            </li>
                            <li>
                                <a href="header.php?id=1">Header</a>
                            </li>
                            <li>
                                <a href="footer.php?id=1">Footer</a>
                            </li>
                            <li>
                                <a href="others-settings.php?id=1">Others Settings</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
<?php } ?>