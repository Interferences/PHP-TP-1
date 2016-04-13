<?php
extract($_POST);
$score=0;

for($i=1;$i<= $nbq;$i++){
  if(isset($_POST["question". "$i"])){
    $test=$_POST["question". "$i"];
    echo "<li> question ". "$i."." ";
    if($test == "vrai"){
      $score++;
      echo "Bonne Reponse </li>";
    }
    if($test == "faux"){
      echo "Mauvaise Reponse </li>";
    }
    echo "<br>";
  } else {
    echo "<li> question ". "$i". " ";
    echo "Pas de Reponse </li>";
    echo "<br>";
  }
}

echo "Votre score est de : "."$score";

?>