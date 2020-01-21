<?php

require 'class/Carte.php';
require 'class/CarteTriche.php';
require 'class/CarteWTF.php';

//séléction de trois cartes.
$cartes = [
  new Carte(),
  new CarteTriche(),
  new Carte(),
  new CarteWTF(),
];


?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once('include/head.php'); ?>

<body class="bg-dark">

  <main class="vh-100">
    <div class="container h-100 d-flex flex-column justify-content-center py-5 align-items-center">
      <div class="d-flex">
      <!-- Affichage de chaque carte. -->
      <?php foreach ($cartes as $carte) : ?>
      <div class="d-flex flex-column justify-content-between bg-white border shadow rounded p-2 mx-1" style="height:350px; width:250px;">
        <div class="d-flex">
          <div>
            <?php echo $carte->valeur(); ?> <span style="color: <?php echo $carte->couleur(); ?>"><?php echo $carte->enseigne(); ?></span>
          </div>
        </div>
        <div class="d-flex justify-content-center"><span class="display-2" style="color: <?php echo $carte->couleur(); ?>"><?php echo $carte->enseigne(); ?></span></div>
        <div class="d-flex justify-content-end">
          <div>
            <?php echo $carte->valeur(); ?> <span style="color: <?php echo $carte->couleur(); ?>"><?php echo $carte->enseigne(); ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      </div>
      <a href="" class="btn btn-success mt-4 shadow">Recharger</a>

    </div>
  </main>

</body>

</html>
