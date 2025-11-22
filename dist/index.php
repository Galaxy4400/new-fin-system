<?php
include_once 'engine/engine.php';
?>

<!DOCTYPE html>
<html lang="<?= $currentLang ?>">
  <!-- header -->
  <?php include 'components/layout/head.php' ?>

  <body class="flex min-h-screen flex-col">
    <!-- skeleton -->
    <?php include 'components/layout/skeleton.php' ?>

    <!-- header -->
    <?php include 'components/layout/header.php' ?>

    <!-- main -->
    <main class="grow">
      <!-- main section -->
      <?php include 'components/sections/main.php' ?>
      <!-- experience section -->
      <?php include 'components/sections/experience.php' ?>
    </main>

    <!-- footer -->
    <?php include 'components/layout/footer.php' ?>
  </body>
</html>
