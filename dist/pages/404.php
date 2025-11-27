<div class="bg-primary-lightest relative flex flex-1 items-center justify-center overflow-hidden py-10 md:py-20">
  <div class="absolute top-1/2 left-[40%] h-[1063px] w-[2513px] -translate-1/2">
    <?php include 'components/icons/bg-deco.php' ?>
  </div>
  <div class="container-base relative grid gap-12 text-center">
    <div class="w-[250px] md:w-[394px]"><?php include 'components/icons/404.php' ?></div>
    <p class="md:text-xl"><?= t('t.pages.404_label') ?></p>
    <a class="btn-primary justify-self-center capitalize" href="<?= url() ?>"><?= t('t.main.tohome') ?></a>
  </div>
</div>
