<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/deconnexion.php');
  } else{ 

    if(isset($_POST['setting_section']))
    {
      $name_website=$_POST['name_website'];
      $name_website_header=$_POST['name_website_header'];
      $meta_description=$_POST['meta_description'];
      $meta_keywords=$_POST['meta_keywords'];
      $paypal_me=$_POST['paypal_me'];
      $discord=$_POST['discord'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE setting set name_website='$name_website', name_website_header='$name_website_header', meta_description='$meta_description'
      , meta_keywords='$meta_keywords', paypal_me='$paypal_me', discord='$discord' where id='$id'");
    $_SESSION['msg']="Updated";
    }
?>
<?php $reponse = $bdd->query("SELECT * from setting WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
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
        <h5>Name website</h5>
        <input type="text" name="name_website" class="validate" value="<?php echo $data['name_website']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Name website header</h5>
        <input type="text" name="name_website_header" class="validate" value="<?php echo $data['name_website_header']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Meta description</h5>
        <input type="text" name="meta_description" class="validate" value="<?php echo $data['meta_description']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Meta keywords</h5>
        <input type="text" name="meta_keywords" class="validate" value="<?php echo $data['meta_keywords']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Paypal me</h5>
        <input type="text" name="paypal_me" class="validate" value="<?php echo $data['paypal_me']; ?>">
      </div>
      <div class="input-field col s6">
        <h5>Discord</h5>
        <input type="text" name="discord" class="validate" value="<?php echo $data['discord']; ?>">
      </div>
      </div>
        <center><button type="submit" name="setting_section" class="btn btn-primary">Update</button></center>
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