<div class="bg-primary-lightest relative overflow-hidden py-16 md:py-24">
  <div class="absolute top-1/2 left-1/2 h-[1063px] w-[2513px] -translate-1/2 max-md:hidden">
    <?php include 'components/icons/bg-deco.php' ?>
  </div>
  <div class="container-whide grid gap-6 md:gap-10">
    <h2 class="md:text-center"><?= t('t.index.reviews_title') ?></h2>
    <div class="grid justify-items-center gap-5 md:grid-cols-3 md:gap-1">
      <div
        class="special-block relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-8 md:max-w-[450px] md:translate-y-5 md:scale-90 md:-rotate-5 xl:translate-x-[25px] 2xl:translate-x-[60px]"
      >
        <div class="flex items-center gap-2.5">
          <p class="initials"><?= t('t.reviews.initials_1') ?></p>
          <div class="grid gap-0.5">
            <p class="font-semibold"><?= t('t.reviews.name_1') ?></p>
            <span class="text-primary"> <?php include 'components/icons/stars.php' ?> </span>
          </div>
        </div>
        <div class="grid gap-2.5 text-sm">
          <p><?= t('t.reviews.text_1') ?></p>
        </div>
      </div>
      <div
        class="special-block relative z-10 grid content-start items-start gap-2.5 rounded-[26px] px-5 py-8 md:max-w-[450px]"
      >
        <div class="flex items-center gap-2.5">
          <p class="initials"><?= t('t.reviews.initials_2') ?></p>
          <div class="grid gap-0.5">
            <p class="font-semibold"><?= t('t.reviews.name_2') ?></p>
            <span class="text-primary"> <?php include 'components/icons/stars.php' ?> </span>
          </div>
        </div>
        <div class="grid gap-2.5 text-sm">
          <p><?= t('t.reviews.text_2') ?></p>
        </div>
      </div>
      <div
        class="special-block relative grid content-start items-start gap-2.5 rounded-[26px] px-5 py-8 md:max-w-[450px] md:translate-y-5 md:scale-90 md:rotate-5 xl:translate-x-[-25px] 2xl:translate-x-[-60px]"
      >
        <div class="flex items-center gap-2.5">
          <p class="initials"><?= t('t.reviews.initials_3') ?></p>
          <div class="grid gap-0.5">
            <p class="font-semibold"><?= t('t.reviews.name_3') ?></p>
            <span class="text-primary"> <?php include 'components/icons/stars.php' ?> </span>
          </div>
        </div>
        <div class="grid gap-2.5 text-sm">
          <p><?= t('t.reviews.text_3') ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
