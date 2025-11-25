<div class="relative" data-connect-parent>
  <button class="lang-icon group" data-connector="lang-menu">
    <div class="aspect-25/13 min-w-[25px] overflow-hidden rounded-sm">
      <img src="<?= flagUrl($currentLang) ?>" alt="<?= $currentLang ?>" width="25" height="25" />
    </div>
    <span class="uppercase"><?= $currentLang ?></span>
    <div class="min-w-5 transition-transform duration-300 group-data-active:rotate-180">
      <?php include 'components/icons/select-arrow.php' ?>
    </div>
  </button>
  <nav class="lang-menu" data-connect="lang-menu">
    <ul class="py-2">
      <?php foreach ($supportedLanguages as $listLang) { ?>
      <li class="" data-lang="<?= $listLang ?>">
        <a
          class="<?php if ($currentLang === $listLang) { ?>bg-rose-100<?php } ?> inline-flex w-full cursor-pointer items-center gap-2 px-3 py-2 transition-colors hover:bg-rose-100 data-active:bg-rose-100"
          href="<?= getLocalizedUrl($listLang) ?>"
        >
          <div class="overflow-hidden rounded-sm">
            <img data-src="<?= flagUrl($listLang) ?>" alt="<?= $listLang ?>" width="25" height="25" data-flag-img />
          </div>
          <span class="uppercase"><?= $listLang ?></span>
        </a>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>
