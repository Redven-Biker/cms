<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO faq (title, description) VALUES(?, ?)');
$req->execute(array($_POST['title'], $_POST['description']));

header('Location: faq.php');

?>