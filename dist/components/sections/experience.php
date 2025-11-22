<section class="py-8 md:py-20">
  <div class="content-container">
    <div class="grid gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5">
        <h2><?= t('t.index.about_title') ?></h2>
        <p class="text-lg font-semibold md:text-xl md:font-medium"><?= t('t.index.about_label') ?></p>
        <p><?= t('t.index.about_text_1') ?></p>
      </div>
      <div class="flex justify-center md:justify-end">
        <?= pictureSetResponsive('experience-1.png', "max-w-full aspect-458/355", ["alt" => "deco 1"], "768:458px,100%")
        ?>
      </div>
    </div>
    <div class="grid items-center gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5 md:order-2">
        <p><?= t('t.index.about_text_2') ?></p>
      </div>
      <div class="flex justify-center md:order-1 md:justify-start">
        <?= pictureSetResponsive('experience-2.png', "max-w-full aspect-496/351", ["alt" => "deco 2"], "768:496px,100%")
        ?>
      </div>
    </div>
    <div class="grid items-center gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5">
        <p><?= t('t.index.about_text_3') ?></p>
      </div>
      <div class="flex justify-center md:justify-end">
        <?= pictureSetResponsive('experience-3.png', "max-w-full aspect-496/375", ["alt" => "deco 3"], "768:496px,100%")
        ?>
      </div>
    </div>
    <div class="grid items-center gap-7 md:grid-cols-2">
      <div class="grid content-start gap-5 md:order-2">
        <p><?= t('t.index.about_text_4') ?></p>
      </div>
      <div class="flex justify-center md:order-1 md:justify-start">
        <?= pictureSetResponsive('experience-4.png', "max-w-full aspect-496/393", ["alt" => "deco 4"], "768:496px,100%")
        ?>
      </div>
    </div>
  </div>
</section>
