<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sessions</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/ico" href="img/activites.ico"/>
  </head>

  <body style="text-align :center;">
    <h2>Toutes les sessions</h2>
  <?php
  //Se connecter
  include_once("utils.php");
  $connexion = connect();

  if ($connexion){
    //Faire la requête
    $sql = "SELECT DISTINCT * FROM sessions JOIN habitant JOIN activite
    ON sessions.idHabitant = habitant.idHabitant
    AND sessions.idActivite = activite.idActivite
    ORDER BY habitant.idHabitant, sessions.dateSession;";
    //Interroger la BDD
    $sessions = query($connexion, $sql);
    //Afficher le résultat
    include_once("fonctions.php");
    afficherSessions($sessions);
    disconnect($connexion);
    }

  ?>
  <br>
  <button type="button" name="Index"><a href="index.php">Accueil</a></button>

  </body>
</html>
