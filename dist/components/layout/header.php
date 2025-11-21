<header class="bg-white py-3 shadow md:py-5">
  <div class="content-container">
    <div class="flex items-center justify-between gap-8">
      <a class="h3 uppercase" href="<?= url() ?>"><?= $offer_name ?></a>
      <?php include 'components/elements/header-menu.php' ?>
      <div class="flex items-center gap-4">
        <div class="hidden sm:block"><?php include 'components/elements/lang-selector.php' ?></div>
        <a class="btn-primary" href="<?= url('sign-up') ?>">Sign up</a>
      </div>
      <button class="menu-icon" data-menu-icon><?php include 'components/icons/menu-icon.php' ?></button>
    </div>
  </div>
  <?php include 'components/elements/mobile-menu.php' ?>
</header>
