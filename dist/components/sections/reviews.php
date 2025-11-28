<section class="reviews" id="reviews">
  <div class="reviews__bg"><?php include 'components/icons/bg-deco.php' ?></div>
  <div class="reviews__body container_whide container">
    <h2 class="reviews__title"><?= t('t.index.reviews_title') ?></h2>
    <div class="reviews__items">
      <div class="review special-block">
        <div class="review__header">
          <p class="initials" data-initials="1"></p>
          <div class="review__info">
            <p class="review__name" data-reviewer="1"><?= t('t.reviews.name_1') ?></p>
            <span class="review__stars"> <?php include 'components/icons/stars.php' ?> </span>
          </div>
        </div>
        <div class="review__text">
          <p><?= t('t.reviews.text_1') ?></p>
        </div>
      </div>
      <div class="review special-block">
        <div class="review__header">
          <p class="initials" data-initials="2"></p>
          <div class="review__info">
            <p class="review__name" data-reviewer="2"><?= t('t.reviews.name_2') ?></p>
            <span class="review__stars"> <?php include 'components/icons/stars.php' ?> </span>
          </div>
        </div>
        <div class="review__text">
          <p><?= t('t.reviews.text_2') ?></p>
        </div>
      </div>
      <div class="review special-block">
        <div class="review__header">
          <p class="initials" data-initials="3"></p>
          <div class="review__info">
            <p class="review__name" data-reviewer="3"><?= t('t.reviews.name_3') ?></p>
            <span class="review__stars"> <?php include 'components/icons/stars.php' ?> </span>
          </div>
        </div>
        <div class="review__text">
          <p><?= t('t.reviews.text_3') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
