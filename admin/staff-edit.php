<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/logout.php');
  } else{ 

    if(isset($_POST['Submit']))
    {
      $name=$_POST['name'];
      $grade=$_POST['grade'];
      $facebook_show=$_POST['facebook_show'];
      $facebook_url=$_POST['facebook_url'];
      $twitter_show=$_POST['twitter_show'];
      $twitter_url=$_POST['twitter_url'];
      $youtube_show=$_POST['youtube_show'];
      $youtube_url=$_POST['youtube_url'];
      $discord_show=$_POST['discord_show'];
      $discord_url=$_POST['discord_url'];
      $twitch_show=$_POST['twitch_show'];
      $twitch_url=$_POST['twitch_url'];
      $img=$_POST['img'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE staff set name='$name', grade='$grade', facebook_show='$facebook_show', facebook_url='$facebook_url'
      , twitter_show='$twitter_show', twitter_url='$twitter_url', youtube_show='$youtube_show', youtube_url='$youtube_url', discord_show='$discord_show'
      , discord_url='$discord_url', twitch_show='$twitch_show', twitch_url='$twitch_url', img='$img' where id='$id'");
    $_SESSION['msg']="Updated";
    }?>
<?php $reponse = $bdd->query("SELECT * from staff WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Staff Edit
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
          <h5>Name</h5>
          <input type="text" name="name" class="validate" value="<?php echo $data['name']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Grade</h5>
          <input type="text" name="grade" class="validate" value="<?php echo $data['grade']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Facebook show</h5>
      <input name="facebook_show" type="radio" id="facebook_show" value="none">
      <label for="facebook_show">No</label>
      <input name="facebook_show" type="radio" id="facebook_show_yes" value="">
      <label for="facebook_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Facebook URL</h5>
          <input type="text" name="facebook_url" class="validate" value="<?php echo $data['facebook_url']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Twitter show</h5>
      <input name="twitter_show" type="radio" id="twitter_show" value="none">
      <label for="twitter_show">No</label>
      <input name="twitter_show" type="radio" id="twitter_show_yes" value="">
      <label for="twitter_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Twitter URL</h5>
          <input type="text" name="twitter_url" class="validate" value="<?php echo $data['twitter_url']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Youtube show</h5>
      <input name="youtube_show" type="radio" id="youtube_show" value="none">
      <label for="youtube_show">No</label>
      <input name="youtube_show" type="radio" id="youtube_show_yes" value="">
      <label for="youtube_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Youtube URL</h5>
          <input type="text" name="youtube_url" class="validate" value="<?php echo $data['youtube_url']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Discord show</h5>
      <input name="discord_show" type="radio" id="discord_show" value="none">
      <label for="discord_show">No</label>
      <input name="discord_show" type="radio" id="discord_show_yes" value="">
      <label for="discord_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Discord URL</h5>
          <input type="text" name="discord_url" class="validate" value="<?php echo $data['discord_url']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Twitch show</h5>
      <input name="twitch_show" type="radio" id="twitch_show" value="none">
      <label for="twitch_show">No</label>
      <input name="twitch_show" type="radio" id="twitch_show_yes" value="">
      <label for="twitch_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Twitch URL</h5>
          <input type="text" name="twitch_url" class="validate" value="<?php echo $data['twitch_url']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <h5>Image URL</h5>
          <input type="text" name="img" class="validate" value="<?php echo $data['img']; ?>">
        </div>
      </div>
        <center><button type="submit" name="Submit" class="btn btn-primary">Update</button></center>
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