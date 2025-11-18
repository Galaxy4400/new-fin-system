<header class="py-5 shadow">
  <div class="max-w-container bs-content mx-auto px-4">
    <div class="flex justify-between">
      <a class="uppercase" href="<?= url() ?>">
        <div><?= $offer_name ?></div>
      </a>
      <nav class="flex grow justify-center">
        <ul class="flex flex-wrap justify-center gap-x-6 gap-y-3 md:gap-x-10 lg:gap-x-14">
          <li><a href="<?= url('/', '', '#about') ?>">Item 1</a></li>
          <li><a href="<?= url('/', '', '#features') ?>">Item 2</a></li>
          <li><a href="<?= url('/', '', '#reviews') ?>">Item 3</a></li>
          <li><a href="<?= url('/', '', '#faq') ?>">Item 4</a></li>
        </ul>
      </nav>
      <div class="flex gap-4">
        <div>
          <a href="<?= url('sign-up') ?>">Sign up</a>
        </div>
        <div>
          <button><?= $lang ?></button>
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
