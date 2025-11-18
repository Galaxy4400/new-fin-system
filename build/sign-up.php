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

			<div class="v-padding-big relative">
				<img class="bg-2" src="/public/img/bg-1.png" alt="">
				<div class="_container">
					<div class="flex-center relative">
						<?php include 'forms/main.php' ?>
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