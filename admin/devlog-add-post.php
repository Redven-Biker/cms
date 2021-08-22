<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO devlog (title, description, img_url, low_description, version) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['description'], $_POST['img_url'], $_POST['low_description'], $_POST['version']));

header('Location: devlog.php');

?>