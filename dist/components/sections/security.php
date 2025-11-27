<section class="relative py-8 md:py-20">
  <div class="absolute top-[65%] left-1/2 -z-10 h-[1063px] w-[2513px] -translate-1/2">
    <?php include 'components/icons/bg-deco.php' ?>
  </div>
  <div class="container-base grid gap-10 md:gap-12">
    <div class="grid gap-3 md:gap-5">
      <h2 class="md:max-w-1/2"><?= t('t.index.security_title') ?></h2>
      <div class="grid gap-2.5">
        <p><?= t('t.index.security_text_1') ?></p>
        <p><?= t('t.index.security_text_2') ?></p>
      </div>
    </div>
    <div class="grid gap-5 md:grid-cols-3 md:gap-1">
      <div
        class="special-block md:special-block-lightest relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-4 md:min-h-[300px]"
      >
        <div class="flex min-h-11 items-center gap-2.5">
          <img src="/assets/img/svg/icon1.svg" alt="<?= $offer_name ?>" />
          <p class="h4"><?= t('t.index.security_item_title_1') ?></p>
        </div>
        <div class="text-sm">
          <p><?= t('t.index.security_item_text_1') ?></p>
        </div>
      </div>
      <div
        class="special-block md:special-block-lightest relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-4 md:min-h-[300px] md:-translate-y-2.5 md:-rotate-10"
      >
        <div class="flex min-h-11 items-center gap-2.5">
          <img src="/assets/img/svg/icon2.svg" alt="<?= $offer_name ?>" />
          <p class="h4"><?= t('t.index.security_item_title_2') ?></p>
        </div>
        <div class="text-sm">
          <p><?= t('t.index.security_item_text_2') ?></p>
        </div>
      </div>
      <div
        class="special-block md:special-block-lightest relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-4 md:min-h-[300px] md:rotate-6"
      >
        <div class="flex min-h-11 items-center gap-2.5">
          <img src="/assets/img/svg/icon3.svg" alt="<?= $offer_name ?>" />
          <p class="h4"><?= t('t.index.security_item_title_3') ?></p>
        </div>
        <div class="text-sm">
          <p><?= t('t.index.security_item_text_3') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
