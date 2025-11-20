<section class="help-form-block">
  <div class="help-form-block__container _container">
    <h2 class="help-form-block__title"><?= t('t.main.help-form-block__title') ?></h2>
    <div class="help-form-block__body">
      <form
        class="form"
        name="help-form"
        action="/reg/send2.php"
        method="post"
        data-form
        data-send="ajax"
        data-validation
        data-after="helpFormAfterSubmit"
        data-autocomplete-off
      >
        <div class="form__section">
          <div class="form__row form__row_2">
            <div class="form__column">
              <input
                class="form__input input input_small"
                id="name"
                placeholder="<?= t('t.main.form_first_name_placeholder') ?>"
                type="text"
                name="name"
                required
              />
            </div>
            <div class="form__column">
              <input
                class="form__input input input_small"
                id="email"
                placeholder="<?= t('t.main.form_email_placeholder') ?>"
                type="email"
                name="email"
                required
              />
            </div>
          </div>
          <div class="form__row form__row_1">
            <div class="form__column">
              <textarea
                class="form__input input input_small"
                id="message"
                placeholder="<?= t('t.main.form_describe_placeholder') ?>"
                name="message"
                required
              ></textarea>
            </div>
          </div>
          <!-- <div class="form__row form__row_1">
						<div class="form__column">
							<input type="file" name="file" data-file data-min="1">
						</div>
					</div> -->
        </div>
        <div class="form__section">
          <div class="form__row form__row_1">
            <div class="form__column">
              <button class="form__btn btn btn_big btn_fw" type="submit"><?= t('t.main.signup') ?></button>
            </div>
            <div class="form__column form-message"></div>
          </div>
          <div class="form__row form__row_1">
            <p class="form__sub-text">
              <?= t('t.main.help-form__sub-text', [ '{privacy_link}' => '<a href="/' . $currentLang . '/privacy"
                >' . t('t.main.main_form_privacy_link') . '</a
              >', '{terms_link}' => '<a href="/' . $currentLang . '/conditions"
                >' . t('t.main.main_form_terms_link') . '</a
              >' ]) ?>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
