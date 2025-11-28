<form
  name="form"
  method="post"
  class="main-form special-block"
  action="/send<?= isset($_GET['test']) ? '?test=' . urlencode($_GET['test']) : '' ?>"
  data-form
>
  <input type="hidden" name="id" value="su" />
  <input type="hidden" name="country" value="<?= t('v.country') ?>" />
  <input type="hidden" name="subid" value="<?= $subid ?>" />
  <input type="hidden" name="language" value="<?= $currentLang ?>" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="main-form__body">
    <header class="main-form__header">
      <p class="h3"><?= t('t.main.register') ?></p>
    </header>
    <div class="main-form__inputs">
      <label class="main-form__label">
        <span class="label"><?= t('t.forms.first_name_label') ?></span>
        <input
          class="input"
          type="text"
          name="first_name"
          placeholder="<?= t('t.forms.first_name_placeholder') ?>"
          required
          data-regexp="^[^\d]+$"
          data-should-validate
        />
      </label>
      <label class="main-form__label">
        <span class="label"><?= t('t.forms.last_name_label') ?></span>
        <input
          class="input"
          type="text"
          name="last_name"
          placeholder="<?= t('t.forms.last_name_placeholder') ?>"
          required
          data-regexp="^[^\d]+$"
          data-should-validate
        />
      </label>
      <label class="main-form__label">
        <span class="label"><?= t('t.forms.email_label') ?></span>
        <input
          class="input"
          type="email"
          name="email"
          placeholder="<?= t('t.forms.email_placeholder') ?>"
          required
          data-should-validate
        />
      </label>
      <label class="main-form__label">
        <span class="label"><?= t('t.forms.phone_label') ?></span>
        <input
          class="input"
          type="tel"
          name="phone"
          placeholder="<?= t('t.forms.phone_placeholder') ?>"
          data-phone
          required
          data-should-validate
        />
      </label>
    </div>
    <div>
      <button class="main-form__btn btn btn_primary">
        <?= t('t.main.signup_now') ?> <?php include 'components/icons/arrow.php' ?>
      </button>
    </div>

    <div class="form-message" data-form-message role="alert">
      <p class="h4" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <footer class="main-form__footer">
      <p class="main-form__policy">
        <?= t('t.forms.form_footer', [ '{privacy_link}' => url('privacy'), '{terms_link}' => url('conditions') ])?>
      </p>
      <div class="main-form__payments"><?php include 'components/icons/payments.php' ?></div>
    </footer>
  </div>
</form>
