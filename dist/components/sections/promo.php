<div class="py-8 md:py-20">
  <div class="container-base grid gap-7 md:grid-cols-2">
    <div class="grid content-start gap-5">
      <h2><?= t('t.index.promo_title') ?></h2>
      <div class="grid gap-2.5">
        <p><?= t('t.index.promo_text_1') ?></p>
        <p><?= t('t.index.promo_text_2') ?></p>
        <p><?= t('t.index.promo_text_3') ?></p>
      </div>
    </div>
    <div class="flex justify-center md:justify-end">
      <div class="overflow-hidden rounded-[20px]">
        <?= pictureSetResponsive('promo.jpg', ["alt" => "promo", "width" => "496", "height" => "489"],
        "768:496px,300px", "max-w-full aspect-496/489") ?>
      </div>
    </div>
  </div>
</div>
