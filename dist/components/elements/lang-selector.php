<div class="lang-selector" data-connect-parent>
  <button class="lang-icon" data-connector="lang-menu">
    <div class="lang-icon__flag-container">
      <div class="lang-icon__flag-wrapper">
        <img src="<?= flagUrl($currentLang) ?>" alt="<?= $currentLang ?>" width="25" height="25" />
      </div>
    </div>
    <span class="lang-icon__lang"><?= $currentLang ?></span>
    <div class="lang-icon__arrow"><?php include 'components/icons/select-arrow.php' ?></div>
  </button>
  <nav class="lang-menu" data-connect="lang-menu">
    <ul class="lang-menu__list">
      <?php foreach ($supportedLanguages as $listLang) { ?>
      <li data-lang="<?= $listLang ?>">
        <a
          class="lang-menu__link"
          href="<?= getLocalizedUrl($listLang) ?>"
          data-active="<?php if ($currentLang === $listLang) { ?>true<?php } ?>"
        >
          <div class="lang-menu__flag-wrapper">
            <img data-src="<?= flagUrl($listLang) ?>" alt="<?= $listLang ?>" width="25" height="25" data-flag-img />
          </div>
          <span class="lang-menu__lang"><?= $listLang ?></span>
        </a>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>
