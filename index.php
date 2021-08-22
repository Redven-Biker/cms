<?php include('libs/header.php'); ?>
<?php include('config.php'); ?>
<?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <!-- Section home -->
    <div class="section-home" id="home">
        <div class="overlay"></div>
        <!-- Particles -->
        <canvas class="particles" id="particles"></canvas>
        <div class="container">
            <div class="section-home-content">
                <h1 class="system-header"><?php echo $data['title_slider_home']; ?></h1>
                <p class="section-description"><strong><?php echo $data['description_slider_home']; ?></strong></p>

                <a href="<?php echo $data['btn_url_slider_home']; ?>" class="btn-border btn-primary" data-toggle="modal" style="display: <?php echo $data['btn_show_slider_home']; ?>" target="_blank">
                    <span class="btn btn-primary btn-lg"> <?php echo $data['btn_text_slider_home']; ?></span>
                </a>
            </div>
        </div>
        <div class="home-bg"></div>
    </div>

    <!-- Section about -->
    <div class="standard-section section-about" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['about_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <p class="section-description text-center lead"><strong><?php echo $data['about_description_section']; ?></strong></p>
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                            <a href="<?php echo $data['about_box1_url_section']; ?>" target="<?php echo $data['about_box1_url_new_tab_section']; ?>"><span class="icon-circle-inner">
                            <i class="<?php echo $data['about_box1_icon_section']; ?>"></i>
                            </span></a>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about_box1_text_section']; ?></h3>
                        <p><?php echo $data['about_box1_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                        <a href="<?php echo $data['about_box2_url_section']; ?>" target="<?php echo $data['about_box2_url_new_tab_section']; ?>" ><span class="icon-circle-inner">
                            <i class="<?php echo $data['about_box2_icon_section']; ?>"></i>
                            </span></a>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about_box2_text_section']; ?></h3>
                        <p><?php echo $data['about_box2_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                    <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                    <a href="<?php echo $data['about_box3_url_section']; ?>" target="<?php echo $data['about_box3_url_new_tab_section']; ?>"><span class="icon-circle-inner">
                            <i class="<?php echo $data['about_box3_icon_section']; ?>"></i>
                            </span></a>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about_box3_text_section']; ?></h3>
                        <p><?php echo $data['about_box3_description_section']; ?></p>
                    </div>
                </div>
            </div>
            <div class="text-center" style="display: <?php echo $data['video_show_section']; ?>">
                <h3 class="post-item-header"><?php echo $data['video_text_section']; ?></h3>
            </div>
            <div class="row" style="display: <?php echo $data['video_show_section']; ?>">
                <div class="col-md-8 col-md-offset-2">
                    <div class="post-item-video">
                        <div class="triangle triangle-up">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                        <div class="triangle triangle-down">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo $data['video_id_section']; ?>" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section gallery (portfolio) -->
    <div class="standard-section section-portfolio" id="gallery" style="display: <?php echo $data['gallery_show_section']; ?>">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['gallery_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <div class="row">
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query('SELECT * FROM gallery ORDER BY id DESC LIMIT 6'); while ($data = $reponse->fetch()) { ?>
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
                                                <a class="portfolio-caption-icon" data-lightbox="portfolio" href="<?php echo $data['img']; ?>" title="<?php echo $data['title']; ?>"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
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
            <div class="text-center">
            <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
                <div class="btn-more-container" data-100p-top="transform[swing]:translateY(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                    <a href="gallery.php" class="btn btn-more clearfix">
                        <span><span><?php echo $data['gallery_more_section']; ?></span></span>
                    </a>
                </div>
            <?php } $reponse->closeCursor(); ?>
            </div>
        </div>
    </div>

    <!-- Section timeline -->
    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <div class="standard-section section-gray section-timeline" id="timeline" style="display: <?php echo $data['timeline_show_section']; ?>">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['timeline_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <p class="section-description text-center lead"><strong><?php echo $data['timeline_description_section']; ?></strong></p>
            <div class="timeline no-margin">
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query('SELECT * FROM timeline LIMIT 4'); while ($data = $reponse->fetch()) { ?>
                <div class="timeline-block">
                    <div class="timeline-img" data-100p-top="transform[swing]:scale(0)" data-75p-top="transform[swing]:scale(1)">
                        <i class="fa fa-circle-thin" aria-hidden="true"></i>
                    </div>
                    <div class="timeline-content" data-100p-top="transform[swing]:translateX(50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <a href="timeline.php" title="Testing and debugging" class="frame"></a>
                        <span class="timeline-date">
                            <span> <?php echo $data['date']; ?></span>
                        </span>
                        <h3 class="timeline-header">
                            <a><?php echo $data['title']; ?></a>
                        </h3>
                        <img class="img-responsive" src="<?php echo $data['img_url']; ?>">
                        <div class="timeline-description">
                            <p><?php echo $data['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } $reponse->closeCursor(); ?>
            </div>
            <div class="text-center">
            <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
                <div class="btn-more-container" data-100p-top="transform[swing]:translateY(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                    <a href="timeline.php" class="btn btn-more clearfix">
                        <span><span><?php echo $data['timeline_more_section']; ?></span></span>
                    </a>
                </div>
            <?php } $reponse->closeCursor(); ?>
            </div>
        </div>
    </div>

    <!-- Section team -->
    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <div class="standard-section section-team" id="team" style="display: <?php echo $data['staff_show_section']; ?>">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['staff_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <div class="row">
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query('SELECT * FROM staff LIMIT 6'); while ($data = $reponse->fetch()) { ?>
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
            <div class="text-center">
            <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
                <div class="btn-more-container" data-100p-top="transform[swing]:translateY(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                    <a href="staff.php" class="btn btn-more clearfix">
                        <span><span><?php echo $data['staff_more_section']; ?></span></span>
                    </a>
                </div>
            <?php } $reponse->closeCursor(); ?>
            </div>
        </div>
    </div>

    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <!-- Section getting started -->
    <div class="standard-section section-promo section-flow" id="flow" style="display: <?php echo $data['about2_show_section']; ?>">
        <div class="triangle triangle-up" data-100p-top="top[swing]:-54px" data-75p-top="top[swing]:-24px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="triangle triangle-down" data-100p-top="bottom[swing]:-70px" data-75p-top="bottom[swing]:-40px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['about2_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <p class="section-description text-center lead"><strong><?php echo $data['about2_description_section']; ?></strong></p>
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                        <a href="<?php echo $data['about2_box1_url_section']; ?>" target="<?php echo $data['about2_box1_url_new_tab_section']; ?>"><span class="icon-circle-inner">
                            <i class="<?php echo $data['about2_box1_icon_section']; ?>"></i>
                            </span></a>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about2_box1_text_section']; ?></h3>
                        <p><?php echo $data['about2_box1_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                        <a href="<?php echo $data['about2_box2_url_section']; ?>" target="<?php echo $data['about2_box2_url_new_tab_section']; ?>"><span class="icon-circle-inner">
                            <i class="<?php echo $data['about2_box2_icon_section']; ?>"></i>
                            </span></a>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about2_box2_text_section']; ?></h3>
                        <p><?php echo $data['about2_box2_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                        <a href="<?php echo $data['about2_box3_url_section']; ?>" target="<?php echo $data['about2_box3_url_new_tab_section']; ?>"><span class="icon-circle-inner">
                            <i class="<?php echo $data['about2_box3_icon_section']; ?>"></i>
                            </span></a>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about2_box3_text_section']; ?></h3>
                        <p><?php echo $data['about2_box3_description_section']; ?></p>
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