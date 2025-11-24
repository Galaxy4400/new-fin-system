<form
  name="form"
  method="post"
  class="group gradient-border-block relative self-start overflow-hidden rounded-[20px] bg-white p-5 pb-7 sm:max-w-[495px] md:min-h-[602px] md:rounded-[40px]"
  action="
	/?action=send<?= isset($_GET['test']) ? '&test=' . urlencode($_GET['test']) : '' ?>"
  data-form
>
  <input type="hidden" name="id" value="su" />
  <input type="hidden" name="country" value="<?= t('v.country') ?>" />
  <input type="hidden" name="subid" value="<?= $subid ?>" />
  <input type="hidden" name="language" value="<?= $currentLang ?>" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="grid gap-5">
    <header class="text-center">
      <p class="h3"><?= t('t.main.register') ?></p>
    </header>
    <div class="grid gap-4">
      <label class="grid gap-1.5">
        <span class="label"><?= t('t.main.form_first_name_label') ?></span>
        <input
          class="input"
          type="text"
          name="first_name"
          placeholder="<?= t('t.main.form_first_name_placeholder') ?>"
          required
          data-regexp="^[^\d]+$"
          data-should-validate
        />
      </label>
      <label class="grid gap-1.5">
        <span class="label"><?= t('t.main.form_last_name_label') ?></span>
        <input
          class="input"
          type="text"
          name="last_name"
          placeholder="<?= t('t.main.form_last_name_placeholder') ?>"
          required
          data-regexp="^[^\d]+$"
          data-should-validate
        />
      </label>
      <label class="grid gap-1.5">
        <span class="label"><?= t('t.main.form_email_label') ?></span>
        <input
          class="input"
          type="email"
          name="email"
          placeholder="<?= t('t.main.form_email_placeholder') ?>"
          required
          data-should-validate
        />
      </label>
      <label class="grid gap-1.5">
        <span class="label"><?= t('t.main.form_phone_label') ?></span>
        <input class="input" type="tel" name="phone" data-phone required data-should-validate />
      </label>
    </div>
    <div>
      <button
        class="btn-primary flex w-full items-center gap-2.5 group-data-novalid:cursor-default group-data-novalid:bg-gray-300"
      >
        <?= t('t.main.signup-now') ?> <?php include 'components/icons/arrow.php' ?>
      </button>
    </div>

    <div class="form-message" data-form-message>
      <p class="h4" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <footer class="grid items-center gap-5 text-center">
      <p class="text-sm leading-[140%] opacity-60">
        <?= t('t.main.main-form__footer', [ '{privacy_link}' => url('privacy'), '{terms_link}' => url('conditions') ])
        ?>
      </p>
      <div class="flex flex-wrap justify-center gap-2"><?php include 'components/icons/payments.php' ?></div>
    </footer>
  </div>
</form>
