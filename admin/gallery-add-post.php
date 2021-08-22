<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO gallery (title, description, img) VALUES(?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['description'], $_POST['img']));

header('Location: gallery.php');

?>