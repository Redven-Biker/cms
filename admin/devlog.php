<?php include('assets/libs/header.php'); ?>
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Devlog
                        </h1>
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-content">
                            <center><a href="devlog-add.php"><button style="margin:2%;" type="button" class="btn btn-primary">Add Devlog</button></a></center>
                            <div class="table-responsive" style="overflow: hidden;">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Low Description</th>
                                            <th>Version</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $reponse = $bdd->query('SELECT * FROM devlog'); while ($data = $reponse->fetch()) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['low_description']; ?></td>
                                            <td><?php echo $data['version']; ?></td>
                                            <td><?php echo $data['date']; ?></td>
                                            <form action='assets/libs/delete.php' method='post'>
                                            <?php echo '<td class="center"><a href="devlog-edit.php?id='. $data['id'] .'"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <button type="submit" name="deletedevlog" class="btn btn-danger w-100 py-1" value="' . $data['id'] . '">Delete</button></td>'; ?>
                                                </form>
                                        </tr>
                                        <?php } $reponse->closeCursor(); ?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
            </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
	 <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>
