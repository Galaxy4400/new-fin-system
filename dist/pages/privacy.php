<div class="py-10 md:py-16">
  <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
      <nav class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
        <a href="<?= url() ?>" class="breadcrumb-item"> <?= t('t.main.menu_home') ?></a>
        <span class="breadcrumb-item"> <?= t('t.main.menu_privacy') ?></span>
      </nav>
      <h1><?= t('t.main.menu_privacy') ?></h1>
    </div>
    <div class="grid gap-6 md:gap-8">
      <div class="grid gap-2">
        <p class="text-sm"><?= t('t.main.last_updated', ['{date}' => date('d.m.Y')]) ?></p>
        <p><?= t('t.policy.privacy_1') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <p class="h3 disc"><?= t('t.policy.privacy_2') ?></p>
        <p><?= t('t.policy.privacy_3', ['{email}' => '<a href="mailto:' . getEmail() . '">'. getEmail() .'</a>']) ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <p class="h3 disc"><?= t('t.policy.privacy_4') ?></p>
        <p><?= t('t.policy.privacy_5') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <p class="h3 disc"><?= t('t.policy.privacy_6') ?></p>
        <p><?= t('t.policy.privacy_7') ?></p>
      </div>

      <div class="grid gap-2 md:gap-4">
        <p class="h3 disc"><?= t('t.policy.privacy_8') ?></p>
        <p><?= t('t.policy.privacy_9') ?></p>
      </div>

      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_10') ?></h2>
        <p><?= t('t.policy.privacy_11') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_12') ?></h2>
        <p><?= t('t.policy.privacy_13') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_14') ?></h2>
        <p><?= t('t.policy.privacy_15') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_16') ?></h2>
        <p><?= t('t.policy.privacy_17') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_18') ?></h2>
        <div>
          <p><?= t('t.policy.privacy_19') ?></p>
          <ul class="list">
            <li><?= t('t.policy.privacy_20') ?></li>
            <li><?= t('t.policy.privacy_21') ?></li>
            <li><?= t('t.policy.privacy_22') ?></li>
          </ul>
          <p><?= t('t.policy.privacy_23') ?></p>
        </div>
      </div>

      <div class="border-primary rounded-2xl md:border md:p-8">
        <div class="mb-2 flex grid-cols-3 gap-6 md:mb-5 md:grid md:grid-cols-[3fr_2fr]">
          <p class="text-primary text-base"><?= t('t.policy.scope') ?></p>
          <p class="text-primary text-base"><?= t('t.policy.legal_basis') ?></p>
        </div>
        <div class="border-primary grid gap-x-6 gap-y-2 border-b py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_24') ?></p>
          <p><?= t('t.policy.privacy_25') ?></p>
        </div>
        <div class="border-primary grid gap-x-6 gap-y-2 border-b py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_26') ?></p>
          <p><?= t('t.policy.privacy_27') ?></p>
        </div>
        <div class="border-primary grid gap-x-6 gap-y-2 border-b py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_28') ?></p>
          <p><?= t('t.policy.privacy_29') ?></p>
        </div>
        <div class="border-primary grid gap-x-6 gap-y-2 border-b py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_30') ?></p>
          <p><?= t('t.policy.privacy_31') ?></p>
        </div>
        <div class="border-primary grid gap-x-6 gap-y-2 border-b py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_32') ?></p>
          <p><?= t('t.policy.privacy_33') ?></p>
        </div>
        <div class="border-primary grid gap-x-6 gap-y-2 border-b py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_34') ?></p>
          <p><?= t('t.policy.privacy_35') ?></p>
        </div>
        <div class="border-primary grid gap-x-6 gap-y-2 border-b py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_36') ?></p>
          <p><?= t('t.policy.privacy_37') ?></p>
        </div>
        <div class="grid gap-x-6 gap-y-2 py-4 md:grid-cols-[3fr_2fr]">
          <p class="h3"><?= t('t.policy.privacy_38') ?></p>
          <p><?= t('t.policy.privacy_39') ?></p>
        </div>
      </div>

      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_40') ?></h2>
        <p><?= t('t.policy.privacy_41') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_42') ?></h2>
        <p><?= t('t.policy.privacy_43') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <p class="text-2xl font-medium"><?= t('t.policy.privacy_44') ?></p>
        <p><?= t('t.policy.privacy_45') ?></p>
      </div>

      <div class="border-primary max-md:grid max-md:gap-1 md:rounded-2xl md:border md:p-6">
        <div
          class="border-primary grid items-start gap-2 py-2 md:grid-cols-[15fr_50fr_35fr] md:gap-6 md:border-b md:py-4"
        >
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:min-h-12"><?= t('t.policy.type_of_cookie') ?></p>
            <p><?= t('t.policy.privacy_46') ?></p>
          </div>
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:min-h-12"><?= t('t.policy.scope') ?></p>
            <p><?= t('t.policy.privacy_47') ?></p>
          </div>
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:min-h-12"><?= t('t.policy.additional_information') ?></p>
            <p><?= t('t.policy.privacy_48') ?></p>
          </div>
        </div>
        <div
          class="border-primary grid items-start gap-2 py-2 md:grid-cols-[15fr_50fr_35fr] md:gap-6 md:border-b md:py-4"
        >
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:hidden"><?= t('t.policy.type_of_cookie') ?></p>
            <p><?= t('t.policy.privacy_49') ?></p>
          </div>
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:hidden"><?= t('t.policy.scope') ?></p>
            <p><?= t('t.policy.privacy_50') ?></p>
          </div>
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:hidden"><?= t('t.policy.additional_information') ?></p>
            <p><?= t('t.policy.privacy_51') ?></p>
          </div>
        </div>
        <div class="grid items-start gap-6 py-4 md:grid-cols-[15fr_50fr_35fr]">
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:hidden"><?= t('t.policy.type_of_cookie') ?></p>
            <p><?= t('t.policy.privacy_52') ?></p>
          </div>
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:hidden"><?= t('t.policy.scope') ?></p>
            <p><?= t('t.policy.privacy_53') ?></p>
          </div>
          <div class="grid items-start gap-2 md:mb-0 md:gap-6">
            <p class="text-primary text-base md:hidden"><?= t('t.policy.additional_information') ?></p>
            <p><?= t('t.policy.privacy_54') ?></p>
          </div>
        </div>
      </div>

      <div class="grid gap-2 md:gap-4">
        <div>
          <p><?= t('t.policy.privacy_55') ?></p>
          <ul class="list">
            <li>Firefox</li>
            <li>Microsoft Edge</li>
            <li>Google Chrome</li>
            <li>Safari</li>
          </ul>
          <p><?= t('t.policy.privacy_56') ?></p>
        </div>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_57') ?></h2>
        <p><?= t('t.policy.privacy_58') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_59') ?></h2>
        <div>
          <p><?= t('t.policy.privacy_60') ?></p>
          <ul class="list">
            <li><?= t('t.policy.privacy_61') ?></li>
            <li><?= t('t.policy.privacy_62') ?></li>
            <li><?= t('t.policy.privacy_63') ?></li>
          </ul>
          <p><?= t('t.policy.privacy_64') ?></p>
        </div>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_65') ?></h2>
        <p><?= t('t.policy.privacy_66') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_67') ?></h2>
        <p><?= t('t.policy.privacy_68') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_69') ?></h2>
        <p><?= t('t.policy.privacy_70') ?></p>
      </div>
      <div class="grid gap-2 md:gap-4">
        <h2 class="text-2xl font-medium"><?= t('t.policy.privacy_71') ?></h2>
        <p><?= t('t.policy.privacy_72') ?></p>
      </div>
    </div>
  </div>
</div>
