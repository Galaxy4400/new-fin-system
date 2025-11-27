<section class="py-8 md:py-20">
  <div class="container-base grid gap-5 md:gap-10">
    <h2 class="md:text-center"><?= t('t.index.specifications_title') ?></h2>
    <table class="w-full border-collapse text-left">
      <tbody>
        <tr class="odd:bg-primary-lightest">
          <th class="h4 py-3 pl-3 md:pl-5"><?= t('t.index.specifications_th_1') ?></th>
          <td class="px-3 py-3 md:px-5 md:text-base"><?= t('t.index.specifications_td_1') ?></td>
        </tr>
        <tr class="odd:bg-primary-lightest">
          <th class="h4 py-3 pl-3 md:pl-5"><?= t('t.index.specifications_th_2') ?></th>
          <td class="px-3 py-3 md:px-5 md:text-base"><?= t('t.index.specifications_td_2') ?></td>
        </tr>
        <tr class="odd:bg-primary-lightest">
          <th class="h4 py-3 pl-3 md:pl-5"><?= t('t.index.specifications_th_3') ?></th>
          <td class="px-3 py-3 md:px-5 md:text-base"><?= t('t.index.specifications_td_3') ?></td>
        </tr>
        <tr class="odd:bg-primary-lightest">
          <th class="h4 py-3 pl-3 md:pl-5"><?= t('t.index.specifications_th_4') ?></th>
          <td class="px-3 py-3 md:px-5 md:text-base"><?= t('t.index.specifications_td_4') ?></td>
        </tr>
        <tr class="odd:bg-primary-lightest">
          <th class="h4 py-3 pl-3 md:pl-5"><?= t('t.index.specifications_th_5') ?></th>
          <td class="px-3 py-3 md:px-5 md:text-base"><?= t('t.index.specifications_td_5') ?></td>
        </tr>
        <tr class="odd:bg-primary-lightest">
          <th class="h4 py-3 pl-3 md:pl-5"><?= t('t.index.specifications_th_6') ?></th>
          <td class="px-3 py-3 md:px-5 md:text-base"><?= t('t.index.specifications_td_6') ?></td>
        </tr>
        <tr class="odd:bg-primary-lightest">
          <th class="h4 py-3 pl-3 md:pl-5"><?= t('t.index.specifications_th_7') ?></th>
          <td class="px-3 py-3 md:px-5 md:text-base"><?= t('t.index.specifications_td_7') ?></td>
        </tr>
      </tbody>
    </table>

    <div class="md:border-primary-light md:rounded-[20px] md:border md:px-20 md:py-8">
      <div
        class="border-primary-light grid justify-items-center gap-6 rounded-[20px] border px-4 py-5 md:gap-4 md:px-8 md:py-6"
      >
        <h2 class="h3 flex flex-wrap items-center gap-x-4 gap-y-5">
          <?= t('t.index.ratting_title') ?>
          <span
            class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-2 py-1 text-base leading-none text-white uppercase"
          >
            <?= t('t.index.ratting_tag') ?>
          </span>
        </h2>
        <div class="flex flex-wrap items-center gap-2.5">
          <strong class="leading-none text-emerald-600"> <?= t('v.rating') ?> </strong>

          <span
            class="leading-none text-amber-500"
            aria-label="<?= t('t.main.aria_rating', ['{rating}' => t('v.rating'), '{score}' => t('v.score')]) ?>"
          >
            ★★★★☆
          </span>

          <span class="flex flex-wrap gap-1 text-sm text-gray-400">
            <span> <?= t('t.index.ratting_text_reviews', ['{reviews}' => t('v.reviews')]) ?> ·</span>
            <span> <?= t('t.index.ratting_text_votes', ['{votes}' => t('v.votes')]) ?> ·</span>
            <span> <?= t('t.index.ratting_text_score', ['{score}' => t('v.score')]) ?> </span>
          </span>
        </div>
        <p class="text-center"><?= t('t.index.ratting_label') ?></p>
      </div>
    </div>
  </div>
</section>
