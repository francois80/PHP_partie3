<?php
$exercice ='Exercice 2';
include '../header.php';
$compteur1 = 0;
$compteur2 = 30;
?>
<h3>
  Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.<br>
  Tant que la première variable n'est pas supérieure à 20 :<br>
  multiplier la première variable avec la deuxième<br>
  afficher le résultat<br>
  incrementer la première variable
</h3>
<p>$compteur1 = <?= $compteur1 ?></p>
<p>$compteur2 = <?= $compteur2 ?></p>
<?php
while($compteur1 <= 20){
  ?>
  <p>$compteur1 * $compteur2 = <?= $compteur1 ?> * <?= $compteur2 ?> = <?= $compteur1 * $compteur2 ?></p>
  <?php
  $compteur1++;
}
?>
</body>
</html>
