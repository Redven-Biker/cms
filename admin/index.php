<?php include('assets/libs/header.php'); ?>
		<div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">Dashboard</h1>
		</div>
            <div id="page-inner">
			<div class="dashboard-cards"> 
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">supervisor_account</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM news');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>USERS</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">local_offer</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM orders');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>PENDING ORDERS</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">rss_feed</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM blog');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>BLOG</strong>
						</div>
						</div>
						</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">code</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM devlog');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>DEVLOG</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">code</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM devlog');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>DONATE</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">photo_library</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM gallery');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>IMAGE GALLERY</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">code</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM devlog');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>FAQ</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">text_snippet</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM news');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>NEWS</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image black">
						<i class="material-icons dp48">shopping_cart</i>
						</div>
						<div class="card-stacked black">
						<div class="card-content">
						<h3><?php 
    $reponse = $bdd->query('SELECT count(*) AS total FROM shop');
    // Display each entry one by one
    while ($data = $reponse->fetch())
    echo $data['total']; ?></h3> 
						</div>
						<div class="card-action">
						<strong>PRODUCTS</strong>
						</div>
						</div>
						</div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
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