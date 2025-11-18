<header>
	<div class="max-w-container mx-auto bg-purple-500 px-4">
		<a href="<?= url() ?>">
			<div><?= $offer_name ?></div>
		</a>
		<div>
			<div>
				<nav>
					<ul>
						<li><a href="<?= url('/', '', '#about') ?>">Item 1</a></li>
						<li><a href="<?= url('/', '', '#features') ?>">Item 2</a></li>
						<li><a href="<?= url('/', '', '#reviews') ?>">Item 3</a></li>
						<li><a href="<?= url('/', '', '#faq') ?>">Item 4</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div>
			<div>
				<a href="<?= url('sign-up') ?>">Sign up</a>
			</div>
			<!-- <div>
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
				</div> -->
		</div>
	</div>
</header>