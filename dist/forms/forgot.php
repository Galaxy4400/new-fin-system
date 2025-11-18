<form class="form" name="signin" action="./" method="post" data-form data-send="test" data-validation data-after="signinFormAfterSubmit" data-autocomplete-off>
	<div class="form__section">
		<h1 class="form__title h3"><?= t('t.main.forgot_password') ?></h1>
		<p class="form__label"><?= t('t.main.no_worry') ?></p>
	</div>

	<div class="form__section">
		<div class="form__row form__row_1">
			<div class="form__column">
				<input class="form__input input" type="email" name="email" placeholder="<?= t('t.main.form_email_placeholder') ?>" required>
			</div>
		</div>
	</div>

	<div class="form__section"></div>

	<div class="form__section">
		<div class="form__row form__row_1 form__row_btn">
			<div class="form__column">
				<button class="form__btn btn btn_long" type="submit"><?= t('t.main.send') ?></button>
			</div>
			<div class="form__column form-message">
			</div>
		</div>
	</div>
</form>