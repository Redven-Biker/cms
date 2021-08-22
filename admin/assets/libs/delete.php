<?php
include('../../../libs/config.php');

if(isset($_POST['deleteblog']) and is_numeric($_POST['deleteblog']))
{
  $id = $_POST['deleteblog'];
  $count=$bdd->prepare("DELETE FROM blog WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../blog.php');
};

if(isset($_POST['deletedevlog']) and is_numeric($_POST['deletedevlog']))
{
  $id = $_POST['deletedevlog'];
  $count=$bdd->prepare("DELETE FROM devlog WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../devlog.php');
};

if(isset($_POST['deletedonate']) and is_numeric($_POST['deletedonate']))
{
  $id = $_POST['deletedonate'];
  $count=$bdd->prepare("DELETE FROM donate WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../donate.php');
};

if(isset($_POST['deletefaq']) and is_numeric($_POST['deletefaq']))
{
  $id = $_POST['deletefaq'];
  $count=$bdd->prepare("DELETE FROM faq WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../faq.php');
};

if(isset($_POST['deletegallery']) and is_numeric($_POST['deletegallery']))
{
  $id = $_POST['deletegallery'];
  $count=$bdd->prepare("DELETE FROM gallery WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../gallery.php');
};

if(isset($_POST['deletenews']) and is_numeric($_POST['deletenews']))
{
  $id = $_POST['deletenews'];
  $count=$bdd->prepare("DELETE FROM news WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../news.php');
};

if(isset($_POST['deleteorder']) and is_numeric($_POST['deleteorder']))
{
  $id = $_POST['deleteorder'];
  $count=$bdd->prepare("DELETE FROM orders WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../orders.php');
};

if(isset($_POST['deleteshop']) and is_numeric($_POST['deleteshop']))
{
  $id = $_POST['deleteshop'];
  $count=$bdd->prepare("DELETE FROM shop WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../shop.php');
};

if(isset($_POST['deletestaff']) and is_numeric($_POST['deletestaff']))
{
  $id = $_POST['deletestaff'];
  $count=$bdd->prepare("DELETE FROM staff WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../staff.php');
};

if(isset($_POST['deleteusers']) and is_numeric($_POST['deleteusers']))
{
  $id = $_POST['deleteusers'];
  $count=$bdd->prepare("DELETE FROM users WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../users.php');
};

if(isset($_POST['deletevote']) and is_numeric($_POST['deletevote']))
{
  $id = $_POST['deletevote'];
  $count=$bdd->prepare("DELETE FROM vote WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../vote.php');
};

if(isset($_POST['deleteadmin']) and is_numeric($_POST['deleteadmin']))
{
  $id = $_POST['deleteadmin'];
  $count=$bdd->prepare("DELETE FROM admin WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../admin.php');
};

if(isset($_POST['deletetimeline']) and is_numeric($_POST['deletetimeline']))
{
  $id = $_POST['deletetimeline'];
  $count=$bdd->prepare("DELETE FROM timeline WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../../timeline.php');
};

?>