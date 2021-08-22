<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/logout.php');
  } else{ 

    if(isset($_POST['Submit']))
    {
      $title=$_POST['title'];
      $price=$_POST['price'];
      $text_1_show=$_POST['text_1_show'];
      $text_1=$_POST['text_1'];
      $text_2_show=$_POST['text_2_show'];
      $text_2=$_POST['text_2'];
      $text_3_show=$_POST['text_3_show'];
      $text_3=$_POST['text_3'];
      $text_4_show=$_POST['text_4_show'];
      $text_4=$_POST['text_4'];
      $text_5_show=$_POST['text_5_show'];
      $text_5=$_POST['text_5'];
      $text_6_show=$_POST['text_6_show'];
      $text_6=$_POST['text_6'];
      $text_7_show=$_POST['text_7_show'];
      $text_7=$_POST['text_7'];
      $text_8_show=$_POST['text_8_show'];
      $text_8=$_POST['text_8'];
      $text_9_show=$_POST['text_9_show'];
      $text_9=$_POST['text_9'];
      $text_10_show=$_POST['text_10_show'];
      $text_10=$_POST['text_10'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE shop set title='$title', price='$price', text_1_show='$text_1_show', text_1='$text_1'
      , text_2_show='$text_2_show', text_2='$text_1', text_3_show='$text_3_show', text_3='$text_3', text_4_show='$text_4_show', text_4='$text_4'
      , text_5_show='$text_5_show', text_5='$text_5', text_6_show='$text_6_show', text_6='$text_6', text_7_show='$text_7_show', text_7='$text_7'
      , text_8_show='$text_8_show', text_8='$text_8', text_9_show='$text_9_show', text_9='$text_9', text_10_show='$text_10_show', text_10='$text_10' where id='$id'");
    $_SESSION['msg']="Updated";
    }?>
<?php $reponse = $bdd->query("SELECT * from shop WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                        Shop Edit
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
          <h5>Title</h5>
          <input type="text" name="title" class="validate" value="<?php echo $data['title']; ?>">
        </div>
        <div class="input-field col s6">
          <h5>Image</h5>
          <input type="text" name="price" class="validate" value="<?php echo $data['price']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 1 show</h5>
      <input name="text_1_show" type="radio" id="text_1_show" value="none">
      <label for="text_1_show">No</label>
      <input name="text_1_show" type="radio" id="text_1_show_yes" value="">
      <label for="text_1_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 1</h5>
          <input type="text" name="text_1" class="validate" value="<?php echo $data['text_1']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 2 show</h5>
      <input name="text_2_show" type="radio" id="text_2_show" value="none">
      <label for="text_2_show">No</label>
      <input name="text_2_show" type="radio" id="text_2_show_yes" value="">
      <label for="text_2_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 2</h5>
          <input type="text" name="text_2" class="validate" value="<?php echo $data['text_2']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 3 show</h5>
      <input name="text_3_show" type="radio" id="text_3_show" value="none">
      <label for="text_3_show">No</label>
      <input name="text_3_show" type="radio" id="text_3_show_yes" value="">
      <label for="text_3_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 3</h5>
          <input type="text" name="text_3" class="validate" value="<?php echo $data['text_3']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 4 show</h5>
      <input name="text_4_show" type="radio" id="text_4_show" value="none">
      <label for="text_4_show">No</label>
      <input name="text_4_show" type="radio" id="text_4_show_yes" value="">
      <label for="text_4_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 4</h5>
          <input type="text" name="text_4" class="validate" value="<?php echo $data['text_4']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 5 show</h5>
      <input name="text_5_show" type="radio" id="text_5_show" value="none">
      <label for="text_5_show">No</label>
      <input name="text_5_show" type="radio" id="text_5_show_yes" value="">
      <label for="text_5_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 5</h5>
          <input type="text" name="text_5" class="validate" value="<?php echo $data['text_5']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 6 show</h5>
      <input name="text_6_show" type="radio" id="text_6_show" value="none">
      <label for="text_6_show">No</label>
      <input name="text_6_show" type="radio" id="text_6_show_yes" value="">
      <label for="text_6_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 6</h5>
          <input type="text" name="text_6" class="validate" value="<?php echo $data['text_6']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 7 show</h5>
      <input name="text_7_show" type="radio" id="text_7_show" value="none">
      <label for="text_7_show">No</label>
      <input name="text_7_show" type="radio" id="text_7_show_yes" value="">
      <label for="text_7_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 7</h5>
          <input type="text" name="text_7" class="validate" value="<?php echo $data['text_7']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 8 show</h5>
      <input name="text_8_show" type="radio" id="text_8_show" value="none">
      <label for="text_8_show">No</label>
      <input name="text_8_show" type="radio" id="text_8_show_yes" value="">
      <label for="text_8_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 8</h5>
          <input type="text" name="text_8" class="validate" value="<?php echo $data['text_8']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 9 show</h5>
      <input name="text_9_show" type="radio" id="text_9_show" value="none">
      <label for="text_9_show">No</label>
      <input name="text_9_show" type="radio" id="text_9_show_yes" value="">
      <label for="text_9_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 9</h5>
          <input type="text" name="text_9" class="validate" value="<?php echo $data['text_9']; ?>">
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
      <h5>Text 10 show</h5>
      <input name="text_10_show" type="radio" id="text_10_show" value="none">
      <label for="text_10_show">No</label>
      <input name="text_10_show" type="radio" id="text_10_show_yes" value="">
      <label for="text_10_show_yes">Yes</label>
      </div>
        <div class="input-field col s6">
          <h5>Text 10</h5>
          <input type="text" name="text_10" class="validate" value="<?php echo $data['text_10']; ?>">
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