<?php include('libs/header.php'); ?>
<?php include('config.php'); ?>
        <?php $reponse = $bdd->query("SELECT * from blog WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
    <div class="single-page-section single-page-blog">

        <!-- Page heading -->
        <div class="single-page-header single-page-blog-header">
            <div class="overlay"></div>
            <div class="container">
                <h2 class="digit-header"><?php echo $data['title']; ?></h2>
            </div>
            <div class="single-page-header-bg"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Post item -->
                    <ul class="list-inline post-item-toolbar">
                        <li>
                        Date : <?php echo $data['date']; ?>
                        </li>
                    </ul>
                    <div class="post-item-image">
                        <div class="triangle triangle-up">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                        <div class="triangle triangle-down">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                        <img class="img-responsive" src="<?php echo $data['img_url']; ?>">
                    </div>
                    <div class="post-item-text">
                        <p class="lead"><?php echo $data['description']; ?></p>
                    </div>
                </div>
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
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

<!-- Lightbox -->
<script type="text/javascript" src="assets/lightbox2-master/dist/js/lightbox.min.js"></script>

<!-- morris charts -->
<script type="text/javascript" src="assets/morris.js-0.5.1/morris.min.js"></script>

<!-- jQuery parallax -->
<script type="text/javascript" src="js/jquery.parallax-1.1.3-min.js"></script>

<!-- jQuery countdown -->
<script type="text/javascript" src="js/countdown.min.js"></script>

<!-- skrollr -->
<script type="text/javascript" src="js/skrollr.min.js"></script>

<!-- raphael -->
<script src="js/raphael.min.js"></script>

<!-- particles -->
<script src="js/TweenLite.min.js"></script>
<script src="js/EasePack.min.js"></script>
<script src="js/rAF.min.js"></script>
<script src="js/particles.min.js"></script>

<!-- Custom javascript -->
<script type="text/javascript" src="js/custom.min.js"></script>

<!-- Main page javascript -->
<script type="text/javascript" src="js/main.min.js"></script>

<!-- Google maps -->

</body>
</html>