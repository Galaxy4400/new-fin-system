<header class="bg-white py-5 shadow">
  <div class="max-w-container bs-content mx-auto px-4">
    <div class="flex items-center justify-between gap-8">
      <a class="font-medium uppercase" href="<?= url() ?>">
        <div><?= $offer_name ?></div>
      </a>
      <nav class="flex grow justify-center">
        <ul class="flex flex-wrap justify-center gap-x-6 gap-y-2 md:gap-x-10 lg:gap-x-14">
          <li><a class="link" href="<?= url('/', '', '#about') ?>">About</a></li>
          <li><a class="link" href="<?= url('/', '', '#features') ?>">Features</a></li>
          <li><a class="link" href="<?= url('/', '', '#reviews') ?>">Reviews</a></li>
          <li><a class="link" href="<?= url('/', '', '#faq') ?>">FAQ</a></li>
        </ul>
      </nav>
      <div class="flex items-center gap-4">
        <?php include 'components/elements/lang-selector.php' ?>
        <a class="btn-primary" href="<?= url('sign-up') ?>">Sign up</a>
      </div>
    </div>
  </div>
</header>
