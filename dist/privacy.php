<?php
include_once 'blocks/engine.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<?php include 'blocks/head.php' ?>

<body>
	<div class="wrapper">
		<?php include 'blocks/header.php' ?>

		<main class="page">

			<nav class="breadcrumbs">
				<div class="readcrumbs__container _container">
					<ul class="breadcrumbs__list">
						<li class="breadcrumbs__item"><a class="breadcrumbs__link" href="<?= url() ?>" title="<?= t('t.main.menu_home') ?>"><?= t('t.main.menu_home') ?></a></li>
						<li class="breadcrumbs__item"><span class="breadcrumbs__current" title="<?= t('t.main.privacy_policy') ?>"><?= t('t.main.privacy_policy') ?></span></li>
					</ul>
				</div>
			</nav>

			<div class="policy">
				<div class="policy__container _container-narrow">
					<div class="policy__info">
						<h1 class="policy__title h2"><?= t('t.main.privacy_policy') ?></h1>
					</div>
					<div class="policy__content _special-styles">
						<p><?= t('t.main.privacy_1', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_2', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_3', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<ul>
							<li><?= t('t.main.privacy_4') ?></li>
						</ul>
						<p><?= t('t.main.privacy_5', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_6', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_7', ['{site_name}' => $offer_name, '{country}' => t('v.countryName'), '{email}' => t('v.email') . $domain]) ?></p>
						<ul>
							<li><?= t('t.main.privacy_8') ?></li>
						</ul>
						<p><?= t('t.main.privacy_9', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_10', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<ul>
							<li><?= t('t.main.privacy_11') ?></li>
						</ul>
						<p><?= t('t.main.privacy_12', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<ul>
							<li><?= t('t.main.privacy_13') ?></li>
						</ul>
						<p><?= t('t.main.privacy_14', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_15', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_16') ?></h2>
						<p><?= t('t.main.privacy_17', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_18', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_19', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_20', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_21') ?></h2>
						<p><?= t('t.main.privacy_22', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_23') ?></h2>
						<p><?= t('t.main.privacy_24', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_25') ?></h2>
						<p><?= t('t.main.privacy_26', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_27', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_28', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_29') ?></h2>
						<p><?= t('t.main.privacy_30', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_31', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<ul class="small">
							<li><?= t('t.main.privacy_32') ?></li>
							<li><?= t('t.main.privacy_33') ?></li>
							<li><?= t('t.main.privacy_34') ?></li>
						</ul>
						<p><?= t('t.main.privacy_35', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_36', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>

						<div class="table-1">
							<div class="table-1__header">
								<div class="table-1__header-column"><?= t('t.main.privacy_37') ?></div>
								<div class="table-1__header-column"><?= t('t.main.privacy_38') ?></div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="1.">
										<p><?= t('t.main.privacy_39', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
										<p><?= t('t.main.privacy_40', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column">
									<p><?= t('t.main.privacy_41', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
								</div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="2.">
										<p><?= t('t.main.privacy_42', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column">
									<p><?= t('t.main.privacy_43', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
								</div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="3.">
										<p><?= t('t.main.privacy_44', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column">
									<p><?= t('t.main.privacy_45', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
								</div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="4.">
										<p><?= t('t.main.privacy_46', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column">
									<p><?= t('t.main.privacy_47', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
								</div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="5.">
										<p><?= t('t.main.privacy_48', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column"><?= t('t.main.privacy_49') ?></div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="6.">
										<p><?= t('t.main.privacy_50', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column">
									<p><?= t('t.main.privacy_51', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
								</div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="7.">
										<p><?= t('t.main.privacy_52', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column">
									<p><?= t('t.main.privacy_53', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
								</div>
							</div>
							<div class="table-1__row">
								<div class="table-1__column">
									<div class="table-1__item" data-num="8.">
										<p><?= t('t.main.privacy_54', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-1__column">
									<p><?= t('t.main.privacy_55', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
								</div>
							</div>
						</div>

						<h2 class="h4"><?= t('t.main.privacy_56') ?></h2>
						<p><?= t('t.main.privacy_57', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_58', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_59', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_60', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_61', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_62') ?></h2>
						<p><?= t('t.main.privacy_63', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_64', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_65', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<br>
						<p class="h4"><?= t('t.main.privacy_66') ?></p>
						<p><?= t('t.main.privacy_67', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>

						<div class="table-2">
							<div class="table-2__row">
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_68') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_69', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_70') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_71', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
										<p><?= t('t.main.privacy_72', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_73') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_74', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
										<p><?= t('t.main.privacy_75', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
							</div>
							<div class="table-2__row">
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_76') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_77', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_78') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_79', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_80') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_81', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
							</div>
							<div class="table-2__row">
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_82') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_83', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_84') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_85', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
								<div class="table-2__column">
									<div class="table-2__title"><?= t('t.main.privacy_86') ?></div>
									<div class="table-2__text">
										<p><?= t('t.main.privacy_87', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
										<p><?= t('t.main.privacy_88', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
									</div>
								</div>
							</div>
						</div>


						<p><?= t('t.main.privacy_89', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_90', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<ul class="small">
							<li><?= t('t.main.privacy_91') ?></li>
							<li><?= t('t.main.privacy_92') ?></li>
							<li><?= t('t.main.privacy_93') ?></li>
							<li><?= t('t.main.privacy_94') ?></li>
						</ul>
						<p><?= t('t.main.privacy_95', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<br>
						<p class="h4"><?= t('t.main.privacy_96') ?></p>
						<p><?= t('t.main.privacy_97', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_98', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_99', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_100') ?></h2>
						<p><?= t('t.main.privacy_101', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_102', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<ul class="small">
							<li><?= t('t.main.privacy_103') ?></li>
							<li><?= t('t.main.privacy_104') ?></li>
							<li><?= t('t.main.privacy_105') ?></li>
						</ul>
						<p><?= t('t.main.privacy_106', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_107') ?></h2>
						<p><?= t('t.main.privacy_108', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_109', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_110', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_111', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_112') ?></h2>
						<p><?= t('t.main.privacy_113', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_114', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_115') ?></h2>
						<p><?= t('t.main.privacy_116', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<h2 class="h4"><?= t('t.main.privacy_117') ?></h2>
						<p><?= t('t.main.privacy_118', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_119', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_120', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_121', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_122', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_123', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_124', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_125', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_126', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_127', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_128', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_129', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_130', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_131', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_132', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_133', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_134', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_135', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_136', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_137', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_138', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_139', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_140', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_141', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_142', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_143', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_144', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_145', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
						<p><?= t('t.main.privacy_146', ['{site_name}' => $offer_name, '{country}' => t('v.countryName')]) ?></p>
					</div>
				</div>
			</div>

		</main>

		<?php include 'blocks/footer.php' ?>
		<!-- <?php include 'blocks/modal.php' ?> -->
	</div>




	<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
	</button>




</body>

</html>