<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/deconnexion.php');
  } else{ 

    if(isset($_POST['header_1_section']))
    {
      $login_header=$_POST['login_header'];
      $register_header=$_POST['register_header'];
      $preload=$_POST['preload'];
      $username_login_header=$_POST['username_login_header'];
      $password_login_header=$_POST['password_login_header'];
      $btn_login_header=$_POST['btn_login_header'];
      $btn_register_header=$_POST['btn_register_header'];
      $id_incorrect=$_POST['id_incorrect'];
      $all_incorrect=$_POST['all_incorrect'];
      $or_login_header=$_POST['or_login_header'];
      $home_header=$_POST['home_header'];
      $dropdown_other_header=$_POST['dropdown_other_header'];
      $logout_header=$_POST['logout_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set login_header='$login_header', register_header='$register_header', preload='$preload', username_login_header='$username_login_header'
      , password_login_header='$password_login_header', btn_login_header='$btn_login_header', or_login_header='$or_login_header', btn_register_header='$btn_register_header'
      , or_login_header='$or_login_header', home_header='$home_header', dropdown_other_header='$dropdown_other_header', id_incorrect='$id_incorrect',
       all_incorrect='$all_incorrect', logout_header='$logout_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['news_header_section']))
    {
      $show_news_header=$_POST['show_news_header'];
      $news_header=$_POST['news_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_news_header='$show_news_header', news_header='$news_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['devlog_header_section']))
    {
      $show_devlog_header=$_POST['show_devlog_header'];
      $devlog_header=$_POST['devlog_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_devlog_header='$show_devlog_header', devlog_header='$devlog_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['blog_header_section']))
    {
      $show_blog_header=$_POST['show_blog_header'];
      $blog_header=$_POST['blog_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_blog_header='$show_blog_header', blog_header='$blog_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['shop_header_section']))
    {
      $show_shop_header=$_POST['show_shop_header'];
      $shop_header=$_POST['shop_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_shop_header='$show_shop_header', shop_header='$shop_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['gallery_header_section']))
    {
      $show_gallery_header=$_POST['show_gallery_header'];
      $gallery_header=$_POST['gallery_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_gallery_header='$show_gallery_header', gallery_header='$gallery_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['faq_header_section']))
    {
      $show_faq_header=$_POST['show_faq_header'];
      $faq_header=$_POST['faq_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_faq_header='$show_faq_header', faq_header='$faq_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['timeline_header_section']))
    {
      $show_timeline_header=$_POST['show_timeline_header'];
      $timeline_header=$_POST['timeline_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_timeline_header='$show_timeline_header', timeline_header='$timeline_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['staff_header_section']))
    {
      $show_staff_header=$_POST['show_staff_header'];
      $staff_header=$_POST['staff_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_staff_header='$show_staff_header', staff_header='$staff_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['donate_header_section']))
    {
      $show_donate_header=$_POST['show_donate_header'];
      $donate_header=$_POST['donate_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_donate_header='$show_donate_header', donate_header='$donate_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['vote_header_section']))
    {
      $show_vote_header=$_POST['show_vote_header'];
      $vote_header=$_POST['vote_header'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set show_vote_header='$show_vote_header', vote_header='$vote_header' where id='$id'");
    $_SESSION['msg']="Updated";
    }
    
    if(isset($_POST['twitter_section']))
    {
      $twitter_show=$_POST['twitter_show'];
      $twitter_url=$_POST['twitter_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set twitter_show='$twitter_show', twitter_url='$twitter_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['youtube_section']))
    {
      $youtube_show=$_POST['youtube_show'];
      $youtube_url=$_POST['youtube_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set youtube_show='$youtube_show', youtube_url='$youtube_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['discord_section']))
    {
      $discord_show=$_POST['discord_show'];
      $discord_url=$_POST['discord_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set discord_show='$discord_show', discord_url='$discord_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['facebook_section']))
    {
      $facebook_show=$_POST['facebook_show'];
      $facebook_url=$_POST['facebook_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set facebook_show='$facebook_show', facebook_url='$facebook_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['twitch_section']))
    {
      $twitch_show=$_POST['twitch_show'];
      $twitch_url=$_POST['twitch_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE header set twitch_show='$twitch_show', twitch_url='$twitch_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }
?>
<?php $reponse = $bdd->query("SELECT * from header WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Header
                        </h1>
                      <p align="center" style="color:black; font-size: 20px"><b><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></b></p>
		</div>
       <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
        <h5>Login header</h5>
        <input type="text" name="login_header" class="validate" value="<?php echo $data['login_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Register header</h5>
        <input type="text" name="register_header" class="validate" value="<?php echo $data['register_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Preload</h5>
        <input type="text" name="preload" class="validate" value="<?php echo $data['preload']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Username login header</h5>
        <input type="text" name="username_login_header" class="validate" value="<?php echo $data['username_login_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Password login header</h5>
        <input type="text" name="password_login_header" class="validate" value="<?php echo $data['password_login_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Button login header</h5>
        <input type="text" name="btn_login_header" class="validate" value="<?php echo $data['btn_login_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Or login header</h5>
        <input type="text" name="or_login_header" class="validate" value="<?php echo $data['or_login_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Button register header</h5>
        <input type="text" name="btn_register_header" class="validate" value="<?php echo $data['btn_register_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Text error login 1 header</h5>
        <input type="text" name="id_incorrect" class="validate" value="<?php echo $data['id_incorrect']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Text error login 2 header</h5>
        <input type="text" name="all_incorrect" class="validate" value="<?php echo $data['all_incorrect']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Home nav header</h5>
        <input type="text" name="home_header" class="validate" value="<?php echo $data['home_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Dropdown other nav header</h5>
        <input type="text" name="dropdown_other_header" class="validate" value="<?php echo $data['dropdown_other_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Logout header</h5>
        <input type="text" name="logout_header" class="validate" value="<?php echo $data['logout_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="header_1_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show news nav header</h5>
      <input name="show_news_header" type="radio" id="show_news_header_no" value="none">
      <label for="show_news_header_no">No</label>
      <input name="show_news_header" type="radio" id="show_news_header_yes" value="">
      <label for="show_news_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text news nav header</h5>
        <input type="text" name="news_header" class="validate" value="<?php echo $data['news_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="news_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show devlog nav header</h5>
      <input name="show_devlog_header" type="radio" id="show_devlog_header_no" value="none">
      <label for="show_devlog_header_no">No</label>
      <input name="show_devlog_header" type="radio" id="show_devlog_header_yes" value="">
      <label for="show_devlog_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text devlog nav header</h5>
        <input type="text" name="devlog_header" class="validate" value="<?php echo $data['devlog_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="devlog_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show blog nav header</h5>
      <input name="show_blog_header" type="radio" id="show_blog_header_no" value="none">
      <label for="show_blog_header_no">No</label>
      <input name="show_blog_header" type="radio" id="show_blog_header_yes" value="">
      <label for="show_blog_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text blog nav header</h5>
        <input type="text" name="blog_header" class="validate" value="<?php echo $data['blog_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="blog_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show shop nav header</h5>
      <input name="show_shop_header" type="radio" id="show_shop_header_no" value="none">
      <label for="show_shop_header_no">No</label>
      <input name="show_shop_header" type="radio" id="show_shop_header_yes" value="">
      <label for="show_shop_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text shop nav header</h5>
        <input type="text" name="shop_header" class="validate" value="<?php echo $data['shop_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="shop_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show gallery nav header</h5>
      <input name="show_gallery_header" type="radio" id="show_gallery_header_no" value="none">
      <label for="show_gallery_header_no">No</label>
      <input name="show_gallery_header" type="radio" id="show_gallery_header_yes" value="">
      <label for="show_gallery_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text gallery nav header</h5>
        <input type="text" name="gallery_header" class="validate" value="<?php echo $data['gallery_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="gallery_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show faq nav header</h5>
      <input name="show_faq_header" type="radio" id="show_faq_header_no" value="none">
      <label for="show_faq_header_no">No</label>
      <input name="show_faq_header" type="radio" id="show_faq_header_yes" value="">
      <label for="show_faq_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text faq nav header</h5>
        <input type="text" name="faq_header" class="validate" value="<?php echo $data['faq_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="faq_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show timeline nav header</h5>
      <input name="show_timeline_header" type="radio" id="show_timeline_header_no" value="none">
      <label for="show_timeline_header_no">No</label>
      <input name="show_timeline_header" type="radio" id="show_timeline_header_yes" value="">
      <label for="show_timeline_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text timeline nav header</h5>
        <input type="text" name="timeline_header" class="validate" value="<?php echo $data['timeline_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="timeline_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show staff nav header</h5>
      <input name="show_staff_header" type="radio" id="show_staff_header_no" value="none">
      <label for="show_staff_header_no">No</label>
      <input name="show_staff_header" type="radio" id="show_staff_header_yes" value="">
      <label for="show_staff_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text staff nav header</h5>
        <input type="text" name="staff_header" class="validate" value="<?php echo $data['staff_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="staff_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show donate nav header</h5>
      <input name="show_donate_header" type="radio" id="show_donate_header_no" value="none">
      <label for="show_donate_header_no">No</label>
      <input name="show_donate_header" type="radio" id="show_donate_header_yes" value="">
      <label for="show_donate_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text donate nav header</h5>
        <input type="text" name="donate_header" class="validate" value="<?php echo $data['donate_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="donate_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show vote nav header</h5>
      <input name="show_vote_header" type="radio" id="show_vote_header_no" value="none">
      <label for="show_vote_header_no">No</label>
      <input name="show_vote_header" type="radio" id="show_vote_header_yes" value="">
      <label for="show_vote_header_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Text vote nav header</h5>
        <input type="text" name="vote_header" class="validate" value="<?php echo $data['vote_header']; ?>">
      </div>
      </div>
        <center><button type="submit" name="vote_header_section" class="btn btn-primary">Update section</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
  <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show twitter social nav header</h5>
      <input name="twitter_show" type="radio" id="twitter_no" value="none">
      <label for="twitter_no">No</label>
      <input name="twitter_show" type="radio" id="twitter_yes" value="">
      <label for="twitter_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Twitter URL</h5>
        <input type="text" name="twitter_url" class="validate" value="<?php echo $data['twitter_url']; ?>">
      </div>
      </div>
        <center><button type="submit" name="twitter_section" class="btn btn-primary">Update section twitter</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show youtube social nav header</h5>
      <input name="youtube_show" type="radio" id="youtube_no" value="none">
      <label for="youtube_no">No</label>
      <input name="youtube_show" type="radio" id="youtube_yes" value="">
      <label for="youtube_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Youtube URL</h5>
        <input type="text" name="youtube_url" class="validate" value="<?php echo $data['youtube_url']; ?>">
      </div>
      </div>
        <center><button type="submit" name="youtube_section" class="btn btn-primary">Update section youtube</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show discord social nav header</h5>
      <input name="discord_show" type="radio" id="discord_no" value="none">
      <label for="discord_no">No</label>
      <input name="discord_show" type="radio" id="discord_yes" value="">
      <label for="discord_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Discord URL</h5>
        <input type="text" name="discord_url" class="validate" value="<?php echo $data['discord_url']; ?>">
      </div>
      </div>
        <center><button type="submit" name="discord_section" class="btn btn-primary">Update section discord</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show facebook social nav header</h5>
      <input name="facebook_show" type="radio" id="facebook_no" value="none">
      <label for="facebook_no">No</label>
      <input name="facebook_show" type="radio" id="facebook_yes" value="">
      <label for="facebook_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Facebook URL</h5>
        <input type="text" name="facebook_url" class="validate" value="<?php echo $data['facebook_url']; ?>">
      </div>
      </div>
        <center><button type="submit" name="facebook_section" class="btn btn-primary">Update section facebook</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s6">
      <h5>Show twitch social nav header</h5>
      <input name="twitch_show" type="radio" id="twitch_no" value="none">
      <label for="twitch_no">No</label>
      <input name="twitch_show" type="radio" id="twitch_yes" value="">
      <label for="twitch_yes">Yes</label>
      </div>
      <div class="input-field col s6">
        <h5>Twitch URL</h5>
        <input type="text" name="twitch_url" class="validate" value="<?php echo $data['twitch_url']; ?>">
      </div>
      </div>
        <center><button type="submit" name="twitch_section" class="btn btn-primary">Update section twitch</button></center>
    </form>
	<div class="clearBoth"></div>
  </div>
  </div>
 </div>	
</div>		

        
                                </div>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
                <!-- /.col-lg-12 --> 
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>
<?php } } ?>