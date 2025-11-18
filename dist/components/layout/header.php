<header class="bg-white py-5 shadow">
  <div class="max-w-container bs-content mx-auto px-4">
    <div class="flex items-center justify-between">
      <a class="font-medium uppercase" href="<?= url() ?>">
        <div><?= $offer_name ?></div>
      </a>
      <nav class="flex grow justify-center">
        <ul class="flex flex-wrap justify-center gap-x-6 gap-y-3 md:gap-x-10 lg:gap-x-14">
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#about') ?>">About</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#features') ?>">Features</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#reviews') ?>">Reviews</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?= url('/', '', '#faq') ?>">FAQ</a></li>
        </ul>
      </nav>
      <div class="flex items-center gap-4">
        <a class="btn" href="<?= url('sign-up') ?>">Sign up</a>
        <div>
          <button class="btn"><?= $lang ?></button>
          <!-- <div>
            <div>
              <ul>
                <?php foreach ($supportedLanguages as $listLang) { ?>
                <li data-lang="<?= $listLang ?>"><?= $listLang ?></li>
                <?php } ?>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</header>
