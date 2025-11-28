<div class="hero">
  <div class="hero__bg"><?php include 'components/icons/bg-deco.php' ?></div>
  <div class="hero__body container">
    <div class="hero__content">
      <header class="hero__header">
        <h1><?= t('t.index.hero_title') ?></h1>
        <p><?= t('t.index.hero_label') ?></p>
        <a class="hero__btn btn btn_primary" href="<?= url('sign-up') ?>">
          <?= t('t.main.signup_now') ?> <?php include 'components/icons/arrow.php' ?>
        </a>
      </header>
      <div class="hero__text">
        <p><?= t('t.index.hero_text_1') ?></p>
        <p><?= t('t.index.hero_text_2') ?></p>
        <p><?= t('t.index.hero_text_3') ?></p>
      </div>
    </div>
    <div class="hero__form"><?php include 'components/forms/main.php' ?></div>
  </div>
</div>
