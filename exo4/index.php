<?php
$exercice ='Exercice 4';
include '../header.php';
$compteur = 1;
?>
<h4>
  Créer une variable et l'initialiser à 1.<br>
  Tant que cette variable n'atteint pas 10, il faut :<br>
  l'afficher<br>
  l'incrementer de la moitié de sa valeur

</h4>
<?php
while($compteur <= 10){
  ?>
  <p>$compteur = <?= $compteur ?></p>
  <?php
  $compteur = $compteur + ($compteur / 2);
}
?>
</body>
</html>
