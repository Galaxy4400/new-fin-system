<form class="form" name="signin" action="./" method="post" data-form data-send="test" data-validation data-after="signinFormAfterSubmit" data-autocomplete-off>
	<div class="form__section">
		<h1 class="form__title h3"><?= t('t.main.signin') ?></h1>
	</div>

	<div class="form__section">
		<div class="form__row form__row_1">
			<div class="form__column">
				<input class="form__input input" type="email" name="email" placeholder="<?= t('t.main.form_email_placeholder') ?>" required>
			</div>
			<div class="form__column">
				<input class="form__input input" type="password" name="password" placeholder="<?= t('t.main.form_password_placeholder') ?>" required>
			</div>
			<div class="form__column">
				<a class="form__forgot" href="<?= url('forgot') ?>"><?= t('t.main.forgot') ?></a>
			</div>
		</div>
	</div>

	<div class="form__section">
		<div class="form__row form__row_1 form__row_btn">
			<div class="form__column">
				<button class="form__btn btn btn_long" type="submit"><?= t('t.main.signin') ?></button>
			</div>
			<div class="form__column form-message">
			</div>
		</div>
		<div class="form__row form__row_1">
			<div class="form__column">
				<p class="form__sub-text"><?= t('t.main.no_account') ?> <a class="form__sub-link" href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?></a></p>
			</div>
		</div>
	</div>
</form>