<section class="features" id="features">
  <div class="features__bg"><?php include 'components/icons/bg-deco.php' ?></div>
  <div class="features__body container">
    <div class="features__header">
      <h2 class="features__title"><?= t('t.index.features_title') ?></h2>
      <div class="features__text">
        <p><?= t('t.index.features_text_1') ?></p>
        <p><?= t('t.index.features_text_2') ?></p>
      </div>
    </div>
    <div class="features__cards">
      <div class="feature-card special-block-lightest">
        <div class="feature-card__header">
          <img data-src="/assets/img/svg/icon1.svg" alt="<?= $offer_name ?>" data-lazy />
          <p class="h4"><?= t('t.index.features_item_title_1') ?></p>
        </div>
        <div class="feature-card__content">
          <p><?= t('t.index.features_item_text_1') ?></p>
        </div>
      </div>
      <div class="feature-card special-block-lightest">
        <div class="feature-card__header">
          <img data-src="/assets/img/svg/icon2.svg" alt="<?= $offer_name ?>" data-lazy />
          <p class="h4"><?= t('t.index.features_item_title_2') ?></p>
        </div>
        <div class="feature-card__content">
          <p><?= t('t.index.features_item_text_2') ?></p>
        </div>
      </div>
      <div class="feature-card special-block-lightest">
        <div class="feature-card__header">
          <img data-src="/assets/img/svg/icon3.svg" alt="<?= $offer_name ?>" data-lazy />
          <p class="h4"><?= t('t.index.features_item_title_3') ?></p>
        </div>
        <div class="feature-card__content">
          <p><?= t('t.index.features_item_text_3') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
