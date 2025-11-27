<div class="bg-primary-lightest relative pt-5 pb-14 md:min-h-[716px] md:py-10">
  <div class="absolute top-1/2 left-[40%] h-[1063px] w-[2513px] -translate-1/2">
    <?php include 'components/icons/bg-deco.php' ?>
  </div>
  <div class="container-base relative grid gap-7 md:grid-cols-2">
    <div class="grid content-start gap-8 md:pt-7">
      <header class="grid gap-5">
        <h1><?= t('t.index.main_title') ?></h1>
        <p><?= t('t.index.main_label') ?></p>
        <a class="btn-primary flex w-full items-center gap-2.5 md:hidden" href="<?= url('sign-up') ?>">
          <?= t('t.main.signup_now') ?> <?php include 'components/icons/arrow.php' ?>
        </a>
      </header>
      <div class="grid gap-2.5 opacity-60">
        <p class="text-sm md:text-base"><?= t('t.index.main_text_1') ?></p>
        <p class="text-sm md:text-base"><?= t('t.index.main_text_2') ?></p>
        <p class="text-sm md:text-base"><?= t('t.index.main_text_3') ?></p>
      </div>
    </div>
    <div class="flex justify-center max-md:hidden md:justify-end"><?php include 'components/forms/main.php' ?></div>
  </div>
</div>
