<section class="promo">
  <div class="promo__body container">
    <div class="promo__header">
      <h2><?= t('t.index.promo_title') ?></h2>
      <div class="promo__text">
        <p><?= t('t.index.promo_text_1') ?></p>
        <p><?= t('t.index.promo_text_2') ?></p>
        <p><?= t('t.index.promo_text_3') ?></p>
      </div>
    </div>
    <div class="promo__image">
      <div class="promo__img-container">
        <?= pictureSetResponsive('promo.jpg', "promo__picture", ["alt" => "promo"], [496, 489], "768:496px,290px") ?>
      </div>
    </div>
  </div>
</section>
