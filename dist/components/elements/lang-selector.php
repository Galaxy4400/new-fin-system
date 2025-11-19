<div class="relative" x-data="{ open: false }" @click.outside="open = false">
  <button
    class="inline-flex h-10 cursor-pointer items-center gap-2 rounded-[10px] px-2.5 py-1 transition-colors hover:bg-rose-100"
    :class="{ 'bg-rose-100': open }"
    @click="open = !open"
  >
    <div class="min-w-[25px] overflow-hidden rounded-sm">
      <img src="<?= flagUrl($lang) ?>" alt="<?= $lang ?> flag" width="25" />
    </div>
    <span class="uppercase"><?= $lang ?></span>
    <div class="min-w-5"><?php include 'components/icons/lang-arrow.php' ?></div>
  </button>
  <div
    class="absolute top-[calc(100%+10px)] left-0 max-h-[225px] w-[100px] overflow-y-auto rounded-[10px] bg-white shadow-md transition-all duration-300"
    x-bind:class="open ? 'opacity-100 pointer-events-auto translate-y-0' : 'opacity-0 pointer-events-none translate-y-3'"
  >
    <ul class="py-2">
      <?php foreach ($supportedLanguages as $listLang) { ?>
      <li
        class="inline-flex w-full cursor-pointer items-center gap-2 px-3 py-2 transition-colors hover:bg-rose-100"
        data-lang="<?= $listLang ?>"
      >
        <div class="overflow-hidden rounded-sm">
          <img src="<?= flagUrl($listLang) ?>" alt="<?= $listLang ?> flag" width="25" />
        </div>
        <span class="uppercase"><?= $listLang ?></span>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
