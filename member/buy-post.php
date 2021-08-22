<?php
// Calls for the config file
include('../libs/config.php');



// Insert the information
$req = $bdd->prepare('INSERT INTO orders (product, price, name_paypal, email_paypal, discord, username) VALUES(?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['product'], $_POST['price'], $_POST['name_paypal'], $_POST['email_paypal'], $_POST['discord'], $_POST['username']));

// Redirect user back to the add criminal page
header('Location: success.php');

?>