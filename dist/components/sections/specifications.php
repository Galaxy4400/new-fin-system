<section class="specifications">
  <div class="specifications__body container">
    <h2 class="specifications__title"><?= t('t.index.specifications_title') ?></h2>
    <table class="specifications__table">
      <tbody>
        <tr class="specifications__tr">
          <th class="specifications__th"><?= t('t.index.specifications_th_1') ?></th>
          <td class="specifications__td"><?= t('t.index.specifications_td_1') ?></td>
        </tr>
        <tr class="specifications__tr">
          <th class="specifications__th"><?= t('t.index.specifications_th_2') ?></th>
          <td class="specifications__td"><?= t('t.index.specifications_td_2') ?></td>
        </tr>
        <tr class="specifications__tr">
          <th class="specifications__th"><?= t('t.index.specifications_th_3') ?></th>
          <td class="specifications__td"><?= t('t.index.specifications_td_3') ?></td>
        </tr>
        <tr class="specifications__tr">
          <th class="specifications__th"><?= t('t.index.specifications_th_4') ?></th>
          <td class="specifications__td"><?= t('t.index.specifications_td_4') ?></td>
        </tr>
        <tr class="specifications__tr">
          <th class="specifications__th"><?= t('t.index.specifications_th_5') ?></th>
          <td class="specifications__td"><?= t('t.index.specifications_td_5') ?></td>
        </tr>
        <tr class="specifications__tr">
          <th class="specifications__th"><?= t('t.index.specifications_th_6') ?></th>
          <td class="specifications__td"><?= t('t.index.specifications_td_6') ?></td>
        </tr>
        <tr class="specifications__tr">
          <th class="specifications__th"><?= t('t.index.specifications_th_7') ?></th>
          <td class="specifications__td"><?= t('t.index.specifications_td_7') ?></td>
        </tr>
      </tbody>
    </table>

    <div class="ratting">
      <div class="ratting__body">
        <h2 class="ratting__title h3">
          <?= t('t.index.ratting_title') ?>
          <span class="ratting__tag"> <?= t('t.index.ratting_tag') ?> </span>
        </h2>
        <div class="ratting__votes">
          <strong class="ratting__label"> <?= t('v.rating') ?> </strong>
          <span
            class="ratting__stars"
            aria-label="<?= t('t.aria.rating', ['{rating}' => t('v.rating'), '{score}' => t('v.score')]) ?>"
          >
            ★★★★☆
          </span>
          <span class="ratting__info">
            <span> <?= t('t.index.ratting_text_reviews', ['{reviews}' => t('v.reviews')]) ?> ·</span>
            <span> <?= t('t.index.ratting_text_votes', ['{votes}' => t('v.votes')]) ?> ·</span>
            <span> <?= t('t.index.ratting_text_score', ['{score}' => t('v.score')]) ?> </span>
          </span>
        </div>
        <p class="ratting__sub"><?= t('t.index.ratting_label') ?></p>
      </div>
    </div>
  </div>
</section>
