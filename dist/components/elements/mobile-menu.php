<nav
  class="fixed top-1/2 left-1/2 z-50 flex min-h-[300px] min-w-[250px] -translate-x-1/2 -translate-y-1/2 flex-col items-center justify-center gap-8 rounded-4xl bg-white p-8 shadow-xl"
  x-show="menuOpen"
  x-transition
>
  <div class="sm:hidden"><?php include 'components/elements/lang-selector.php' ?></div>
  <ul class="flex flex-col flex-wrap items-center justify-center gap-y-8">
    <li><a class="text-xl" href="<?= url('/', '', '#about') ?>">About</a></li>
    <li><a class="text-xl" href="<?= url('/', '', '#features') ?>">Features</a></li>
    <li><a class="text-xl" href="<?= url('/', '', '#reviews') ?>">Reviews</a></li>
    <li><a class="text-xl" href="<?= url('/', '', '#faq') ?>">FAQ</a></li>
  </ul>
</nav>
