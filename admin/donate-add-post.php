<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO donate (title, description, img, url) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['description'], $_POST['img'], $_POST['url']));

header('Location: donate.php');

?>