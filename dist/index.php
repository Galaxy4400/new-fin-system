<?php
include_once 'engine/engine.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
  <?php include 'components/layout/head.php' ?>

  <body class="flex min-h-screen flex-col">
    <?php include 'components/layout/header.php' ?>

    <main class="grow"><?php include 'components/sections/main.php' ?></main>

    <?php include 'components/layout/footer.php' ?>
  </body>
</html>
