<?php
setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
function afficherSessions($sessions){
  echo "<table id='activites'>";
  echo "<tr><th>Animateur</th><th>Activité</th><th>Date</th><th>Début</th><th>Fin</th></tr>";
  foreach($sessions as $s){
    echo "<tr>
    <td>".$s['nom']." ".$s['prenom']."</td>
    <td>".$s['nomActivite']."</td>
    <td>".$s['dateSession']."</td>
    <td>".$s['heureDebut']."</td><td>".$s['heureFin']."</td></tr>";
  }
  echo "</table>";
}

function afficherSession($session){
  echo "<table id='activites'>";
  echo "<tr><th>Animateur</th><th>Date</th><th>Début</th><th>Fin</th></tr>";
  foreach($session as $s){
    echo "<tr>
    <td>".$s['nom']." ".$s['prenom']."</td>
    <td>".$s['dateSession']."</td>
    <td>".$s['heureDebut']."</td><td>".$s['heureFin']."</td></tr>";
  }
  echo "</table>";
}

function afficherHabitants($habitants){
  echo "<table id='activites'>";
  echo "<tr><th>Id</th><th>Prenom</th><th>Nom</th><th>Téléphone</th>
  <th>Adresse</th><th>Sexe</th><th>Catégorie</th></tr>";
  foreach($habitants as $h){
    echo "<tr><td>".$h['idHabitant']."</td><td>".$h['prenom']."</td><td>"
    .$h['nom']."</td><td>".$h['tel']."</td><td>".$h['adresse']."</td><td>"
    .$h['sexe']."</td><td>".$h['categorie']."</td></tr>";
  }
  echo "</table>";
}

function afficherVisites($visites){
  echo "<table id='activites'>";
  echo "<tr><th>N°Visite</th><th>Patient</th><th>Infirmiere</th>
  <th>Date de la visite</th><th>Heure de début</th><th>Durée (en minutes)</th>
  <th>Pression systolique</th><th>Pression diastolique</th><th>Taux de sucre</th>
  <th>Motif</th></tr>";
  foreach($visites as $v){
    echo "<tr><td>".$v['idVisite']."</td><td>".$v['nom']." ".$v['prenom']."</td><td>".$v['nomInfirmiere']." ".$v['prenomInfirmiere']."</td><td>".$v['dateVisite']."</td>
    <td>".$v['heureDebut']."</td><td>".$v['duree']."</td><td>".$v['pressionSystolique']."</td><td>".$v['pressionDiastolique']."</td>
    <td>".$v['tauxSucre']."</td><td>".$v['motif']."</td></tr>";
  }
  echo "</table>";
}

function afficherVisite($visites){
  echo "<table id='activites'>";
  echo "<tr><th>N°Visite</th><th>Infirmiere</th>
  <th>Date de la visite</th><th>Heure de début</th><th>Durée</th>
  <th>Pression systolique</th><th>Pression diastolique</th><th>Taux de sucre</th>
  <th>Motif</th></tr>";
  foreach($visites as $v){
    echo "<tr><td>".$v['idVisite']."</td><td>".$v['nomInfirmiere']." ".$v['prenomInfirmiere']."</td><td>".$v['dateVisite']."</td>
    <td>".$v['heureDebut']."</td><td>".$v['duree']."</td><td>".$v['pressionSystolique']."</td><td>".$v['pressionDiastolique']."</td>
    <td>".$v['tauxSucre']."</td><td>".$v['motif']."</td></tr>";
  }
  echo "</table>";
}
 ?>
