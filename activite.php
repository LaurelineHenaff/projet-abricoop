<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activités</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="activites.ico" type="image/x-icon"/>
  </head>

  <body>
  <?php
  //Se connecter
  include_once("utils.php");
  $connexion = connect();

  if ($connexion){
    //Faire la requête
    $sql = "SELECT DISTINCT * FROM activite;";
    //Interroger la BD
    $activite = query($connexion, $sql);
    //Afficher le résultat
    echo "Les sessions triées par activités";
    echo "<form action='activite.php' method='post'>";
    echo "<br>";
    foreach($activite as $a){
      echo "<input type='radio' name=activite id='activite".$a['idActivite']."' value='".$a['idActivite']."'>";
      echo "<label for='activite".$a['idActivite']."'>".$a['nomActivite']."</label><br>";
      echo "<br>";
    }
    echo "<input type='submit' value='Go'></form>";
    echo "<br>";
    if(isset($_POST['activite'])){
      $activite = $_POST['activite'];
      $sql = "SELECT * FROM sessions, activite, habitant
      WHERE sessions.idActivite=activite.idActivite
      AND sessions.idHabitant=habitant.idHabitant
      AND activite.idActivite='".$activite."';";
      $sessions = query($connexion, $sql);
      if ($sessions){
        include_once("fonctions.php");
        afficherSession($sessions);
      }
    }

    disconnect($connexion);
  }
  ?>
  <br>
  <br>
  <button type="button" name="Index"><a href="index.php">Accueil</a></button>

  </body>
</html>
