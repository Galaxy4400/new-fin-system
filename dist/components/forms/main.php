<form
  name="form"
  method="post"
  class="group gradient-border-block relative self-start overflow-hidden rounded-[20px] bg-white p-5 pb-7 sm:max-w-[459px]"
  action="/?action=send<?= isset($_GET['test']) ? '&test=' . urlencode($_GET['test']) : '' ?>"
  data-form
>
  <input type="hidden" name="id" value="m<?= ++$main_form_counter ?>" />
  <input type="hidden" name="country" value="<?= t('v.country') ?>" />
  <input type="hidden" name="subid" value="<?= $subid ?>" />
  <input type="hidden" name="language" value="<?= $currentLang ?>" />

  <?php include 'components/elements/form-loader.php' ?>

  <div class="grid gap-5">
    <header class="text-center">
      <h3>Register now</h3>
    </header>
    <div class="grid gap-4">
      <label class="grid gap-1.5">
        <span class="label">First Name</span>
        <input
          class="input"
          type="text"
          name="first_name"
          placeholder="Enter your First Name"
          required
          data-regexp="^[^\d]+$"
          data-should-validate
          value="test"
        />
      </label>
      <label class="grid gap-1.5">
        <span class="label">Last Name</span>
        <input
          class="input"
          type="text"
          name="last_name"
          placeholder="Enter your Last Name"
          required
          data-regexp="^[^\d]+$"
          data-should-validate
          value="test"
        />
      </label>
      <label class="grid gap-1.5">
        <span class="label">Email</span>
        <input
          class="input"
          type="email"
          name="email"
          placeholder="Enter your Email"
          required
          data-should-validate
          value="test@test.test"
        />
      </label>
      <label class="grid gap-1.5">
        <span class="label">Phone</span>
        <input class="input" type="tel" name="phone" data-phone required data-should-validate value="612345678" />
      </label>
    </div>
    <div>
      <button
        class="btn-primary flex w-full items-center gap-2.5 group-data-novalid:cursor-default group-data-novalid:bg-gray-300"
      >
        Sign Up Now <?php include 'components/icons/arrow.php' ?>
      </button>
    </div>

    <div class="form-message" data-form-message>
      <p class="h4" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <footer class="grid items-center gap-5 text-center">
      <p class="text-sm leading-[140%] opacity-60">
        By entering your personal information and clicking the button, you accept the Privacy Policy and Terms of Use of
        the website.
      </p>
      <div class="flex flex-wrap justify-center gap-2"><?php include 'components/icons/payments.php' ?></div>
    </footer>
  </div>
</form>
