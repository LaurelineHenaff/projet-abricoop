<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Visites</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="infirmiere.ico" type="image/x-icon"/>
  </head>

  <body>
  <?php
  //Se connecter
  include_once("utils.php");
  $connexion = connect();

  if ($connexion){
    //Faire la requête
    $sql = "SELECT * FROM habitant, visites, infirmiere
    WHERE habitant.idHabitant = visites.idPatient
    AND visites.idInfirmiere = infirmiere.idInfirmiere
    GROUP BY idHabitant;";
    //Interroger la BD
    $visites = query($connexion, $sql);
    //Afficher le résultat
      echo "Les visites rangées par patient";
      echo "<form action='visite.php' method='post'>";
      echo "<br>";
      foreach($visites as $v){
        echo "<input type='radio' name=visite id='visite".$v['idHabitant']."' value='".$v['idHabitant']."'>";
        echo "<label for='visite'".$v['idHabitant']."'>".$v['prenom']." ".$v['nom']."</label><br>";
        echo "<br>";
      }
      echo "<input type='submit' value='Go'></form>";
      echo "<br>";
      if(isset($_POST['visite'])){
        $visite = $_POST['visite'];
        $sql = "SELECT * FROM visites, habitant, infirmiere
        WHERE visites.idPatient = habitant.idHabitant
        AND visites.idInfirmiere = infirmiere.idInfirmiere
        AND habitant.idHabitant='".$visite."';";
        $visites = query($connexion, $sql);
        if($visites){
            include_once("fonctions.php");
            afficherVisite($visites);
          }
      }
    disconnect($connexion);
  }
  ?>
  <br>
  <button type="button" name="Index"><a href="index.php">Accueil</a></button>

  </body>
</html>
