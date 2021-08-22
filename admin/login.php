<?php
session_start();

include( "../libs/config.php" );

if(isset($_POST['formconnexion'])) {
   $usernameconnect = htmlspecialchars($_POST['usernameconnect']);
   $passwordconnect = sha1($_POST['passwordconnect']);
   if(!empty($usernameconnect) AND !empty($passwordconnect)) {
      $requser = $bdd->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
      $requser->execute(array($usernameconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: index.php");
      } else {
         $erreur = "Identifiant ou Mot de passe incorrect !";
      }
   } else {
      $erreur = "Tous les champs doivent être remplis!";
   }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LSPD LOGIN</title>
  <link rel="stylesheet" href="assets/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Connexion </h2>
        <?php
         if(isset($erreur)) {
            echo '
            <div>
            '.$erreur."
            </div>";
         }
        ?>

    <!-- Login Form -->
    <form method="POST" action="">
      <input type="text" id="login" class="fadeIn second" name="usernameconnect" placeholder="Identifiant" required>
      <input type="password" id="password" class="fadeIn third" name="passwordconnect" placeholder="Mot de passe" required>
      <input type="submit" class="fadeIn fourth" name="formconnexion" value="Connexion">
    </form>

  </div>
</div>
<!-- partial -->
  
</body>
</html>
