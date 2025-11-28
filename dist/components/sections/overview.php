<section class="overview" id="about">
  <div class="container">
    <div class="overview__item">
      <div class="overview__content">
        <h2><?= t('t.index.overview_title') ?></h2>
        <p class="overview__label"><?= t('t.index.overview_label') ?></p>
        <p><?= t('t.index.overview_text_1') ?></p>
      </div>
      <div class="overview__img-block">
        <?= pictureSetResponsive('experience-1.png', "overview__picture", ["alt" => "overview 1"], [458, 355],
        "768:458px,290px") ?>
      </div>
    </div>
    <div class="overview__item">
      <div class="overview__content">
        <p><?= t('t.index.overview_text_2') ?></p>
      </div>
      <div class="overview__img-block">
        <?= pictureSetResponsive('experience-2.png', "overview__picture", ["alt" => "overview 2"], [496, 351],
        "768:496px,290px") ?>
      </div>
    </div>
    <div class="overview__item">
      <div class="overview__content">
        <p><?= t('t.index.overview_text_3') ?></p>
      </div>
      <div class="overview__img-block">
        <?= pictureSetResponsive('experience-3.png', "overview__picture", ["alt" => "overview 3"], [496, 375],
        "768:496px,290px") ?>
      </div>
    </div>
    <div class="overview__item">
      <div class="overview__content">
        <p><?= t('t.index.overview_text_4') ?></p>
      </div>
      <div class="overview__img-block">
        <?= pictureSetResponsive('experience-4.png', "overview__picture", ["alt" => "overview 4"], [496, 393],
        "768:496px,290px") ?>
      </div>
    </div>
  </div>
</section>
