<nav class="mobile-menu" data-mobile-menu>
  <div class="mobile-menu__langs"><?php include 'components/elements/lang-selector.php' ?></div>
  <ul class="mobile-menu__list">
    <li>
      <a class="mobile-menu__link" href="<?= url('/', '', '#about') ?>"><?= t('t.main.menu_about') ?></a>
    </li>
    <li>
      <a class="mobile-menu__link" href="<?= url('/', '', '#features') ?>"><?= t('t.main.menu_features') ?></a>
    </li>
    <li>
      <a class="mobile-menu__link" href="<?= url('/', '', '#reviews') ?>"><?= t('t.main.menu_reviews') ?></a>
    </li>
    <li>
      <a class="mobile-menu__link" href="<?= url('/', '', '#faq') ?>"><?= t('t.main.menu_faq') ?></a>
    </li>
  </ul>
</nav>
