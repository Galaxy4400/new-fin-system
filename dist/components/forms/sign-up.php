<form class="form _loading" name="register" method="post" action="/?action=send<?= isset($_GET['test']) ? '&test=' . urlencode($_GET['test']) : '' ?>" data-form data-send="ajax" data-validation data-after="mainFormAfterSubmit" data-autocomplete-off>
	<input type="hidden" name="id" value="su">
	<input type="hidden" name="country" value="<?= t('v.country') ?>">
	<input type="hidden" name="subid" value="<?= $subid ?>">
	<input type="hidden" name="language" value="<?= $currentLang ?>">

	<div class="form__section">
		<h1 class="form__title h3"><?= t('t.main.signup') ?></h1>
	</div>

	<div class="form__section">
		<div class="form__row form__row_1">
			<div class="form__column">
				<input class="form__input input" type="text" name="first_name" data-regexp="^[^\d]+$" placeholder="<?= t('t.main.form_first_name_placeholder') ?>" required>
			</div>
			<div class="form__column">
				<input class="form__input input" type="text" name="last_name" data-regexp="^[^\d]+$" placeholder="<?= t('t.main.form_last_name_placeholder') ?>" required>
			</div>
			<div class="form__column">
				<input class="form__input input" type="tel" name="phone" data-phone>
			</div>
			<div class="form__column">
				<input class="form__input input" type="email" name="email" placeholder="<?= t('t.main.form_email_placeholder') ?>" required>
			</div>
		</div>
	</div>

	<div class="form__section">
		<div class="form__row form__row_1 form__row_check">
			<div class="form__column">
				<input type="checkbox" name="aggreement" value="1" required data-check data-label="
				<?= t('t.main.aggree', [
					'{privacy_link}' => "<a href='/" . $currentLang . "/privacy'>" . t('t.main.main_form_privacy_link') . "</a>",
					'{terms_link}' => "<a href='/" . $currentLang . "/conditions'>" . t('t.main.main_form_terms_link') . "</a>"
				]) ?>">
			</div>
		</div>
		<div class="form__row form__row_1 form__row_btn">
			<div class="form__column">
				<button class="form__btn btn btn_long" type="submit"><?= t('t.main.signup') ?></button>
			</div>
			<div class="form__column form-message">
			</div>
		</div>
		<div class="form__row form__row_1">
			<div class="form__column">
				<p class="form__sub-text"><?= t('t.main.have_account') ?> <a class="form__sub-link" href="<?= url('sign-in') ?>"><?= t('t.main.signin') ?></a></p>
			</div>
		</div>
	</div>
</form>