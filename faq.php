<?php include('libs/header.php');
include('libs/config.php'); ?>

<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <!-- Section FAQ -->
    <div class="standard-section section-gray section-faq" style="padding-top:10%">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['faq_text_section']; ?></h2>
            </div>
            <p class="section-description text-center lead"><strong><?php echo $data['faq_description_section']; ?></strong></p>
            <div class="panel-group no-margin" id="accordion">
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query('SELECT * FROM faq'); while ($data = $reponse->fetch()) { ?>
                <div class="panel panel-primary" data-100p-top="transform[swing]:translateX(-50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#faq<?php echo $data['id']; ?>">
                                <span class="glyphicon glyphicon-plus"></span> <?php echo $data['title']; ?>
                                <span class="panel-icon">
                                    <i class="fa fa-question" aria-hidden="true"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="faq<?php echo $data['id']; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="no-margin"><strong><?php echo $data['description']; ?></strong></p>
                        </div>
                    </div>
                </div>
            <?php } $reponse->closeCursor(); ?>
            </div>
        </div>
    </div>

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