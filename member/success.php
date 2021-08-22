<meta http-equiv="Refresh" content="10; url=index.php" />
<?php
//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "https://discord.com/api/webhooks/827603924730642472/FDWAOJtrbMI3eF20c3Ed7RZLb7Qxp5d46kRFC9NoDfDBes50p9-U77mEnU82CHFqaptQ";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    "embeds" => [
        [
            // Embed Title
            "title" => "New order",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => "A new command is available on the admin area",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "3366ff" ),
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch ); ?>

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
                <h2 class="standard-header skrollable skrollable-after" data-100p-top="transform[swing]:translateX(25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1" style="transform: translateX(0px); opacity: 1;"><?php echo $data['success_text']; ?></h2>
            </div>
                <div class="form-content" style="text-align:center;">
                    <div class="row">
                        <div data-100p-top="transform[swing]:translateX(-25px);opacity[swing]:0" data-75p-top="transform[swing]:translateX(0);opacity[swing]:1" class="skrollable skrollable-after" style="transform: translateX(0px); opacity: 1;">
                            <div class="form-group has-feedback">
                                <div class="alert alert-success" role="alert"><b><?php echo $data['success_description']; ?></b></div>
                                <a href="<?php $reponse = $bdd->query('SELECT * FROM setting'); while ($data = $reponse->fetch()) { ?><?php echo $data['discord']; ?><?php } $reponse->closeCursor(); ?>" target="_blank"><button type="button" class="btn btn-primary btn-block"><?php $reponse = $bdd->query('SELECT * FROM home'); while ($data = $reponse->fetch()) { ?><?php echo $data['success_discord_text']; ?><?php } $reponse->closeCursor(); ?></button></a>
                            </div>
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