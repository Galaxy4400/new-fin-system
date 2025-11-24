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
    <main class="flex grow">
      <div class="bg-primary-lighter relative flex flex-1 items-center justify-center overflow-hidden py-20 md:py-10">
        <div class="absolute top-1/2 left-1/2 h-[942px] w-[2651px] -translate-1/2">
          <?php include 'components/icons/bg-deco-2.php' ?>
        </div>
        <div class="content-container relative"><?php include 'components/forms/register.php' ?></div>
      </div>
    </main>

    <!-- footer -->
    <?php include 'components/layout/footer.php' ?>
  </body>
</html>
