<?php
include_once('lang/translation.php');
?>
<header class="header">
	<div class="header__container _container">
		<div class="header__body">
			<a class="header__logo" href="<?= url() ?>">
				<div class="logo h2"><?= $offer_name ?></div>
			</a>
			<div class="header__main">
				<div class="menu">
					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item"><a class="menu__link menu-link" href="<?= url('/', '', '#about') ?>"><?= t('t.main.menu_about') ?></a></li>
							<li class="menu__item"><a class="menu__link menu-link" href="<?= url('/', '', '#features') ?>"><?= t('t.main.menu_features') ?></a></li>
							<li class="menu__item"><a class="menu__link menu-link" href="<?= url('/', '', '#reviews') ?>"><?= t('t.main.menu_reviews') ?></a></li>
							<li class="menu__item"><a class="menu__link menu-link" href="<?= url('/', '', '#faq') ?>"><?= t('t.main.menu_faq') ?></a></li>
						</ul>
						<div class="header-actions header-actions_mobile">
							<div class="header-actions__action">
								<a class="header-actions__sign-in btn" href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?></a>
							</div>
							<div class="header-actions__langs">
								<button class="header__lang-btn btn" data-link="language-selector_mobile"><?= $lang ?></button>
								<div class="language-selector language-selector_mobile">
									<div class="language-dropdown">
										<ul class="language-list">
											<?php foreach ($supportedLanguages as $listLang) { ?>
												<li data-lang="<?= $listLang ?>"><?= $listLang ?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<div class="header-actions header-actions_screen">
				<div class="header-actions__action">
					<a class="header-actions__sign-in btn" href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?></a>
				</div>
				<div class="header-actions__langs">
					<button class="header__lang-btn btn" data-link="language-selector_screen"><?= $lang ?></button>
					<div class="language-selector language-selector_screen">
						<div class="language-dropdown">
							<ul class="language-list">
								<?php foreach ($supportedLanguages as $listLang) { ?>
									<li data-lang="<?= $listLang ?>"><?= $listLang ?></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<button class="menu-icon" type="button" data-link="menu__body" aria-label="<?= t('t.main_aria_open_menu') ?>">
			</button>
		</div>
	</div>
</header>