<?php include('libs/header.php');
include('libs/config.php'); ?>

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

                <a href="<?php echo $data['btn_url_slider_home']; ?>" class="btn-border btn-primary" data-toggle="modal" data-target="#order-modal" style="display: <?php echo $data['btn_show_slider_home']; ?>">
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
                            <span class="icon-circle-inner">
                            <i class="<?php echo $data['about_box1_icon_section']; ?>"></i>
                            </span>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about_box1_text_section']; ?></h3>
                        <p><?php echo $data['about_box1_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                            <span class="icon-circle-inner">
                            <i class="<?php echo $data['about_box2_icon_section']; ?>"></i>
                            </span>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about_box2_text_section']; ?></h3>
                        <p><?php echo $data['about_box2_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                            <span class="icon-circle-inner">
                            <i class="<?php echo $data['about_box3_icon_section']; ?>"></i>
                            </span>
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
    <div class="standard-section section-portfolio" id="gallery">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['gallery_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <div class="row">
            <?php } $reponse->closeCursor(); ?>
            <?php $reponse = $bdd->query('SELECT * FROM gallery LIMIT 6'); while ($data = $reponse->fetch()) { ?>
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
    <div class="standard-section section-gray section-timeline" id="timeline">
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
        </div>
    </div>

    <!-- Section team -->
    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <div class="standard-section section-team" id="team">
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
        </div>
    </div>

    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <!-- Section getting started -->
    <div class="standard-section section-promo section-flow" id="flow">
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
                            <span class="icon-circle-inner">
                            <i class="<?php echo $data['about2_box1_icon_section']; ?>"></i>
                            </span>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about2_box1_text_section']; ?></h3>
                        <p><?php echo $data['about2_box1_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                            <span class="icon-circle-inner">
                            <i class="<?php echo $data['about2_box2_icon_section']; ?>"></i>
                            </span>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about2_box2_text_section']; ?></h3>
                        <p><?php echo $data['about2_box2_description_section']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature-box text-center">
                        <span class="icon-circle-outer" data-toggle="tooltip" data-placement="top" data-100p-top="transform[swing]:scale(0.5);opacity[swing]:0" data-75p-top="transform[swing]:scale(1);opacity[swing]:1">
                            <span class="icon-circle-inner">
                            <i class="<?php echo $data['about2_box3_icon_section']; ?>"></i>
                            </span>
                        </span>
                        <h3 class="feature-header bracket"><?php echo $data['about2_box3_text_section']; ?></h3>
                        <p><?php echo $data['about2_box3_description_section']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section FAQ -->
    <div class="standard-section section-gray section-faq" id="faq">
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">frequently asked questions</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">FAQ</h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                <div class="section-icon"><span><i class="fa fa-question" aria-hidden="true"></i></span></div>
            </div>
            <p class="section-description text-center lead">If you have any <span class="highlight">questions</span> about our <strong>product</strong> propably you can find an <span class="highlight">answer</span> in this section. We try <strong>update</strong> this section <strong>frequently</strong>.</p>
            <div class="panel-group no-margin" id="accordion">
                <div class="panel panel-primary" data-100p-top="transform[swing]:translateX(50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class="glyphicon glyphicon-plus"></span> What is GameR?
                                <span class="panel-icon">
                                    <i class="fa fa-question" aria-hidden="true"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p><strong><span class="main-color">G</span>ame<span class="main-color">R</span></strong> is an ideal, full responsive template for game-related websites (gaming, communities, clans, guilds, news and entertainment content) but also for technology, music, movies, CV or personal pages. Smart and compact. It's able to completely meet your needs. Many advanced customizable sections will help you get your own website fast and easy. Unique design will increase the value of your page!</p>
                            <ol>
                                <li><strong>Pixer art design</strong></li>
                                <li><strong>Dark and elegant</strong></li>
                                <li><strong>Many components</strong></li>
                                <li><strong>Full responsive</strong></li>
                                <li><strong>Animated</strong></li>
                                <li><strong>Customizable</strong></li>
                            </ol>
                            <p class="no-margin">Maecenas sit amet justo eget mi pellentesque varius. Nullam sit amet molestie risus. Nulla et metus non orci finibus sodales. Nam finibus eleifend elit, at bibendum nunc convallis aliquam. Aenean ac euismod odio. Etiam faucibus eros id lorem laoreet faucibus. Vestibulum et nulla sed magna porttitor luctus quis non risus. Ut ipsum lectus, aliquam eget euismod ut, imperdiet a erat. Fusce imperdiet orci non velit tincidunt tempus.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary" data-100p-top="transform[swing]:translateX(-50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <span class="glyphicon glyphicon-plus"></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                <span class="panel-icon">
                                    <i class="fa fa-question" aria-hidden="true"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="no-margin"><strong>Vestibulum ante</strong> ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus eget euismod erat. Curabitur fringilla diam ac malesuada ullamcorper. Fusce ullamcorper nunc eget pulvinar fringilla. In euismod blandit felis eu congue. Pellentesque sed turpis justo. Aliquam viverra, tellus vel pretium malesuada, urna tellus iaculis nibh, et fringilla mi nisi sit amet felis. Nam leo metus, gravida nec imperdiet ut, consectetur ac lectus. Etiam sed purus viverra, pellentesque quam vitae, dictum nisi. Donec tincidunt diam a enim pellentesque tincidunt. Fusce placerat consectetur augue, tristique placerat velit ullamcorper vel. Nunc cursus mauris sit amet diam iaculis, et rhoncus urna tempor. Suspendisse ac vehicula dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary" data-100p-top="transform[swing]:translateX(50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <span class="glyphicon glyphicon-plus"></span> Maecenas quis orci sagittis, aliquam neque et, dictum justo?
                                <span class="panel-icon">
                                    <i class="fa fa-question" aria-hidden="true"></i>
                                </span>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="no-margin"><strong>Morbi blandit</strong> ipsum non nunc consectetur pellentesque. Quisque ultricies, turpis sed sagittis congue, elit libero tincidunt odio, eu rutrum nunc felis aliquam risus. Phasellus est ipsum, dignissim sit amet ultrices id, feugiat finibus libero. Phasellus fermentum turpis ligula. Donec aliquam elementum enim, eu mattis elit bibendum at. Phasellus feugiat aliquet arcu at vestibulum. Cras tempor lacus nisl, eu interdum ligula iaculis vitae. Sed tempor aliquam sollicitudin. Curabitur lacinia viverra lacus ac fermentum. Etiam lobortis scelerisque elit at fermentum. Vestibulum posuere tempor risus, quis rutrum dolor lobortis non. Aliquam at malesuada augue. Pellentesque egestas scelerisque nibh et semper. Quisque et auctor velit, ut pulvinar massa. Duis mattis tempor rutrum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php } $reponse->closeCursor(); ?>

    <!-- Section pricing -->
    <div class="standard-section section-pricing" id="pricing">
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">subscription plans</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Pricing</h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                <div class="section-icon"><span><i class="fa fa-money" aria-hidden="true"></i></span></div>
            </div>
            <p class="section-description text-center lead">We offer the <strong>smart</strong> and <strong>clean</strong> <span class="highlight">subscription</span> system for our <strong>clients</strong>. This option worked well in the past and we hope that it will work also this time. Here below there are <span class="highlight">3 description</span> plan for our <strong>users</strong>.</p>
            <div class="row">
                <div class="col-sm-4">
                    <div data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="price-item price-basic">
                            <div class="price-header">
                                <h3>$ <strong>6</strong> / month</h3>
                            </div>
                            <div class="price-description">Basic</div>
                            <div class="price-image">
                                <div class="overlay"></div>
                                <h4 class="price-title">
                                    <span class="overlay-header"><span class="main-color">G</span>ame<span class="main-color">R</span></span>
                                </h4>
                            </div>
                            <ul class="price-list list-unstyled">
                                <li>Download link</li>
                                <li>Manual (pdf)</li>
                                <li>DRM free</li>
                                <li>Money back guarantee</li>
                                <li><i class="fa fa-close" aria-hidden="true"></i></li>
                                <li><i class="fa fa-close" aria-hidden="true"></i></li>
                                <li><i class="fa fa-close" aria-hidden="true"></i></li>
                                <li><i class="fa fa-close" aria-hidden="true"></i></li>
                            </ul>
                            <div class="price-button">
                                <a href="#" class="btn btn-primary btn-block" title="Buy it" data-toggle="modal" data-target="#order-modal"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Buy it</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div data-100p-top="transform[swing]:translateY(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                        <div class="price-item price-gold">
                            <div class="price-feature">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="price-header">
                                <h3>$ <strong>12</strong> / month</h3>
                            </div>
                            <div class="price-description">Gold</div>
                            <div class="price-image">
                                <div class="overlay"></div>
                                <h4 class="price-title">
                                    <span class="overlay-header"><span class="main-color">G</span>ame<span class="main-color">R</span></span>
                                    <br>
                                    <span class="overlay-header">+</span>
                                    <br>
                                    <span class="overlay-header">DLC</span>
                                </h4>
                            </div>
                            <ul class="price-list list-unstyled">
                                <li> DRM free</li>
                                <li> Money back guarantee</li>
                                <li> Free shipping</li>
                                <li> Download link + DVD</li>
                                <li> Manual (book and pdf)</li>
                                <li> DLC</li>
                                <li><i class="fa fa-close" aria-hidden="true"></i></li>
                                <li><i class="fa fa-close" aria-hidden="true"></i></li>
                            </ul>
                            <div class="price-button">
                                <a href="#" class="btn btn-primary btn-block" title="Buy it" data-toggle="modal" data-target="#order-modal"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Buy it</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="price-item price-platinium">
                            <div class="price-header">
                                <h3>$ <strong>14</strong> / month</h3>
                            </div>
                            <div class="price-description">Platinium</div>
                            <div class="price-image">
                                <div class="overlay"></div>
                                <h4 class="price-title">
                                    <span class="overlay-header"><span class="main-color">G</span>ame<span class="main-color">R</span></span>
                                    <br>
                                    <span class="overlay-header">+</span>
                                    <br>
                                    <span class="overlay-header">DLC</span>
                                </h4>
                            </div>
                            <ul class="price-list list-unstyled">
                                <li>DRM free</li>
                                <li>Money back guarantee</li>
                                <li>Free shipping</li>
                                <li>Download link + DVD</li>
                                <li>Manual (book and pdf)</li>
                                <li>DLC</li>
                                <li>Poster with world map</li>
                                <li>Soundtrack on CD</li>
                            </ul>
                            <div class="price-button">
                                <a href="#" class="btn btn-primary btn-block" title="Buy it" data-toggle="modal" data-target="#order-modal"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Buy it</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section testimonials -->
    <div class="standard-section section-promo section-testimonials" id="testimonials">
        <div class="triangle triangle-up" data-100p-top="top[swing]:-54px" data-75p-top="top[swing]:-24px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="triangle triangle-down" data-100p-top="bottom[swing]:-70px" data-75p-top="bottom[swing]:-40px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">what people say about us</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Testimonials</h2>
            </div>
            <div class="testimonials">
                <div id="carousel-testimonials" class="carousel carousel-testimonials slide" data-ride="carousel">
                    <div class="carousel-inner" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4 col-md-2">
                                    <div class="testimonials-image">
                                        <img class="img-responsive" src="img/pixel-man-1.jpg" alt="Person">
                                        <div class="testimonials-icon">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-10">
                                    <div class="testimonials-text">
                                        <h3>Great and innovative</h3>
                                        <p class="lead"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."</em></p>
                                        <p class="testimonials-author">Gary Brubeck, <span class="text-muted">IT Company</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4 col-md-2">
                                    <div class="testimonials-image">
                                        <img class="img-responsive" src="img/pixel-man-2.jpg" alt="Person">
                                        <div class="testimonials-icon">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-10">
                                    <div class="testimonials-text">
                                        <h3>Very attractive</h3>
                                        <p class="lead"><em>"Cras interdum metus risus, tristique pellentesque eros imperdiet eu. Vestibulum rutrum dignissim enim eget tempus. Fusce dapibus lobortis leo, vel convallis mauris lacinia in. Integer eu fringilla turpis, quis maximus felis. Etiam molestie..."</em></p>
                                        <p class="testimonials-author">John Wayne, <span class="text-muted">ART Company</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4 col-md-2">
                                    <div class="testimonials-image">
                                        <img class="img-responsive" src="img/pixel-woman-2.jpg" alt="Person">
                                        <div class="testimonials-icon">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-10">
                                    <div class="testimonials-text">
                                        <h3>Good company</h3>
                                        <p class="lead"><em>"Ut fringilla massa vitae leo fringilla, ut molestie ex consequat. Donec mattis, velit et ullamcorper volutpat, urna nisl sagittis lectus, sed tristique erat est ut sapien. Nulla non porttitor nisi, sed suscipit neque. Cras eget fringilla sem, ac consequat urna..."</em></p>
                                        <p class="testimonials-author">Philippa Doe, <span class="text-muted">ART Company</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators" data-100p-top="transform[swing]:translateY(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Section requirements -->
    <div class="standard-section section-gray section-requirements" id="requirements">
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">technical specification</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Requirements</h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                <div class="section-icon"><span><i class="fa fa-cogs" aria-hidden="true"></i></span></div>
            </div>
            <p class="section-description text-center lead">This section provides the <span class="highlight">system requirements</span> for <span class="highlight"><span class="main-color">G</span>ame<span class="main-color">R</span></span>. Please make sure that you are installing the appropriate <span class="highlight">version</span> for your <span class="highlight">operating system</span>.</p>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="requirement-item" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="requirement-icon">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="requirement-description">
                                    <h3>CPU</h3>
                                    <p>Intel CPU Core 3.3GHz / AMD CPU Phenom II</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="requirement-item" data-100p-top="transform[swing]:translateY(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="requirement-icon">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="requirement-description">
                                    <h3>Video Card</h3>
                                    <p>Nvidia GPU GeForce GTX / AMD GPU Radeon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="requirement-item" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="requirement-icon">
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="requirement-description">
                                    <h3>RAM</h3>
                                    <p>6 GB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-sm"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="requirement-item" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="requirement-icon">
                                    <i class="fa fa-hdd-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="requirement-description">
                                    <h3>HDD</h3>
                                    <p>40 GB Free space</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="requirement-item" data-100p-top="transform[swing]:translateY(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="requirement-icon">
                                    <i class="fa fa-windows" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="requirement-description">
                                    <h3>OS*</h3>
                                    <p>Windows 7, 8 or 10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="requirement-item" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="requirement-icon">
                                    <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="requirement-description">
                                    <h3>Direct X</h3>
                                    <p>11</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="lead">*GameR may not be compatible with 32 bit Windows distribution.</p>
            </div>
        </div>
    </div>

    <!-- Section some fun numbers (charts) -->
    <div class="standard-section section-charts" id="somefunnumbers">
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">our game stats</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Some fun numbers</h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                <div class="section-icon"><span><i class="fa fa-bar-chart" aria-hidden="true"></i></span></div>
            </div>
            <p class="section-description text-center lead">Here we present our game in some <span class="highlight">charts</span> and <span class="highlight">numbers</span>. You can <strong>preview</strong> its content, <strong>strengths</strong> and <strong>weaknesses</strong>, <strong>performance</strong> on different devices, sales charts etc.</p>
            <div class="text-center">
                <h3 class="post-item-header">Features</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mi eu purus bibendum aliquam ac sit amet mi. Donec lacinia consectetur convallis.</p>
            </div>
            <div class="charts-container">
                <h4 class="text-center">Quantities</h4>
                <div class="progress" data-100p-top="transform[swing]:translateX(-50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                    <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        <span><strong>90%</strong> active users</span>
                    </div>
                </div>
                <h4 class="text-center">World</h4>
                <div class="progress" data-100p-top="transform[swing]:translateX(50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                    <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span><strong>70%</strong> of the map to explore</span>
                    </div>
                </div>
                <h4 class="text-center">Copies</h4>
                <div class="progress" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                    <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                        <span><strong>1400</strong> games copies available</span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <hr>
            <div class="text-center">
                <h3 class="post-item-header">Some statistics</h3>
                <p class="lead">Aenean efficitur cursus turpis vitae aliquet. Nullam neque ante, sollicitudin ut ultrices quis, vestibulum vitae velit. Sed interdum dictum libero, a lobortis libero ullamcorper quis. Nam porttitor tincidunt luctus.</p>
            </div>
            <div class="charts-container">
                <div class="row">
                    <div class="col-sm-4">
                        <div
                        class="chart chart-circle no-margin"
                        id="order-chart"
                        data-chart-color-background="#292929"
                        data-chart-color-first="#2F85D7"
                        data-chart-color-second="#095FB1"
                        data-chart-color-third="#00398B"
                        data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0"
                        data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"></div>
                    </div>
                    <div class="col-sm-4">
                        <div
                        class="chart chart-circle no-margin"
                        id="fun-chart"
                        data-chart-color-background="#292929"
                        data-chart-color-first="#2F85D7"
                        data-chart-color-second="#095FB1"
                        data-chart-color-third="#00398B"
                        data-100p-top="transform[swing]:translateY(-25px);opacity[swing]:0"
                        data-75p-top="transform[swing]:translateY(0);opacity[swing]:1"></div>
                    </div>
                    <div class="col-sm-4">
                        <div
                        class="chart chart-circle no-margin"
                        id="device-chart"
                        data-chart-color-background="#292929"
                        data-chart-color-first="#2F85D7"
                        data-chart-color-second="#095FB1"
                        data-chart-color-third="#00398B"
                        data-100p-top="transform[swing]:translateY(25px);opacity[swing]:0"
                        data-75p-top="transform[swing]:translateY(0);opacity[swing]:1"></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <h3 class="post-item-header">Performance</h3>
                <p class="lead">Nulla finibus est leo, nec maximus dolor rutrum quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tristique vel diam at sagittis. Aenean fringilla tortor enim, ac rhoncus felis sollicitudin sit amet.</p>
            </div>
            <div
            class="chart"
            id="gpu-bar"
            data-chart-color="#2F85D7"
            data-100p-top="transform[swing]:translateY(-25px);opacity[swing]:0"
            data-75p-top="transform[swing]:translateY(0);opacity[swing]:1"></div>
        </div>
    </div>

    <!-- Section coming soon (counter) -->
    <div class="standard-section section-promo section-counter" id="comingsoon">
        <div class="triangle triangle-up" data-100p-top="top[swing]:-54px" data-75p-top="top[swing]:-24px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="triangle triangle-down" data-100p-top="bottom[swing]:-70px" data-75p-top="bottom[swing]:-40px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">our new project counter</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Coming Soon</h2>
            </div>
            <div class="text-center margin-b-sections-text" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                <div class="section-icon"><span><i class="fa fa-clock-o" aria-hidden="true"></i></span></div>
            </div>
            <div class="clock" id="clock">
                <div class="row">
                    <div class="col-xs-6 col-sm-3">
                        <div class="text-center">
                             <span class="counter-number" data-100p-top="transform[swing]:rotate(-90deg)" data-65p-top="transform[swing]:rotate(0deg)">
                                <span class="days"></span>
                            </span>
                            <span class="countdown-label bracket">DAYS</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="text-center">
                             <span class="counter-number" data-100p-top="transform[swing]:rotate(-90deg)" data-70p-top="transform[swing]:rotate(0deg)">
                                <span class="hours"></span>
                            </span>
                            <span class="countdown-label bracket">HOURS</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="text-center">
                            <span class="counter-number" data-100p-top="transform[swing]:rotate(-90deg)" data-75p-top="transform[swing]:rotate(0deg)">
                                <span class="mins"></span>
                            </span>
                            <span class="countdown-label bracket">MINUTES</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="text-center">
                            <span class="counter-number" data-100p-top="transform[swing]:rotate(-90deg)" data-80p-top="transform[swing]:rotate(0deg)">
                                <span class="secs"></span>
                            </span>
                            <span class="countdown-label bracket">SECONDS</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="section-description lead text-center">We are currently <strong>working on</strong> a new <span class="highlight">project</span>. Stay tuned for <span class="highlight">more information</span>. Subscribe to our <span class="highlight">newsletter</span> to stay updated on our <strong>progress</strong>.</p>
            <div class="text-center">
                <a href="#" title="Order now!" class="btn btn-transparent btn-xl no-margin" data-100p-top="transform[swing]:translateY(20px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1" data-toggle="modal" data-target="#order-modal"><i class="fa fa-bell-o" aria-hidden="true"></i> Notify me</a>
            </div>
        </div>
    </div>

    <!-- Section blog (articles) -->
    <div class="standard-section section-gray section-blog" id="blog">
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">recent posts</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Blog</h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                <div class="section-icon"><span><i class="fa fa-newspaper-o" aria-hidden="true"></i></span></div>
            </div>
            <p class="section-description text-center lead">Here we publish <span class="highlight">articles</span> and <span class="highlight">posts</span> about <span class="highlight"><span class="main-color">G</span>ame<span class="main-color">R</span></span> and our other <strong>products</strong>. You can <strong>follow</strong> this <strong>section</strong> to be always informed about new <span class="highlight">releases</span> and <span class="highlight">patches</span>. In this section we will also place information about our <span class="highlight">new projects</span>.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="post-item" data-75p-top="transform[swing]:translateX(0px);opacity[swing]:1" data-100p-top="transform[swing]:translateX(-50px);opacity[swing]:0">
                        <div class="post-image">
                            <div class="post-description">
                                <h3>
                                    <a href="blog-item.html" title="New release available">New release available</a>
                                </h3>
                                <p>Praesent condimentum gravida condimentum. Sed ut nisi ante. Praesent ut molestie libero. Etiam luctus porttitor orci, non mollis... <a href="blog-item.html" class="read-more" title="more">more &raquo;</a></p>
                            </div>
                            <a class="post-image-link" href="blog-item.html" title="New release available">
                                <span class="frame"></span>
                                <img class="img-responsive" src="img/blog-1.jpg" alt="screenshot">
                            </a>
                            <div class="post-info">
                                <span class="post-day">19</span>
                                <span class="post-month">October</span>
                                <p class="post-comments">10 comments</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post-item post-item-small" data-75p-top="transform[swing]:translateX(0px);opacity[swing]:1" data-100p-top="transform[swing]:translateX(50px);opacity[swing]:0">
                        <div class="post-image">
                            <div class="post-description">
                                <h3>
                                    <a href="blog-item.html" title="Discount 40% for GameR!">Discount 40% for GameR!</a>
                                </h3>
                                <p>Ut at erat sed lacus vulputate suscipit. Donec tempor enim nec rutrum interdum. Pellentesque ac venenatis turpis... <a href="blog-item.html" class="read-more" title="more">more &raquo;</a></p>
                            </div>
                            <a class="post-image-link" href="blog-item.html" title="Discount 40% for GameR!">
                                <span class="frame"></span>
                                <img class="img-responsive" src="img/blog-2.jpg" alt="screenshot">
                            </a>
                            <div class="post-info">
                                <span class="post-day">02</span>
                                <span class="post-month">October</span>
                                <p class="post-comments">2 comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="post-item post-item-small" data-75p-top="transform[swing]:translateX(0px);opacity[swing]:1" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0">
                        <div class="post-image">
                            <div class="post-description">
                                <h3>
                                    <a href="blog-item.html" title="Patch v 1.3 ready to download">Patch v 1.3 ready to download</a>
                                </h3>
                                <p>Nunc mattis ante a pellentesque vehicula. Quisque in ultricies diam. Aenean ac ex massa. Proin a lacus lacus. Nunc lacinia eu urna... <a href="blog-item.html" class="read-more" title="more">more &raquo;</a></p>
                            </div>
                            <a class="post-image-link" href="blog-item.html" title="Patch v 1.3 ready to download">
                                <span class="frame"></span>
                                <img class="img-responsive" src="img/blog-3.jpg" alt="screenshot">
                            </a>
                            <div class="post-info">
                                <span class="post-day">13</span>
                                <span class="post-month">September</span>
                                <p class="post-comments">2 comments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="btn-more-container" data-100p-top="transform[swing]:translateY(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                    <a href="blog-item.html" class="btn btn-more clearfix" title="More">
                        <span><span>More</span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section partners (carousel) -->
    <div class="standard-section section-promo section-partners" id="partners">
        <div class="triangle triangle-up" data-100p-top="top[swing]:-54px" data-75p-top="top[swing]:-24px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="triangle triangle-down" data-100p-top="bottom[swing]:-70px" data-75p-top="bottom[swing]:-40px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">business friends</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Partners</h2>
            </div>
            <div id="carousel-partners" class="carousel carousel-partners slide" data-ride="carousel" data-interval="7000">
                <div class="carousel-inner">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/facebook.png" alt="Facebook">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/twitter.png" alt="Twitter">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/wordpress.png" alt="Wordpress">
                                    </a>
                                </div>
                            </div>
                            <div class="visible-sm"></div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/linkedin.png" alt="LinkedIn">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/joomla.png" alt="Joomla">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/vimeo.png" alt="Vimeo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/wordpress.png" alt="Wordpress">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/joomla.png" alt="Joomla">
                                    </a>
                                </div>
                            </div>
                            <div class="visible-sm"></div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/facebook.png" alt="Facebook">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/vimeo.png" alt="Vimeo">
                                    </a>
                                </div>
                            </div>
                            <div class="visible-sm"></div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/twitter.png" alt="Twitter">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="client">
                                    <a href="#">
                                        <img class="img-responsive" src="img/linkedin.png" alt="LinkedIn">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-partners" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#carousel-partners" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
                <ol class="carousel-indicators" data-100p-top="transform[swing]:translateY(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateY(0);opacity[swing]:1">
                    <li data-target="#carousel-partners" data-slide-to="0"></li>
                    <li data-target="#carousel-partners" data-slide-to="1" class="active"></li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Section contact details -->
    <div class="standard-section section-contact-details" id="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <h3>Contact Details</h3>
                        <p>Nullam dictum felis eu pede mollis pretium. Cras dapibus. Vivamus elementum se semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae seasne eleifend acenimin viverra quis feugiat a telus. </p>
                        <p><a href="#" title="Keep in touch">Keep in touch</a></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <h3>New York</h3>
                        <p>Nullam dictum felis eu pede mollis pretium. Cras dapibus vivamus <a href="#">newyork@gamer.com</a></p>
                        <p><strong>( 495 ) 663 287 547</strong></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div data-100p-top="transform[swing]:translateX(50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                        <h3>Cracow</h3>
                        <p>Nullam dictum felis eu pede mollis pretium. Cras dapibus vivamus <a href="#">cracow@gamer.com</a></p>
                        <p><strong>( 495 ) 663 287 547</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-content">
            <div id="map" class="map"></div>
            <div class="map-info">
                <div class="overlay"></div>
                <div class="map-info-content">
                    <p data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><span class="glyphicon glyphicon-map-marker"></span> Powisle street 7 &#8226; Cracow</p>
                    <p data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><span class="glyphicon glyphicon-calendar"></span> Open hours &#8226; 8:00 - 17:00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section send us message (contact form) -->
    <div class="standard-section section-promo section-send-us-message" id="send-us-message">
        <div class="triangle triangle-up" data-100p-top="top[swing]:-54px" data-75p-top="top[swing]:-24px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="triangle triangle-down" data-100p-top="bottom[swing]:-70px" data-75p-top="bottom[swing]:-40px">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="text-center">
                <h3 class="standard-subheader bracket" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">keep in touch</h3>
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">Send us message</h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-50px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                <div class="section-icon"><span><i class="fa fa-envelope"></i></span></div>
            </div>
            <p class="section-description text-center lead">Don't hesitate to <span class="highlight">contact with us</span>. If you have any question about <span class="highlight"><span class="main-color">G</span>ame<span class="main-color">R</span></span> or other <span class="highlight">our product</span> you can use the <span class="highlight">form below</span>. We will <span class="highlight">answer</span> <strong>as soon as possible</strong>!</p>
            <form class="form-container form" method="POST" action="#">
                <div class="overlay"></div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Enter name">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="Enter email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Enter phone">
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" cols="40" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-md-offset-9">
                            <div data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
                                <button type="submit" class="btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center" id="follow-us">
        <div class="container">
            <ul class="list-inline">
                <li>
                    <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#" title="Dribble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                    <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="#" title="RSS"><i class="fa fa-rss"></i></a>
                </li>
            </ul>
            <p> &copy; 2016 <a href="http://jakubkwarcinski.pl" title="Jakub Kwarciński - Frontend Developer">Jakub Kwarciński</a></p>
            <p class="text-center"><a href="http://www.freepik.com/free-photos-vectors/people">People vector designed by Freepik</a></p>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEspZc-GBwxrJtw4vS3GjhAzIv7gHVbXw&callback=initMap"></script>

</body>
</html>