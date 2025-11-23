<footer class="bg-primary-lighter py-14">
  <div class="content-container">
    <div class="grid gap-7 md:gap-10">
      <div class="grid gap-5">
        <div class="relative flex flex-col flex-wrap justify-between gap-x-8 gap-y-3 md:flex-row md:items-center">
          <div class="pr-28 text-xl font-medium uppercase md:pr-0"><?= $offer_name ?></div>
          <nav class="flex max-w-[755px] grow flex-col flex-wrap gap-5 md:flex-row md:justify-evenly">
            <ul class="flex flex-col gap-x-5 gap-y-4 md:flex-row md:gap-x-12">
              <li>
                <a href="<?= url('/', '', '#about') ?>"><?= t('t.main.menu_about') ?></a>
              </li>
              <li>
                <a href="<?= url('/', '', '#features') ?>"><?= t('t.main.menu_features') ?></a>
              </li>
              <li>
                <a href="<?= url('/', '', '#reviews') ?>"><?= t('t.main.menu_reviews') ?></a>
              </li>
              <li>
                <a href="<?= url('/', '', '#faq') ?>"><?= t('t.main.menu_faq') ?></a>
              </li>
            </ul>
            <ul class="flex flex-col gap-x-5 gap-y-4 md:flex-row">
              <li>
                <a href="<?= url('privacy') ?>"><?= t('t.main.menu_privacy') ?></a>
              </li>
              <li>
                <a href="<?= url('conditions') ?>"><?= t('t.main.menu_conditions') ?></a>
              </li>
            </ul>
          </nav>
          <div class="absolute -top-1.5 right-0 md:static">
            <?php include 'components/elements/lang-selector.php' ?>
          </div>
        </div>
        <div class="inline-flex items-center gap-2"><?php include 'components/icons/footer-socials.php' ?></div>
      </div>
      <div class="grid gap-2.5 text-sm text-gray-500">
        <p><?= t('t.main.footer__disclamer_1') ?></p>
        <p><?= t('t.main.footer__disclamer_2') ?></p>
        <p><?= t('t.main.footer__disclamer_3') ?></p>
        <p><?= t('t.main.footer__disclamer_4') ?></p>
      </div>
      <div class="text-center"><?= t('t.main.footer__copy', ['{year}' => date('Y')]) ?></div>
    </div>
  </div>
</footer>
