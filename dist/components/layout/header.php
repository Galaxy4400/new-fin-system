<header class="bg-white py-5 shadow">
  <div class="max-w-container bs-content mx-auto px-4">
    <div class="flex items-center justify-between gap-8">
      <a class="font-medium uppercase" href="<?= url() ?>">
        <div><?= $offer_name ?></div>
      </a>
      <nav class="flex grow justify-center">
        <ul class="flex flex-wrap justify-center gap-x-6 gap-y-2 md:gap-x-10 lg:gap-x-14">
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#about') ?>">About</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#features') ?>">Features</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#reviews') ?>">Reviews</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#faq') ?>">FAQ</a></li>
        </ul>
      </nav>
      <div class="flex items-center gap-4">
        <div class="relative" x-data="{ open: false }" @click.outside="open = false">
          <button
            class="inline-flex h-10 cursor-pointer items-center gap-2 rounded-[10px] px-2.5 py-1 transition-colors hover:bg-rose-100"
            :class="{ 'bg-rose-100': open }"
            @click="open = !open"
          >
            <div class="overflow-hidden rounded-sm">
              <img src="<?= flagUrl($lang) ?>" alt="<?= $lang ?> flag" width="25" />
            </div>
            <span class="uppercase"><?= $lang ?></span>
            <?php include 'components/elements/lang-arrow.php' ?>
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
        <a class="btn-primary" href="<?= url('sign-up') ?>">Sign up</a>
      </div>
    </div>
  </div>
</header>
