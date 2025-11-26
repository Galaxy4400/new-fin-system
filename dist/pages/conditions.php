<div class="py-10 md:py-16">
  <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
      <nav class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
        <a href="<?= url() ?>" class="breadcrumb-item"><?= t('t.main.menu_home') ?></a>
        <span class="breadcrumb-item"><?= t('t.main.menu_conditions') ?></span>
      </nav>
      <h1><?= t('t.main.menu_conditions') ?></h1>
    </div>
    <div class="grid gap-6 md:gap-8">
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_1') ?></h2>
        <p>
          <?= t('t.policy.conditions_2', ['{email}' => '<a href="mailto:' . getEmail() . '">'. getEmail() .'</a>']) ?>
        </p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_3') ?></h2>
        <p><?= t('t.policy.conditions_4') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_5') ?></h2>
        <p><?= t('t.policy.conditions_6') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_7') ?></h2>
        <p><?= t('t.policy.conditions_8') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_9') ?></h2>
        <p><?= t('t.policy.conditions_10') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_11') ?></h2>
        <p><?= t('t.policy.conditions_12') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_13') ?></h2>
        <p><?= t('t.policy.conditions_14') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_15') ?></h2>
        <p><?= t('t.policy.conditions_16') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.conditions_17') ?></h2>
        <p><?= t('t.policy.conditions_18') ?></p>
      </div>
    </div>
  </div>
</div>
