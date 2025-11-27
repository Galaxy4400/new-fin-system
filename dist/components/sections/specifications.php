<div class="py-8 md:py-20">
  <div class="container-base grid gap-5 md:gap-10">
    <h2 class="md:text-center"><?= t('t.index.specifications_title') ?></h2>
    <table class="w-full border-collapse text-left">
      <tbody>
        <tr class="">
          <th class=""><?= t('t.index.table-block-table__th_1') ?></th>
          <td class=""><?= t('t.index.table-block-table__td_1') ?></td>
        </tr>
        <tr class="">
          <th class=""><?= t('t.index.table-block-table__th_2') ?></th>
          <td class=""><?= t('t.index.table-block-table__td_2') ?></td>
        </tr>
        <tr class="">
          <th class=""><?= t('t.index.table-block-table__th_3') ?></th>
          <td class=""><?= t('t.index.table-block-table__td_3') ?></td>
        </tr>
        <tr class="">
          <th class=""><?= t('t.index.table-block-table__th_4') ?></th>
          <td class=""><?= t('t.index.table-block-table__td_4') ?></td>
        </tr>
        <tr class="">
          <th class=""><?= t('t.index.table-block-table__th_5') ?></th>
          <td class=""><?= t('t.index.table-block-table__td_5') ?></td>
        </tr>
        <tr class="">
          <th class=""><?= t('t.index.table-block-table__th_6') ?></th>
          <td class=""><?= t('t.index.table-block-table__td_6') ?></td>
        </tr>
        <tr class="">
          <th class=""><?= t('t.index.table-block-table__th_7') ?></th>
          <td class=""><?= t('t.index.table-block-table__td_7') ?></td>
        </tr>
      </tbody>
    </table>

    <div class="md:border-primary md:rounded-[20px] md:border">
      <div class="border-primary grid justify-items-center gap-6 rounded-[20px] border md:gap-4">
        <h2 class="h3 flex flex-wrap items-center gap-x-4 gap-y-5">
          <?= t('t.index.reviews-body__title') ?>
          <span
            class="inline-flex items-center justify-center rounded-full bg-emerald-500 leading-none text-white uppercase"
          >
            <?= t('t.index.reviews-body__tag') ?>
          </span>
        </h2>

        <div class="flex flex-wrap items-center gap-2.5">
          <strong class="leading-none text-emerald-500"> <?= t('v.rating') ?> </strong>

          <span
            class="leading-none text-amber-500"
            aria-label="<?= t('t.main.aria_rating', ['{rating}' => t('v.rating'), '{score}' => t('v.score')]) ?>"
          >
            ★★★★☆
          </span>

          <span class="flex gap-1 text-sm text-gray-400">
            <span>
              <?= t('t.index.reviews-body__text_reviews', ['{reviews}' => '<strong>' . t('v.reviews') . '</strong>']) ?>
            </span>
            ·
            <span>
              <?= t('t.index.reviews-body__text_votes', ['{votes}' => '<strong>' . t('v.votes') . '</strong>']) ?>
            </span>
            ·
            <span>
              <?= t('t.index.reviews-body__text_score', ['{score}' => '<strong>' . t('v.score') . '</strong>']) ?>
            </span>
          </span>
        </div>

        <p class="md:text-[14px]"><?= t('t.index.reviews-body__label') ?></p>
      </div>
    </div>
  </div>
</div>
