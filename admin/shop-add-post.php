<?php
include('../libs/config.php');

$req = $bdd->prepare('INSERT INTO shop (title, price, text_1_show, text_1, text_2_show, text_2, text_3_show, text_3, text_4_show, text_4, text_5_show, text_5, text_6_show, text_6, text_7_show, text_7, text_8_show, text_8, text_9_show, text_9, text_10_show, text_10) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['price'], $_POST['text_1_show'], $_POST['text_1'], $_POST['text_2_show'], $_POST['text_2'], $_POST['text_3_show'], $_POST['text_3'], $_POST['text_4_show'], $_POST['text_4'], $_POST['text_5_show'], $_POST['text_5'], $_POST['text_6_show'], $_POST['text_6'], $_POST['text_7_show'], $_POST['text_7'], $_POST['text_8_show'], $_POST['text_8'], $_POST['text_9_show'], $_POST['text_9'], $_POST['text_10_show'], $_POST['text_10']));

header('Location: shop.php');

?>