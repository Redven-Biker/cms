<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/deconnexion.php');
  } else{ 

    if(isset($_POST['twitter_section']))
    {
      $twitter_show=$_POST['twitter_show'];
      $twitter_url=$_POST['twitter_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE footer set twitter_show='$twitter_show', twitter_url='$twitter_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['youtube_section']))
    {
      $youtube_show=$_POST['youtube_show'];
      $youtube_url=$_POST['youtube_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE footer set youtube_show='$youtube_show', youtube_url='$youtube_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['discord_section']))
    {
      $discord_show=$_POST['discord_show'];
      $discord_url=$_POST['discord_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE footer set discord_show='$discord_show', discord_url='$discord_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['facebook_section']))
    {
      $facebook_show=$_POST['facebook_show'];
      $facebook_url=$_POST['facebook_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE footer set facebook_show='$facebook_show', facebook_url='$facebook_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['twitch_section']))
    {
      $twitch_show=$_POST['twitch_show'];
      $twitch_url=$_POST['twitch_url'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE footer set twitch_show='$twitch_show', twitch_url='$twitch_url' where id='$id'");
    $_SESSION['msg']="Updated";
    }

    if(isset($_POST['footer_name_section']))
    {
      $footer_name=$_POST['footer_name'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE footer set footer_name='$footer_name' where id='$id'");
    $_SESSION['msg']="Updated";
    }
?>
<?php $reponse = $bdd->query("SELECT * from footer WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Setting
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
      <h5>Show twitter</h5>
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
      <h5>Show youtube</h5>
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
      <h5>Show discord</h5>
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
      <h5>Show facebook</h5>
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
      <h5>Show twitch</h5>
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
    
    <div class="card">
       <div class="card-content">
    <form class="col s12" method="post" action="">
      <div class="row">
      <div class="input-field col s12">
        <h5>Footer Name</h5>
        <input type="text" name="footer_name" class="validate" value="<?php echo $data['footer_name']; ?>">
      </div>
      </div>
        <center><button type="submit" name="footer_name_section" class="btn btn-primary">Update section Footer Name</button></center>
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