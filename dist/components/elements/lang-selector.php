<div class="relative" data-connect-parent>
  <button class="lang-icon" data-connector="lang-menu">
    <div class="min-w-[25px] overflow-hidden rounded-sm">
      <img src="<?= flagUrl($currentLang) ?>" alt="<?= $currentLang ?>" width="25" />
    </div>
    <span class="uppercase"><?= $currentLang ?></span>
    <div class="min-w-5 transition-transform duration-300" :class="{ 'rotate-180': open }">
      <?php include 'components/icons/select-arrow.php' ?>
    </div>
  </button>
  <div class="lang-menu" data-connect="lang-menu">
    <ul class="py-2">
      <?php foreach ($supportedLanguages as $listLang) { ?>
      <li
        class="inline-flex w-full cursor-pointer items-center gap-2 px-3 py-2 transition-colors hover:bg-rose-100"
        data-lang="<?= $listLang ?>"
      >
        <div class="overflow-hidden rounded-sm">
          <img src="<?= flagUrl($listLang) ?>" alt="<?= $listLang ?>" width="25" />
        </div>
        <span class="uppercase"><?= $listLang ?></span>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
