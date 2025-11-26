<section class="py-8 md:py-20">
  <div class="container-base">
    <div class="grid gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5">
        <h2><?= t('t.index.about_title') ?></h2>
        <p class="text-lg font-semibold md:text-xl md:font-medium"><?= t('t.index.about_label') ?></p>
        <p><?= t('t.index.about_text_1') ?></p>
      </div>
      <div class="flex justify-center md:justify-end">
        <?= pictureSetResponsive('experience-1.png', ["alt" => "deco 1", "width" => "458", "height" => "355"],
        "768:458px,300px", "max-w-full aspect-458/355") ?>
      </div>
    </div>
    <div class="grid items-center gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5 md:order-2">
        <p><?= t('t.index.about_text_2') ?></p>
      </div>
      <div class="flex justify-center md:order-1 md:justify-start">
        <?= pictureSetResponsive('experience-2.png', ["alt" => "deco 2", "width" => "496", "height" => "351"],
        "768:496px,300px", "max-w-full aspect-496/351") ?>
      </div>
    </div>
    <div class="grid items-center gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5">
        <p><?= t('t.index.about_text_3') ?></p>
      </div>
      <div class="flex justify-center md:justify-end">
        <?= pictureSetResponsive('experience-3.png', ["alt" => "deco 3", "width" => "496", "height" => "375"],
        "768:496px,300px", "max-w-full aspect-496/375") ?>
      </div>
    </div>
    <div class="grid items-center gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5 md:order-2">
        <p><?= t('t.index.about_text_4') ?></p>
      </div>
      <div class="flex justify-center md:order-1 md:justify-start">
        <?= pictureSetResponsive('experience-4.png', ["alt" => "deco 4", "width" => "496", "height" => "393"],
        "768:496px,300px", "max-w-full aspect-496/393") ?>
      </div>
    </div>
  </div>
</section>
