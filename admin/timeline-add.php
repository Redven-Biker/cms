<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/logout.php');
  } else{ 
?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Timeline Add
                        </h1>
		</div>
       <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
       <div class="card-content">
    <form class="col s12" action="timeline-add-post.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <h5>Title</h5>
          <input type="text" name="title" class="validate" required>
        </div>
        <div class="input-field col s6">
          <h5>Description</h5>
          <input type="text" name="description" class="validate" required>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <h5>Image URL</h5>
          <input type="text" name="img_url" class="validate" required>
        </div>
        <div class="input-field col s6">
          <h5>Low description</h5>
          <input type="text" name="low_description" class="validate" required>
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