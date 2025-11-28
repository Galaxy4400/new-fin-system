<footer class="footer">
  <div class="container">
    <div class="footer__body">
      <div class="footer__main">
        <div class="footer__top">
          <div class="footer__logo"><?= $offer_name ?></div>
          <nav class="footer__menu">
            <ul class="footer__list footer__list_menu">
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
            <ul class="footer__list footer__list_policy">
              <li>
                <a href="<?= url('privacy') ?>"><?= t('t.main.menu_privacy') ?></a>
              </li>
              <li>
                <a href="<?= url('conditions') ?>"><?= t('t.main.menu_conditions') ?></a>
              </li>
            </ul>
          </nav>
          <div class="footer__langs"><?php include 'components/elements/lang-selector.php' ?></div>
        </div>
        <div class="footer__bottom"><?php include 'components/icons/footer-socials.php' ?></div>
      </div>
      <div class="footer__text">
        <p><?= t('t.main.footer_disclamer_1') ?></p>
        <p><?= t('t.main.footer_disclamer_2') ?></p>
        <p><?= t('t.main.footer_disclamer_3') ?></p>
        <p><?= t('t.main.footer_disclamer_4') ?></p>
      </div>
      <div class="footer__copy"><?= t('t.main.footer_copy', ['{year}' => date('Y')]) ?></div>
    </div>
  </div>
</footer>
