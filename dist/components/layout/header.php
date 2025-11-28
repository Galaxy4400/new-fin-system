<header class="header">
  <div class="container">
    <div class="header__body">
      <a class="h3 uppercase" href="<?= url() ?>"><?= $offer_name ?></a>
      <?php include 'components/elements/header-menu.php' ?>
      <div class="header__actions">
        <div class="header__langs"><?php include 'components/elements/lang-selector.php' ?></div>
        <a class="header__btn btn btn_primary" href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?></a>
      </div>
      <button class="menu-icon" data-menu-icon aria-label="<?= t('t.aria.open_menu') ?>">
        <?php include 'components/icons/menu-icon.php' ?>
      </button>
    </div>
  </div>
  <?php include 'components/elements/mobile-menu.php' ?>
</header>
