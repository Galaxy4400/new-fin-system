<nav class="mobile-menu" data-mobile-menu>
  <div class="sm:hidden"><?php include 'components/elements/lang-selector.php' ?></div>
  <ul class="flex flex-col flex-wrap items-center justify-center gap-y-8">
    <li>
      <a class="text-xl" href="<?= url('/', '', '#about') ?>"><?= t('t.main.menu_about') ?></a>
    </li>
    <li>
      <a class="text-xl" href="<?= url('/', '', '#features') ?>"><?= t('t.main.menu_features') ?></a>
    </li>
    <li>
      <a class="text-xl" href="<?= url('/', '', '#reviews') ?>"><?= t('t.main.menu_reviews') ?></a>
    </li>
    <li>
      <a class="text-xl" href="<?= url('/', '', '#faq') ?>"><?= t('t.main.menu_faq') ?></a>
    </li>
  </ul>
</nav>
