<section class="about">
  <div class="about__body container">
    <h2><?= t('t.index.about_title') ?></h2>
    <div class="about__content">
      <div class="about__text">
        <p><?= t('t.index.about_text_1') ?></p>
        <p><?= t('t.index.about_text_2') ?></p>
        <p><?= t('t.index.about_text_3') ?></p>
      </div>
      <a class="about__btn btn btn_primary" href="<?= url('sign-up') ?>">
        <?= t('t.main.register') ?> <?php include 'components/icons/arrow.php' ?>
      </a>
    </div>
  </div>
</section>
