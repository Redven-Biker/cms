<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/logout.php');
  } else{ 
?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Staff Add
                        </h1>
		</div>
       <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
       <div class="card-content">
    <form class="col s12" action="staff-add-post.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <h5>Name</h5>
          <input type="text" name="name" class="validate" required>
        </div>
        <div class="input-field col s6">
          <h5>Grade</h5>
          <input type="text" name="grade" class="validate" required>
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
          <input type="text" name="facebook_url" class="validate">
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
          <input type="text" name="twitter_url" class="validate">
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
          <input type="text" name="youtube_url" class="validate">
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
          <input type="text" name="discord_url" class="validate">
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
          <input type="text" name="twitch_url" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <h5>Image URL</h5>
          <input type="text" name="img" class="validate" required>
        </div>
      </div>
        <center><button type="submit" name="Submit" class="btn btn-primary">Add</button></center>
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
<?php } ?>