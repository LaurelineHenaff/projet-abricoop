<?php
//Connexion en PDO
function connect(){

  //Données pour se connecter
  $identifiant = "root";
  $motdepasse = "";
  $serveur = "localhost";
  $bdd = "abricoop";

  //Connexion
  $connexion = null;
  try{
    $connexion = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $identifiant, $motdepasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo 'Echec de connexion'.$e->getMessage();
  }
  return $connexion;
}


  //Déconnexion en PDOException
  function disconnect($connexion){
    $connexion = null;
  }

  //Requête sans résultat (SQL)
  function execute($connexion, $sql){
    $connexion->exec($sql);
  }

  //Requête SQL avec résultat
  function query($connexion, $sql){
    $result = null;
    try{
      //Pour protéger de l'injection SQL
      $statement = $connexion->prepare($sql);
      //Executer la requête
      $statement->execute();
      //Récu^érer le résultat
      $result = $statement->fetchAll();
    }
    catch(PDOException $e){
      echo 'Echec de query'.$e->getMessage();
    }
    return $result;
  }
 ?>
