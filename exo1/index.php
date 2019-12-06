<?php
$exercice ='Exercice 1';
include '../header.php';
$compteur = 0;
?>
<h1>
  Créer une variable et l'initialiser à 0.<br>
  Tant que cette variable n'atteint pas 10, il faut :<br>
  l'afficher<br>
  l'incrementer

</h1>
<?php
while($compteur <= 10){
  ?>
  <p>$compteur = <?= $compteur ?></p>
  <?php
  $compteur++;
}
?>
</body>
</html>
