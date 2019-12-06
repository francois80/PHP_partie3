<?php
$exercice ='Exercice 5';
include '../header.php';
$compteur = 1;
?>
<h4>
  En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
</h4>
<?php
for($compteur; $compteur <= 15; $compteur++){
?>
  <p>$compteur = <?= $compteur ?> : On y arrive presque !!</p>
<?php
}
?>
</body>
</html>
