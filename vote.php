<?php include('libs/header.php');
include('libs/config.php'); ?>

<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <!-- Section gallery (portfolio) -->
    <div class="standard-section section-portfolio" id="gallery" style="padding-top:10%">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['vote_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <div class="row">
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query('SELECT * FROM vote ORDER BY id DESC'); while ($data = $reponse->fetch()) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="portfolio-item" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="portfolio-image-container">
                            <img class="img-responsive" src="<?php echo $data['img']; ?>">
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-outer">
                                    <div class="overlay"></div>
                                    <div class="portfolio-caption-inner">
                                        <h4><?php echo $data['title']; ?></h4>
                                        <p><?php echo $data['description']; ?></p>
                                        <ul class="list-inline">
                                            <li>
                                                <a href="<?php echo $data['url']; ?>" title="<?php echo $data['title']; ?>" target="_blank"><button type="button" class="btn btn-warning">Vote</button></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="portfolio-header" style="text-align: center;"><a href="blog-item.html" title="The adventure"><?php echo $data['title']; ?></a></h4>
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

    <!-- Order modal -->
    <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Order form</h3>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis leo ut sapien tristique adipiscing. Nunc vitae nisi id ipsum congue ullamcorper.</p>
                            <footer>Bill Archway <cite title="Source Title">100 games you must have</cite></footer>
                        </blockquote>
                        <div class="form-group has-feedback">
                            <label for="order-first-name">First Name:</label>
                            <input type="text" class="form-control" id="order-first-name" placeholder="Enter first name">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="order-last-name">Last Name:</label>
                            <input type="text" class="form-control" id="order-last-name" placeholder="Enter last name">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="order-email">Email:</label>
                            <input type="email" class="form-control" id="order-email" placeholder="Enter email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="order-phone">Phone:</label>
                            <input type="text" class="form-control" id="order-phone" placeholder="Enter phone">
                            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="order-company">Company:</label>
                            <input type="text" class="form-control" id="order-company" placeholder="Your company">
                            <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Yes, I want to get the newsletter
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Order now</button><button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
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