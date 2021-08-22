<?php include('libs/header.php'); ?>
<?php
include('../libs/config.php');
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:libs/logout.php');
  } else{ ?>
    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
        <div class="container" style="padding-top:10%">
            <div class="text-center">
                <h2 class="standard-header skrollable skrollable-after" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1" style="transform: translateX(0px); opacity: 1;"><?php echo $data['buy_text']; ?></h2>
            </div>
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query("SELECT * from shop WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
            <form class="form-container form" action="buy-post.php" method="post">
                <div class="overlay"></div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1" class="skrollable skrollable-after" style="transform: translateX(0px); opacity: 1;">
                            <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="product" value="<?php echo $data['title']; ?>" readonly>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="price" value="<?php echo $data['price']; ?>" readonly>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="name_paypal" placeholder="<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['buy_text_name']; ?><?php } $reponse->closeCursor(); ?>" required>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" name="email_paypal" placeholder="<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['buy_text_email']; ?><?php } $reponse->closeCursor(); ?>" required>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="discord" placeholder="<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['buy_text_discord']; ?><?php } $reponse->closeCursor(); ?>" required>
                                </div>
                                    <input type="text" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>" style="display:none;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1" class="skrollable skrollable-after" style="transform: translateX(0px); opacity: 1;">
                                <div class="form-group">
                                    <h3><?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['buy_text_send_amount']; ?><?php } $reponse->closeCursor(); ?></h3>
                                    <a href="<?php $reponse = $bdd->query('SELECT * FROM setting'); while ($data = $reponse->fetch()) { ?><?php echo $data['paypal_me']; ?><?php } $reponse->closeCursor(); ?>" target="_blank"><button type="button" class="btn btn-primary btn-block"><?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['buy_text_btn_buy']; ?><?php } $reponse->closeCursor(); ?></button></a>
                                    <h3 style="padding-top:2%;"><?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['buy_text_confirm']; ?><?php } $reponse->closeCursor(); ?></h3>
                                    <button type="submit" class="btn btn-primary btn-block"><?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['buy_send_confirm']; ?><?php } $reponse->closeCursor(); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>
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