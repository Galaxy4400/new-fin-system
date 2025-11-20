<footer class="bg-primary-lighter py-14">
  <div class="content-container">
    <div class="grid gap-7 md:gap-10">
      <div class="grid gap-5">
        <div class="relative flex flex-col flex-wrap justify-between gap-x-8 gap-y-3 md:flex-row md:items-center">
          <div class="pr-28 text-xl font-medium uppercase md:pr-0"><?= $offer_name ?></div>
          <nav class="flex max-w-[755px] grow flex-col flex-wrap gap-5 md:flex-row md:justify-evenly">
            <ul class="flex flex-col gap-x-5 gap-y-4 md:flex-row md:gap-x-12">
              <li>
                <a class="link" href="<?= url('/', '', '#about') ?>">About</a>
              </li>
              <li>
                <a class="link" href="<?= url('/', '', '#features') ?>">Features</a>
              </li>
              <li>
                <a class="link" href="<?= url('/', '', '#reviews') ?>">Reviews</a>
              </li>
              <li>
                <a class="link" href="<?= url('/', '', '#faq') ?>">FAQ</a>
              </li>
            </ul>
            <ul class="flex flex-col gap-x-5 gap-y-4 md:flex-row">
              <li>
                <a class="link" href="<?= url('privacy') ?>">Privacy Policy</a>
              </li>
              <li>
                <a class="link" href="<?= url('conditions') ?>">Conditions of Use</a>
              </li>
            </ul>
          </nav>
          <div class="absolute -top-1.5 right-0 md:static">
            <?php include 'components/elements/lang-selector.php' ?>
          </div>
        </div>
        <div class="inline-flex items-center gap-2"><?php include 'components/icons/footer-socials.php' ?></div>
      </div>
      <div>
        General Investing Disclaimer Important: <br />All profit examples are illustrative and do not guarantee similar
        results. Trading in any market carries potential risks, and performance depends entirely on your investment
        choices. Always evaluate potential losses and make sure to trade responsibly. [brand] assumes no liability for
        financial outcomes.
      </div>
      <div class="text-center">Copyright 2025 © BRAND, All Right Reserved</div>
    </div>
  </div>
</footer>
