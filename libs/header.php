<?php
session_start();

include( "libs/config.php" );

if(isset($_POST['formconnexion'])) {
   $usernameconnect = htmlspecialchars($_POST['usernameconnect']);
   $passwordconnect = sha1($_POST['passwordconnect']);
   if(!empty($usernameconnect) AND !empty($passwordconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
      $requser->execute(array($usernameconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: member/index.php");
      } else {
        $reponse = $bdd->query('SELECT * FROM header'); while ($data = $reponse->fetch()) {
         $erreur = $data['id_incorrect'];
        } $reponse->closeCursor();
      }
   } else {
      $reponse = $bdd->query('SELECT * FROM header'); while ($data = $reponse->fetch()) {
       $erreur = $data['all_incorrect'];
      } $reponse->closeCursor();
   }
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<?php $reponse = $bdd->query('SELECT * FROM setting'); while ($data = $reponse->fetch()) { ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="<?php echo $data['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $data['meta_keywords']; ?>">
    <meta name="author" content="XLIFE Redven Biker (XLife.fr)">

    <title><?php echo $data['name_website']; ?></title>
    <?php } $reponse->closeCursor(); ?>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Lightbox styles -->
    <link href="assets/lightbox2-master/dist/css/lightbox.min.css" rel="stylesheet">

    <!-- Loaders styles -->
    <link href="assets/loaders.css-master/loaders.min.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Template styles -->
    <link href="css/blue.min.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Modernizr -->
    <script type="text/javascript" src="js/modernizr-custom.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png">

    <script src="https://kit.fontawesome.com/b5b3392b53.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Preloader -->
    <div class="loader-overlay">
        <div class="loader">
            <div class="loader-inner pacman">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
    <?php $reponse = $bdd->query('SELECT * FROM header'); while ($data = $reponse->fetch()) { ?>
            <h3 class="loader-text"><?php echo $data['preload']; ?></h3>
        </div>
    </div>

    <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="triangle">
            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </div>
        <!-- Topbar -->
        <div class="header-top clearfix">
            <div class="container">
                <ul class="list-inline social-links">
                    <li style="display: <?php echo $data['twitter_show']; ?>;">
                    <a href="<?php echo $data['twitter_url']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li style="display: <?php echo $data['youtube_show']; ?>;">
                    <a href="<?php echo $data['youtube_url']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li style="display: <?php echo $data['discord_show']; ?>;">
                    <a href="<?php echo $data['discord_url']; ?>" target="_blank"><i class="fab fa-discord"></i></a>
                    </li>
                    <li style="display: <?php echo $data['facebook_show']; ?>;">
                    <a href="<?php echo $data['facebook_url']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li style="display: <?php echo $data['twitch_show']; ?>;">
                    <a href="<?php echo $data['twitch_url']; ?>" target="_blank"><i class="fa fa-twitch"></i></a>
                    </li>
                </ul>
    <?php } $reponse->closeCursor(); ?>
    <?php $reponse = $bdd->query('SELECT * FROM header'); while ($data = $reponse->fetch()) { ?>
                <div class="header-top-dropdown">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                            <span class="text"><i class="fa fa-user"></i> <?php echo $data['login_header']; ?></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <form class="login-form" method="POST" action="">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" name="usernameconnect" placeholder="<?php echo $data['username_login_header']; ?>">
                                        <i style="padding-top:4%" class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" class="form-control" name="passwordconnect" placeholder="<?php echo $data['password_login_header']; ?>">
                                        <i style="padding-top:4%" class="fa fa-lock form-control-feedback"></i>
                                    </div>
                                    <button type="submit" name="formconnexion" class="btn btn-primary btn-block">
                                        <span class="text"><?php echo $data['btn_login_header']; ?> <i class="fa fa-arrow-right"></i></span>
                                    </button>
                                    <?php if(isset($erreur)) {echo '<p style="color:#e74c3c;text-align:center;"><b>'.$erreur."</b></p>"; } ?>
                                    <h3 class="text-center"><?php echo $data['or_login_header']; ?></h3>
                                    <a href="register.php"><button type="button" class="btn btn-primary btn-block">
                                        <span class="text"><?php echo $data['btn_register_header']; ?> <i class="fa fa-arrow-right"></i></span>
                                    </button></a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
    <?php } $reponse->closeCursor(); ?>
            </div>
        </div><!-- Topbar end -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Logo -->
                <?php $reponse = $bdd->query('SELECT * FROM setting'); while ($data = $reponse->fetch()) { ?>
                <a class="navbar-brand" href="index.php">
                    <span class="main-color"><?php echo $data['name_website_header']; ?></span>
                </a><!-- Logo end -->
                <?php } $reponse->closeCursor(); ?>
            </div>
            <!-- Main menu -->
    <?php $reponse = $bdd->query('SELECT * FROM header'); while ($data = $reponse->fetch()) { ?>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">
                            <span class="main-link"><?php echo $data['home_header']; ?></span>
                        </a>
                    </li>
                    <li style="display: <?php echo $data['show_news_header']; ?>">
                        <a href="news.php">
                            <span class="main-link"><?php echo $data['news_header']; ?></span>
                        </a>
                    </li>
                    <li style="display: <?php echo $data['show_devlog_header']; ?>">
                        <a href="devlog.php">
                            <span class="main-link"><?php echo $data['devlog_header']; ?></span>
                        </a>
                    </li>
                    <li style="display: <?php echo $data['show_blog_header']; ?>">
                        <a href="blog.php">
                            <span class="main-link"><?php echo $data['blog_header']; ?></span>
                        </a>
                    </li>
                    <li style="display: <?php echo $data['show_shop_header']; ?>">
                        <a href="shop.php">
                            <span class="main-link"><?php echo $data['shop_header']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="main-link"><?php echo $data['dropdown_other_header']; ?> <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li style="display: <?php echo $data['show_gallery_header']; ?>">
                                <a href="gallery.php"><?php echo $data['gallery_header']; ?></a>
                            </li>
                            <li style="display: <?php echo $data['show_faq_header']; ?>">
                                <a href="faq.php"><?php echo $data['faq_header']; ?></a>
                            </li>
                            <li style="display: <?php echo $data['show_timeline_header']; ?>">
                                <a href="timeline.php"><?php echo $data['timeline_header']; ?></a>
                            </li>
                            <li style="display: <?php echo $data['show_staff_header']; ?>">
                                <a href="staff.php"><?php echo $data['staff_header']; ?></a>
                            </li>
                            <li style="display: <?php echo $data['show_donate_header']; ?>">
                                <a href="donate.php"><?php echo $data['donate_header']; ?></a>
                            </li>
                            <li style="display: <?php echo $data['show_vote_header']; ?>">
                                <a href="vote.php"><?php echo $data['vote_header']; ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- Main menu end -->
            <?php } $reponse->closeCursor(); ?>
        </div>
    </div><!-- Navbar end -->