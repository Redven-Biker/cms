<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO vote (title, img, url, description) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['img'], $_POST['url'], $_POST['description']));

header('Location: vote.php');

?>