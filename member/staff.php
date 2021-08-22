<?php include('libs/header.php'); ?>
<?php
include('../libs/config.php');
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:libs/logout.php');
  } else{ ?>
<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <!-- Section team -->
    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <div class="standard-section section-team" id="team" style="display: <?php echo $data['staff_show_section']; ?>;padding-top:10%;">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['staff_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <div class="row">
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query('SELECT * FROM staff'); while ($data = $reponse->fetch()) { ?>
                <div class="col-sm-4">
                    <div class="team-item" data-100p-top="transform[swing]:translateX(-50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <center><img src="<?php echo $data['img']; ?>" width="250" style="border-radius: 7px 7px 7px 7px;
-moz-border-radius: 7px 7px 7px 7px;
-webkit-border-radius: 7px 7px 7px 7px;
border: 0px solid #000000;"></center>
                        <div class="team-description">
                            <h3><?php echo $data['name']; ?></h3>
                            <p><i class="fa fa-briefcase"></i> <?php echo $data['grade']; ?></p>
                            <ul class="list-inline">
                                <li style="display: <?php echo $data['facebook_show']; ?>;">
                                    <a href="<?php echo $data['facebook_url']; ?>" target="_blank">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li style="display: <?php echo $data['twitter_show']; ?>;">
                                    <a href="<?php echo $data['twitter_url']; ?>" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li style="display: <?php echo $data['youtube_show']; ?>;">
                                    <a href="<?php echo $data['youtube_url']; ?>" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li style="display: <?php echo $data['discord_show']; ?>;">
                                    <a href="<?php echo $data['discord_url']; ?>" target="_blank">
                                        <i class="fab fa-discord"></i>
                                    </a>
                                </li>
                                <li style="display: <?php echo $data['twitch_show']; ?>;">
                                    <a href="<?php echo $data['twitch_url']; ?>" target="_blank">
                                        <i class="fab fa-twitch"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } $reponse->closeCursor(); ?>
            </div>
        </div>
    </div>
<?php } $reponse->closeCursor(); ?>
<?php $reponse = $bdd->query('SELECT * FROM footer'); while ($data = $reponse->fetch()) { ?>
    <!-- Footer -->
    <footer class="footer text-center" id="follow-us">
        <div class="container">
            <ul class="list-inline">
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
            <p> <?php echo $data['footer_name']; ?></a></p>
        </div>
    </footer>

    <!-- Scroll to top button -->
    <div id="toTop" class="to-top">
        <a href="#" class="To the top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
    <?php } $reponse->closeCursor(); ?>

<!-- jQuery -->
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="../assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

<!-- Lightbox -->
<script type="text/javascript" src="../assets/lightbox2-master/dist/js/lightbox.min.js"></script>

<!-- morris charts -->
<script type="text/javascript" src="../assets/morris.js-0.5.1/morris.min.js"></script>

<!-- jQuery parallax -->
<script type="text/javascript" src="../js/jquery.parallax-1.1.3-min.js"></script>

<!-- jQuery countdown -->
<script type="text/javascript" src="../js/countdown.min.js"></script>

<!-- skrollr -->
<script type="text/javascript" src="../js/skrollr.min.js"></script>

<!-- raphael -->
<script src="../js/raphael.min.js"></script>

<!-- particles -->
<script src="../js/TweenLite.min.js"></script>
<script src="../js/EasePack.min.js"></script>
<script src="../js/rAF.min.js"></script>
<script src="../js/particles.min.js"></script>

<!-- Custom javascript -->
<script type="text/javascript" src="../js/custom.min.js"></script>

<!-- Main page javascript -->
<script type="text/javascript" src="../js/main.min.js"></script>

<!-- Google maps -->

</body>
</html>
<?php } ?>