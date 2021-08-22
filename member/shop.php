<?php include('libs/header.php'); ?>
<?php
include('../libs/config.php');
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:libs/logout.php');
  } else{ ?>
<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <div class="standard-section section-pricing" id="pricing" style="padding-top:10%">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header skrollable skrollable-after" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1" style="transform: translateX(0px); opacity: 1;"><?php echo $data['shop_text_section']; ?></h2>
            </div>
            <?php } $reponse->closeCursor(); ?>
            <div class="row">
            <?php $reponse = $bdd->query('SELECT * FROM shop'); while ($data = $reponse->fetch()) { ?>
                <div class="col-sm-4">
                    <div data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1" class="skrollable skrollable-between" style="transform: translateY(-21.5161px);">
                        <div class="price-item price-basic">
                            <div class="price-header">
                                <h3><strong><?php echo $data['price']; ?></strong></h3>
                            </div>
                            <div class="price-description"><?php echo $data['title']; ?></div>
                            <ul class="price-list list-unstyled">
                                <li style="display: <?php echo $data['text_1_show']; ?>"><?php echo $data['text_1']; ?></li>
                                <li style="display: <?php echo $data['text_2_show']; ?>"><?php echo $data['text_2']; ?></li>
                                <li style="display: <?php echo $data['text_3_show']; ?>"><?php echo $data['text_3']; ?></li>
                                <li style="display: <?php echo $data['text_4_show']; ?>"><?php echo $data['text_4']; ?></li>
                                <li style="display: <?php echo $data['text_5_show']; ?>"><?php echo $data['text_5']; ?></li>
                                <li style="display: <?php echo $data['text_6_show']; ?>"><?php echo $data['text_6']; ?></li>
                                <li style="display: <?php echo $data['text_7_show']; ?>"><?php echo $data['text_7']; ?></li>
                                <li style="display: <?php echo $data['text_8_show']; ?>"><?php echo $data['text_8']; ?></li>
                                <li style="display: <?php echo $data['text_9_show']; ?>"><?php echo $data['text_9']; ?></li>
                                <li style="display: <?php echo $data['text_10_show']; ?>"><?php echo $data['text_10']; ?></li>
                            </ul>
                            <div class="price-button">
                                <a href="buy.php?id=<?php echo $data['id'];?>" class="btn btn-primary btn-block"><i class="fa fa-shopping-basket" aria-hidden="true"></i> BUY</a>
                            </div>
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