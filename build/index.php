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

			<section class="form-block">
				<img class="form-block__bg" src="/public/img/bg-1.png" alt="">
				<div class="form-block__container _container">
					<div class="form-block__content">
						<div class="form-block__head">
							<h1 class="form-block__title"><?= t('t.index.main_title') ?></h1>
							<p><?= t('t.index.main_label') ?></p>
						</div>
						<div class="form-block__link">
							<a class="btn btn_fw btn_arrow" href="<?= url('sign-up') ?>"><?= t('t.main.signup') ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
									<path d="M1 7H15M15 7L9 1M15 7L9 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg></a>
						</div>
						<div class="form-block__text">
							<p><?= t('t.index.main_text_1') ?></p>
							<p><?= t('t.index.main_text_2') ?></p>
							<p><?= t('t.index.main_text_3') ?></p>
						</div>
					</div>
					<div class="form-block__form">
						<?php include 'forms/main.php' ?>
					</div>
				</div>
			</section>

			<section class="_container" id="about">
				<div class="two-cal-block">
					<div class="two-cal-block__col">
						<div class="grid">
							<div class="title-block">
								<h2><?= t('t.index.about_title') ?></h2>
								<p class="h5"><?= t('t.index.about_label') ?></p>
							</div>
							<div class="text">
								<p><?= t('t.index.about_text_1') ?></p>
							</div>
						</div>
					</div>
					<div class="two-cal-block__col">
						<figure class="image">
							<img src="/public/img/img1.png" alt="img">
						</figure>
					</div>
				</div>

				<div class="two-cal-block two-cal-block_rev">
					<div class="two-cal-block__col">
						<p><?= t('t.index.about_text_2') ?></p>
					</div>
					<div class="two-cal-block__col">
						<figure class="image">
							<img src="/public/img/img2.jpg" alt="img">
						</figure>
					</div>
				</div>

				<div class="two-cal-block">
					<div class="two-cal-block__col">
						<p><?= t('t.index.about_text_3') ?></p>
					</div>
					<div class="two-cal-block__col">
						<figure class="image">
							<img src="/public/img/img3.jpg" alt="img">
						</figure>
					</div>
				</div>

				<div class="two-cal-block two-cal-block_rev">
					<div class="two-cal-block__col">
						<p><?= t('t.index.about_text_4') ?></p>
					</div>
					<div class="two-cal-block__col">
						<figure class="image">
							<img src="/public/img/img4.jpg" alt="img">
						</figure>
					</div>
				</div>
			</section>

			<section class="v-padding relative" id="features">
				<div class="grid _container">
					<img class="bg-2" src="/public/img/bg-1.png" alt="">
					<div class="head-block relative">
						<div class="title-block half">
							<h2><?= t('t.index.sequrity_title') ?></h2>
						</div>
						<div class="text">
							<p><?= t('t.index.sequrity_text_1') ?></p>
							<p><?= t('t.index.sequrity_text_2') ?></p>
						</div>
					</div>
					<div class="cards cards_grid-0 relative">
						<div class="card">
							<div class="card__bg"></div>
							<div class="card__body">
								<div>
									<p class="h3 with-icon"><img src="/public/img/icon1.svg" alt="icon1"><?= t('t.index.sequrity_item_title_1') ?></p>
								</div>
								<div class="text-small">
									<p><?= t('t.index.sequrity_item_text_1') ?></p>
								</div>
							</div>
						</div>
						<div class="card card_spec-1">
							<div class="card__bg"></div>
							<div class="card__body">
								<div>
									<p class="h3 with-icon"><img src="/public/img/icon2.svg" alt="icon1"><?= t('t.index.sequrity_item_title_2') ?></p>
								</div>
								<div class="text-small">
									<p><?= t('t.index.sequrity_item_text_2') ?></p>
								</div>
							</div>
						</div>
						<div class="card card_spec-2">
							<div class="card__bg"></div>
							<div class="card__body">
								<div>
									<p class="h3 with-icon"><img src="/public/img/icon3.svg" alt="icon1"><?= t('t.index.sequrity_item_title_3') ?></p>
								</div>
								<div class="text-small">
									<p><?= t('t.index.sequrity_item_text_3') ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="v-padding">
				<div class="grid _container">
					<div class="head-block">
						<div class="title-block half">
							<h2><?= t('t.index.feature_title') ?></h2>
							<p class="link right"><?= t('t.index.feature_label') ?></p>
						</div>
					</div>
					<div class="cards">
						<div class="card">
							<div class="card__bg"></div>
							<div class="card__body">
								<div>
									<p class="h3 with-icon-v"><img src="/public/img/icon4.svg" alt="icon1"><?= t('t.index.feature_item_title_1') ?></p>
								</div>
								<div class="text-small">
									<p><?= t('t.index.feature_item_text_1') ?></p>
									<p><?= t('t.index.feature_item_text_2') ?></p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card__bg"></div>
							<div class="card__body">
								<div>
									<p class="h3 with-icon-v"><img src="/public/img/icon5.svg" alt="icon1"><?= t('t.index.feature_item_title_2') ?></p>
								</div>
								<div class="text-small">
									<p><?= t('t.index.feature_item_text_3') ?></p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card__bg"></div>
							<div class="card__body">
								<div>
									<p class="h3 with-icon-v"><img src="/public/img/icon6.svg" alt="icon1"><?= t('t.index.feature_item_title_3') ?></p>
								</div>
								<div class="text-small">
									<p><?= t('t.index.feature_item_text_4') ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="v-padding">
				<div class="_container">
					<div class="two-cal-block grid-align-start">
						<div class="two-cal-block__col">
							<h2><?= t('t.index.innovation_title') ?></h2>
						</div>
						<div class="two-cal-block__col">
							<div class="grid">
								<div class="text">
									<p><?= t('t.index.innovation_text_1') ?></p>
									<p><?= t('t.index.innovation_text_2') ?></p>
									<p><?= t('t.index.innovation_text_3') ?></p>
								</div>
								<div>
									<a class="btn btn_long btn_big btn_arrow" href="<?= url('sign-up') ?>"><?= t('t.main.register') ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
											<path d="M1 7H15M15 7L9 1M15 7L9 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="v-padding-big bg-red-light relative overflow-hidden" id="reviews">
				<img class="bg-3" src="/public/img/bg-1.png" alt="bg">
				<div class="_container-big">
					<div class="relative grid">
						<div class="head-block">
							<h2 class="center"><?= t('t.index.reviews_title') ?></h2>
						</div>
						<div class="star-cards star-cards_grid-0">
							<div class="star-card">
								<div class="star-card__bg"></div>
								<div class="star-card__body">
									<div class="star-card__head">
										<img src="/public/img/av1.svg" alt="av">
										<div>
											<p class="h3"><?= t('t.reviews.name_1') ?></p>
											<img src="/public/img/stars.svg" alt="stars">
										</div>
									</div>
									<div class="text">
										<p><?= t('t.reviews.text_1') ?></p>
									</div>
								</div>
							</div>
							<div class="star-card">
								<div class="star-card__bg"></div>
								<div class="star-card__body">
									<div class="star-card__head">
										<img src="/public/img/av1.svg" alt="av">
										<div>
											<p class="h3"><?= t('t.reviews.name_2') ?></p>
											<img src="/public/img/stars.svg" alt="stars">
										</div>
									</div>
									<div class="text">
										<p><?= t('t.reviews.text_2') ?></p>
									</div>
								</div>
							</div>
							<div class="star-card">
								<div class="star-card__bg"></div>
								<div class="star-card__body">
									<div class="star-card__head">
										<img src="/public/img/av1.svg" alt="av">
										<div>
											<p class="h3"><?= t('t.reviews.name_3') ?></p>
											<img src="/public/img/stars.svg" alt="stars">
										</div>
									</div>
									<div class="text">
										<p><?= t('t.reviews.text_3') ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="v-padding">
				<div class="_container">
					<div class="two-cal-block grid-align-start">
						<div class="two-cal-block__col grid">
							<div class="head-block">
								<h2><?= t('t.index.portfolio_title') ?></h2>
							</div>
							<div class="text-big">
								<p><?= t('t.index.portfolio_text_1') ?></p>
								<p><?= t('t.index.portfolio_text_2') ?></p>
								<p><?= t('t.index.portfolio_text_3') ?></p>
							</div>
						</div>
						<div class="two-cal-block__col right">
							<img src="/public/img/img5.jpg" alt="img">
						</div>
					</div>
				</div>
			</section>

			<section class="v-padding" id="faq">
				<div class="_container">
					<div class="grid-big">
						<div class="head-block">
							<div class="title-block center">
								<h2><?= t('t.index.faq_title') ?></h2>
							</div>
						</div>
						<div class="spoiler" data-spoiler="faq-spoiler">
							<div class="spoiler-item" data-spoiler-item>
								<button class="spoiler-button" type="button" data-spoiler-control>
									<p class="h4"><?= t('t.index.faq_item_title_1') ?></p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</button>
								<div data-spoiler-container>
									<div class="spoiler-content">
										<p><?= t('t.index.faq_item_text_1') ?></p>
									</div>
								</div>
							</div>
							<div class="spoiler-item" data-spoiler-item>
								<button class="spoiler-button" type="button" data-spoiler-control>
									<p class="h4"><?= t('t.index.faq_item_title_2') ?></p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</button>
								<div data-spoiler-container>
									<div class="spoiler-content">
										<p><?= t('t.index.faq_item_text_2') ?></p>
									</div>
								</div>
							</div>
							<div class="spoiler-item" data-spoiler-item>
								<button class="spoiler-button" type="button" data-spoiler-control>
									<p class="h4"><?= t('t.index.faq_item_title_3') ?></p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</button>
								<div data-spoiler-container>
									<div class="spoiler-content">
										<p><?= t('t.index.faq_item_text_3') ?></p>
									</div>
								</div>
							</div>
							<div class="spoiler-item" data-spoiler-item>
								<button class="spoiler-button" type="button" data-spoiler-control>
									<p class="h4"><?= t('t.index.faq_item_title_4') ?></p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</button>
								<div data-spoiler-container>
									<div class="spoiler-content">
										<p><?= t('t.index.faq_item_text_4') ?></p>
									</div>
								</div>
							</div>
							<div class="spoiler-item" data-spoiler-item>
								<button class="spoiler-button" type="button" data-spoiler-control>
									<p class="h4"><?= t('t.index.faq_item_title_5') ?></p>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</button>
								<div data-spoiler-container>
									<div class="spoiler-content">
										<p><?= t('t.index.faq_item_text_5') ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="reviews" class="table-block">
				<div class="table-block__container _container">
					<h2 class="table-block__title"><?= t('t.index.table-block__title') ?></h2>
					<table class="table-block-table">
						<tbody class="table-block-table__body">
							<tr class="table-block-table__row">
								<th class="table-block-table__th"><?= t('t.index.table-block-table__th_1') ?></th>
								<td class="table-block-table__td"><?= t('t.index.table-block-table__td_1') ?></td>
							</tr>
							<tr class="table-block-table__row">
								<th class="table-block-table__th"><?= t('t.index.table-block-table__th_2') ?></th>
								<td class="table-block-table__td"><?= t('t.index.table-block-table__td_2') ?></td>
							</tr>
							<tr class="table-block-table__row">
								<th class="table-block-table__th"><?= t('t.index.table-block-table__th_3') ?></th>
								<td class="table-block-table__td"><?= t('t.index.table-block-table__td_3') ?></td>
							</tr>
							<tr class="table-block-table__row">
								<th class="table-block-table__th"><?= t('t.index.table-block-table__th_4') ?></th>
								<td class="table-block-table__td"><?= t('t.index.table-block-table__td_4') ?></td>
							</tr>
							<tr class="table-block-table__row">
								<th class="table-block-table__th"><?= t('t.index.table-block-table__th_5') ?></th>
								<td class="table-block-table__td"><?= t('t.index.table-block-table__td_5') ?></td>
							</tr>
							<tr class="table-block-table__row">
								<th class="table-block-table__th"><?= t('t.index.table-block-table__th_6') ?></th>
								<td class="table-block-table__td"><?= t('t.index.table-block-table__td_6') ?></td>
							</tr>
							<tr class="table-block-table__row">
								<th class="table-block-table__th"><?= t('t.index.table-block-table__th_7') ?></th>
								<td class="table-block-table__td"><?= t('t.index.table-block-table__td_7') ?></td>
							</tr>
						</tbody>
					</table>
					<div class="table-block__bottom">
						<div class="reviews-body">
							<h2 class="reviews-body__title h3"><?= t('t.index.reviews-body__title') ?><span class="reviews-body__tag"><?= t('t.index.reviews-body__tag') ?></span></h2>
							<div class="reviews-body__rating-block">
								<strong class="reviews-body__rating"><?= t('v.rating') ?></strong>
								<span class="reviews-body__stars" aria-label="<?= t('t.main.aria_rating', ['{rating}' => t('v.rating'), '{score}' => t('v.score')]) ?>"></span>
								<span class="reviews-body__text">
									<span><?= t('t.index.reviews-body__text_reviews', ['{reviews}' => '<strong>' . t('v.reviews') . '</strong>']) ?></span> ·
									<span><?= t('t.index.reviews-body__text_votes', ['{votes}' => '<strong>' . t('v.votes') . '</strong>']) ?></span> ·
									<span><?= t('t.index.reviews-body__text_score', ['{score}' => '<strong>' . t('v.score') . '</strong>']) ?></span>
								</span>
							</div>
							<p class="reviews-body__label"><?= t('t.index.reviews-body__label') ?></p>
						</div>
					</div>
				</div>
			</section>

		</main>

		<?php include 'blocks/footer.php' ?>
	</div>

	<button class="move-up _fixed-block" type="button" data-move-up data-goto="wrapper">
	</button>

</body>

</html>