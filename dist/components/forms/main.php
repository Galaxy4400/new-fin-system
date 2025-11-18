<div class="main-form">
	<form class="main-form__form form _loading" name="form" method="post" action="/?action=send<?= isset($_GET['test']) ? '&test=' . urlencode($_GET['test']) : '' ?>" data-form data-send="ajax" data-validation data-after="mainFormAfterSubmit" data-autocomplete-off>
		<input type="hidden" name="id" value="m<?= ++$main_form_counter ?>">
		<input type="hidden" name="country" value="<?= t('v.country') ?>">
		<input type="hidden" name="subid" value="<?= $subid ?>">
		<input type="hidden" name="language" value="<?= $lang ?>">

		<div class="form__section">
			<h3><?= t('t.main.register') ?></h3>
		</div>

		<div class="form__section">
			<div class="form__row form__row_1">
				<div class="form__column">
					<label class="form__label">
						<?= t('t.main.form_first_name_label') ?>
						<input class="form__input input" type="text" name="first_name" data-regexp="^[^\d]+$" placeholder="<?= t('t.main.form_first_name_placeholder') ?>" required>
					</label>
				</div>
				<div class="form__column">
					<label class="form__label">
						<?= t('t.main.form_last_name_label') ?>
						<input class="form__input input" type="text" name="last_name" data-regexp="^[^\d]+$" placeholder="<?= t('t.main.form_last_name_placeholder') ?>" required>
					</label>
				</div>
				<div class="form__column">
					<label class="form__label">
						<?= t('t.main.form_email_label') ?>
						<input class="form__input input" type="email" name="email" placeholder="<?= t('t.main.form_email_placeholder') ?>" required>
					</label>
				</div>
				<div class="form__column">
					<label class="form__label">
						<?= t('t.main.form_phone_label') ?>
						<input class="form__input input" type="tel" name="phone" data-phone>
					</label>
				</div>
			</div>
			<div class="form__row form__row_1 form__row_btn">
				<div class="form__column">
					<button class="form__btn btn btn_fw btn_arrow" type="submit"><?= t('t.main.signup-now') ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
							<path d="M1 7H15M15 7L9 1M15 7L9 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg></button>
				</div>
				<div class="form__column form-message">
				</div>
			</div>
		</div>

		<div class="form__section">
			<div class="main-form__footer">
				<p><?= t('t.main.main-form__footer', [
							'{privacy_link}' => '<a href="' . url('privacy') . '">' . t('t.main.main_form_privacy_link') . '</a>',
							'{terms_link}' => '<a href="' . url('conditions') . '">' . t('t.main.main_form_terms_link') . '</a>'
						]) ?></p>
				<!-- By entering your personal information and clicking the button, you accept the Privacy Policy and Terms of Use of the website. -->
			</div>
		</div>

		<div class="form__section">
			<div class="main-form__labels">
				<img src="/public/img/form-icon-1.svg" alt="icon1">
				<img src="/public/img/form-icon-2.svg" alt="icon2">
				<img src="/public/img/form-icon-3.svg" alt="icon3">
				<img src="/public/img/form-icon-4.svg" alt="icon4">
			</div>
		</div>
	</form>
</div>