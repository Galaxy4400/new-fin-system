<section class="relative py-8 md:py-20">
  <div class="container-base grid gap-6 md:gap-12">
    <div class="grid gap-3 md:grid-cols-2 md:gap-7">
      <h2><?= t('t.index.benefits_title') ?></h2>
      <p class="text-primary md:justify-self-end"><?= t('t.index.benefits_label') ?></p>
    </div>
    <div class="grid gap-5 md:grid-cols-3">
      <div
        class="special-block relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-4 md:min-h-[300px]"
      >
        <div class="grid items-center gap-2.5">
          <img data-src="/assets/img/svg/icon4.svg" alt="<?= $offer_name ?>" width="50" height="50" data-lazy />
          <p class="h4 md:min-h-11"><?= t('t.index.benefits_item_title_1') ?></p>
        </div>
        <div class="grid gap-2.5 text-sm">
          <p><?= t('t.index.benefits_item_text_1') ?></p>
          <p><?= t('t.index.benefits_item_text_2') ?></p>
        </div>
      </div>
      <div
        class="special-block relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-4 md:min-h-[300px]"
      >
        <div class="grid items-center gap-2.5">
          <img data-src="/assets/img/svg/icon5.svg" alt="<?= $offer_name ?>" width="50" height="50" data-lazy />
          <p class="h4 md:min-h-11"><?= t('t.index.benefits_item_title_2') ?></p>
        </div>
        <div class="grid gap-2.5 text-sm">
          <p><?= t('t.index.benefits_item_text_3') ?></p>
        </div>
      </div>
      <div
        class="special-block relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-4 md:min-h-[300px]"
      >
        <div class="grid items-center gap-2.5">
          <img data-src="/assets/img/svg/icon6.svg" alt="<?= $offer_name ?>" width="50" height="50" data-lazy />
          <p class="h4 md:min-h-11"><?= t('t.index.benefits_item_title_3') ?></p>
        </div>
        <div class="grid gap-2.5 text-sm">
          <p><?= t('t.index.benefits_item_text_4') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
