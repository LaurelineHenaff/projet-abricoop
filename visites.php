<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Visites</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="infirmiere.ico" type="image/x-icon"/>
  </head>

  <body>    
  <h2 class="visites">Toutes les visites</h2>
  <?php
  //Se connecter
  include_once("utils.php");
  $connexion = connect();

  if ($connexion){
    //Faire la requête
    $sql = "SELECT * FROM visites JOIN habitant JOIN infirmiere
    WHERE visites.idPatient = habitant.idHabitant
    AND visites.idInfirmiere = infirmiere.idInfirmiere
    ORDER BY idVisite DESC";
    //Interroger la BD
    $visite = query($connexion, $sql);
    //Afficher le résultat
      if($visite){
          include_once("fonctions.php");
          afficherVisites($visite);
        }
    disconnect($connexion);
  }
  ?>
  <br>
  <button type="button" name="Index"><a href="index.php">Accueil</a></button>

  </body>
</html>
