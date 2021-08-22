<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/logout.php');
  } else{ 

    if(isset($_POST['Submit']))
    {
      $title=$_POST['title'];
      $img=$_POST['img'];
      $description=$_POST['description'];
      $id=intval($_GET['id']);
      $reponse = $bdd->query("UPDATE gallery set title='$title', img='$img', description='$description' where id='$id'");
    $_SESSION['msg']="Updated";
    }?>
<?php $reponse = $bdd->query("SELECT * from gallery WHERE id='".$_GET['id']."'"); while ($data = $reponse->fetch()) { ?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Gallery Edit
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
          <input type="text" name="img" class="validate" value="<?php echo $data['img']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <h5>Description</h5>
					<textarea id="textarea1" name="description" class="materialize-textarea"><?php echo $data['description']; ?></textarea>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <h5>Date</h5>
          <input type="text" class="validate" value="<?php echo $data['date']; ?>" readonly>
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