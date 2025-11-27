<section class="py-8 md:py-20">
  <div class="container-base grid gap-7 md:grid-cols-2">
    <h2><?= t('t.index.about_title') ?></h2>
    <div class="grid gap-5 md:gap-7">
      <div class="grid gap-2.5">
        <p><?= t('t.index.about_text_1') ?></p>
        <p><?= t('t.index.about_text_2') ?></p>
        <p><?= t('t.index.about_text_3') ?></p>
      </div>
      <a class="btn-primary flex max-w-[408px] items-center gap-2.5" href="<?= url('sign-up') ?>">
        <?= t('t.main.register') ?> <?php include 'components/icons/arrow.php' ?>
      </a>
    </div>
  </div>
</section>
