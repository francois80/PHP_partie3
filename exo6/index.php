<?php
$exercice ='Exercice 6';
include '../header.php';
$compteur = 20;
?>
<h4>
  En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
</h4>
<?php
for($compteur; $compteur >= 0; $compteur--){
?>
  <p>$compteur = <?= $compteur ?> : C'est presque bon !!</p>
<?php
}
?>
</body>
</html>
