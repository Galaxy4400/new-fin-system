<header class="bg-white py-3 shadow md:py-5" x-data="{ menuOpen: false }" @click.outside="menuOpen = false">
  <div class="content-container">
    <div class="flex items-center justify-between gap-8">
      <a class="link h2 uppercase" href="<?= url() ?>"><?= $offer_name ?></a>
      <?php include 'components/elements/header-menu.php' ?>
      <div class="flex items-center gap-4">
        <div class="hidden sm:block"><?php include 'components/elements/lang-selector.php' ?></div>
        <a class="btn-primary" href="<?= url('sign-up') ?>">Sign up</a>
      </div>
      <button class="link inline-flex cursor-pointer md:hidden" @click="menuOpen = !menuOpen">
        <?php include 'components/icons/menu-icon.php' ?>
      </button>
    </div>
  </div>
  <?php include 'components/elements/mobile-menu.php' ?>
</header>
