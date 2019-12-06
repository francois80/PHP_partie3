<?php
$exercice ='Exercice 7';
include '../header.php';
$compteur = 1;
?>
<h4>
  En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
</h4>
<?php
for($compteur; $compteur <= 100; $compteur+=15){
?>
  <p>$compteur = <?= $compteur ?> : On tient le bon bout!!</p>
<?php
}
?>
</body>
</html>
