<?php
include_once('lang/translation.php');
?>
<header>
	<div>
		<div>
			<a href="<?= url() ?>">
				<div><?= $offer_name ?></div>
			</a>
			<div>
				<div>
					<nav>
						<ul>
							<li><a href="<?= url('/', '', '#about') ?>"><?= t('t.main.menu_about') ?></a></li>
							<li><a href="<?= url('/', '', '#features') ?>"><?= t('t.main.menu_features') ?></a></li>
							<li><a href="<?= url('/', '', '#reviews') ?>"><?= t('t.main.menu_reviews') ?></a></li>
							<li><a href="<?= url('/', '', '#faq') ?>"><?= t('t.main.menu_faq') ?></a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div>
				<div>
					<a href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?></a>
				</div>
				<div>
					<button><?= $lang ?></button>
					<div>
						<div>
							<ul>
								<?php foreach ($supportedLanguages as $listLang) { ?>
									<li data-lang="<?= $listLang ?>"><?= $listLang ?></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>