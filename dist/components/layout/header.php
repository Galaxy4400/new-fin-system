<header class="bg-white py-3 shadow md:py-5">
  <div class="max-w-container bs-content mx-auto px-4">
    <div class="flex items-center justify-between gap-8">
      <a class="font-medium uppercase" href="<?= url() ?>">
        <div><?= $offer_name ?></div>
      </a>
      <?php include 'components/elements/header-menu.php' ?>
      <div class="flex items-center gap-4">
        <?php include 'components/elements/lang-selector.php' ?>
        <a class="btn-primary" href="<?= url('sign-up') ?>">Sign up</a>
      </div>
      <div class=""><?php include 'components/icons/menu-icon.php' ?></div>
    </div>
  </div>
</header>
