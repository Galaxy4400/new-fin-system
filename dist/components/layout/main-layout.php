<!DOCTYPE html>
<html class="scroll-smooth" lang="<?= $currentLang ?>">
  <!-- head -->
  <?php include 'components/layout/head.php' ?>

  <body class="flex min-h-screen flex-col">
    <!-- skeleton -->
    <?php include 'components/layout/skeleton.php' ?>

    <!-- header -->
    <?php include 'components/layout/header.php' ?>

    <!-- main -->
    <main class="flex grow flex-col overflow-hidden"><?php include $pageFileName ?></main>

    <!-- footer -->
    <?php include 'components/layout/footer.php' ?>
  </body>
</html>
