<?php include('assets/libs/header.php'); ?>
<?php
if (strlen($_SESSION['id']==0)) {
  header('location:assets/libs/logout.php');
  } else{ 
?>
<?php
if(isset($_POST['forminscription'])) {
   $username = htmlspecialchars($_POST['username']);
   $password = sha1($_POST['password']);
   if(!empty($_POST['username']) AND !empty($_POST['password'])) {
         if($username) {
            if(filter_var($username)) {
               $requsername = $bdd->prepare("SELECT * FROM admin WHERE username = ?");
               $requsername->execute(array($username));
               $usernameexist = $requsername->rowCount();
               if($usernameexist == 0) {
                  if($password) {
                     $insertmbr = $bdd->prepare("INSERT INTO admin(username, password) VALUES(?, ?)");
                     $insertmbr->execute(array($username, $password));
                     $erreur = "The account has been created";
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
         <?php
         if(isset($erreur)) {
            echo '<center><font color="red">'.$erreur."</font></center>";
         }
         ?>
         <form method="POST" action="">
      <div class="row">
        <div class="input-field col s6">
          <h5>Username</h5>
          <input type="text" name="username" class="validate" required>
        </div>
        <div class="input-field col s6">
          <h5>Password</h5>
          <input type="text" name="password" class="validate" required>
        </div>
      </div>
        <center><button type="submit" name="forminscription" class="btn btn-primary">Add</button></center>
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