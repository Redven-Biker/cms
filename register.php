<?php include('libs/header.php'); ?>
<?php include('config.php'); ?>
<?php
if(isset($_POST['forminscription'])) {
   $username = htmlspecialchars($_POST['username']);
   $password = sha1($_POST['password']);
   if(!empty($_POST['username']) AND !empty($_POST['password'])) {
         if($username) {
            if(filter_var($username)) {
               $requsername = $bdd->prepare("SELECT * FROM users WHERE username = ?");
               $requsername->execute(array($username));
               $usernameexist = $requsername->rowCount();
               if($usernameexist == 0) {
                  if($password) {
                     $insertmbr = $bdd->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
                     $insertmbr->execute(array($username, $password));
                     $erreur = "Your account has been created and you can now login";
                  } else {
                     $erreur = "Passwords do not match!";
                  }
               } else {
                  $erreur = "Username is already in use!";
               }
         } else {
            $erreur = "Password do not match!";
         }
      } else {
         $erreur = "Username can be a maximum of 32 characters!";
      }
   } else {
      $erreur = "All of the fields must be filled!";
   }
}
?>
    <!-- Section timeline -->
    <?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?>
    <div class="standard-section section-gray section-timeline" id="timeline" style=";padding-top:10%">
        <div class="container">
            <div class="text-center">
                <h2 class="standard-header" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1"><?php echo $data['register_text_section']; ?></h2>
            </div>
            <div class="text-center" data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1">
            </div>
            <div class="timeline no-margin">
            <form class="form-container form" method="POST" action="">
                <div class="overlay"></div>
                <div class="form-content">
         <?php
         if(isset($erreur)) {
            echo '<center><font color="red">'.$erreur."</font></center>";
         }
         ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="username" placeholder="<?php echo $data['username_register_text_section']; ?>" required>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" name="password" placeholder="<?php echo $data['password_register_text_section']; ?>" required>
                                </div>
                            <button type="submit" name="forminscription" class="btn btn-primary btn-block"><?php echo $data['btn_register_button_section']; ?></button>
                        </div>
                    </div>
                </div>
            </form>
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