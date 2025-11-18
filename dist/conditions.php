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
						<li class="breadcrumbs__item"><span class="breadcrumbs__current" title="<?= t('t.main.conditions_of_use') ?>"><?= t('t.main.conditions_of_use') ?></span></li>
					</ul>
				</div>
			</nav>

			<div class="policy">
				<div class="policy__container _container-narrow">
					<div class="policy__info">
						<h1 class="policy__title h2"><?= t('t.main.conditions_of_use') ?></h1>
					</div>
					<div class="policy__content _special-styles">
						<h2 class="h4"><?= t('t.main.conditions_1') ?></h2>
						<p><?= t('t.main.conditions_2', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_3', ['{site_name}' => $offer_name, '{email}' => t('v.email') . $domain]) ?></p>
						<p><?= t('t.main.conditions_4', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_5', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_6', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_7') ?></h2>
						<p><?= t('t.main.conditions_8', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_9', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_10', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_11', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_12', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_13') ?></h2>
						<p><?= t('t.main.conditions_14', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_15', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_16') ?></h2>
						<p><?= t('t.main.conditions_17', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_18', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_19', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_20', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_21', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_22', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_23', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_24', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_25', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_26', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_27', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_28', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_29') ?></h2>
						<p><?= t('t.main.conditions_30', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_31', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_32', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_33', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_34') ?></h2>
						<p><?= t('t.main.conditions_35', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_36', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_37', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_38', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_39', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_40') ?></h2>
						<p><?= t('t.main.conditions_41', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_42', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_43', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_44') ?></h2>
						<p><?= t('t.main.conditions_45', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_46', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_47', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_48', ['{site_name}' => $offer_name]) ?></p>
						<h2 class="h4"><?= t('t.main.conditions_49') ?></h2>
						<p><?= t('t.main.conditions_50', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_51', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_52', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_53', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_54', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_55', ['{site_name}' => $offer_name]) ?></p>
						<p><?= t('t.main.conditions_56', ['{site_name}' => $offer_name]) ?></p>
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