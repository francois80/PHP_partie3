<?php
$exercice ='Exercice 8';
include '../header.php';
?>
<h4>
  En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
</h4>
<?php
for($compteur = 200; $compteur >= 0; $compteur-=12){
?>
  <p>$compteur = <?= $compteur ?> : C'est presque bon !!</p>
<?php
}
?>
</body>
</html>
