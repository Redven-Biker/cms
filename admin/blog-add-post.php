﻿<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO blog (title, description, img_url, low_description) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['description'], $_POST['img_url'], $_POST['low_description']));

header('Location: blog.php');

?>