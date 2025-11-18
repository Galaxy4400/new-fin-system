<?php
include_once 'lang/translation.php';
?>

<div class="hello-modal" data-modal="hello-modal">
	<div class="hello-modal__container _container">
		<div class="hello-modal__body">
			<div class="hello-modal__content">
				<h3 class="hello-modal__title"><?= t('t.main.hello-modal__title') ?></h3>
				<p class="hello-modal__text"><?= t('t.main.hello-modal__text') ?></p>
			</div>
			<div class="hello-modal__actions">
				<a class="hello-modal__link btn" href="<?= url('sign-up') ?>"><?= t('t.main.join_now') ?></a>
				<button class="hello-modal__close btn" type="button" data-link="hello-modal"><?= t('t.main.close') ?></button>
			</div>
		</div>
	</div>
</div>

<div class="exit-modal" data-modal="exit-modal">
	<div class="exit-modal__container _container">
		<div class="exit-modal__body">
			<div class="exit-modal__content">
				<h3 class="exit-modal__title"><?= t('t.main.exit-modal__title') ?></h3>
				<p class="exit-modal__text"><?= t('t.main.exit-modal__text') ?></p>
			</div>
			<div class="exit-modal__actions">
				<a class="exit-modal__link btn" href="<?= url('sign-up') ?>"><?= t('t.main.complete_registration') ?></a>
				<button class="exit-modal__close btn" type="button" data-link="exit-modal"><?= t('t.main.skip') ?></button>
			</div>
		</div>
	</div>
</div>

<div class="back-modal" data-modal="back-modal">
	<div class="back-modal__container _container">
		<div class="back-modal__body">
			<div class="back-modal__content">
				<h3 class="back-modal__title"><?= t('t.main.back-modal__title') ?></h3>
				<p class="back-modal__text"><?= t('t.main.back-modal__text') ?></p>
			</div>
			<div class="back-modal__actions">
				<button class="back-modal__link btn" type="button" data-link="back-modal"><?= t('t.main.continue') ?></button>
				<button class="back-modal__close btn" type="button" onclick="history.back()"><?= t('t.main.exit') ?></button>
			</div>
		</div>
	</div>
</div>

<div class="activity-modal" data-modal="activity-modal">
	<div class="activity-modal__container _container">
		<div class="activity-modal__body">
			<div class="activity-modal__content">
				<h3 class="activity-modal__title"><?= t('t.main.activity-modal__title') ?></h3>
				<p class="activity-modal__text"><?= t('t.main.activity-modal__text') ?></p>
			</div>
			<div class="activity-modal__actions">
				<button class="activity-modal__link btn" type="button" data-link="activity-modal"><?= t('t.main.continue') ?></button>
			</div>
		</div>
	</div>
</div>

<div class="scroll-modal" data-modal="scroll-modal">
	<div class="scroll-modal__container _container">
		<div class="scroll-modal__body">
			<div class="scroll-modal__content">
				<h3 class="scroll-modal__title"><?= t('t.main.scroll-modal__title') ?></h3>
			</div>
			<div class="scroll-modal__actions">
				<a class="scroll-modal__link btn" href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?></a>
				<button class="scroll-modal__close btn" type="button" data-link="scroll-modal"><?= t('t.main.close') ?></button>
			</div>
		</div>
	</div>
</div>