<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Habitants</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="habitant.ico" type="image/x-icon"/>
  </head>

  <body>
  <h2 class="habitants">Tous les habitants</h2>
  <?php
  //Se connecter
  include_once("utils.php");
  $connexion = connect();

  if ($connexion){
    //Faire la requête
    $sql = "SELECT DISTINCT * FROM habitant;";
    //Interroger la BD
    $habitants = query($connexion, $sql);
    //Afficher le résultat
    if($habitants){
        include_once("fonctions.php");
        afficherHabitants($habitants);
      }
    disconnect($connexion);
  }
  ?>
  <br>
  <button type="button" name="Index"><a href="index.php">Accueil</a></button>

  </body>
</html>
