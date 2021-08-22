<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO staff (name, grade, facebook_show, facebook_url, twitter_show, twitter_url, youtube_show, youtube_url, discord_show, discord_url, twitch_show, twitch_url, img) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['grade'], $_POST['facebook_show'], $_POST['facebook_url'], $_POST['twitter_show'], $_POST['twitter_url'], $_POST['youtube_show'], $_POST['youtube_url'], $_POST['discord_show'], $_POST['discord_url'], $_POST['twitch_show'], $_POST['twitch_url'], $_POST['img']));

header('Location: staff.php');

?>