<!DOCTYPE html>
<html lang="en" class="header-align-center">
	<head>
		<title>Carwalla</title>

		<?php include 'includes/header.php'; ?>

		<div class="content bg-gradient-blue" id="content">

			<div class="box-wr box-step text-center">
				<div class="container wow fadeIn" data-wow-delay="0.2s">
					<a href="javascript:history.go(-1)" class="btn-back color-theme">Back</a>
					<div class="dots-nav">
						<a href="step-1.php" class="bg-theme">1</a>
						<a href="step-3.php" class="bg-brick">2</a>
						<a href="step-4.php" class="bg-theme">3</a>
					</div>
					<div class="step-item">
						<h1 class="color-theme">What’s the price range you want to pay?</h1>
						<form action="step-10-v2.php" class="form-simple form-md wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-item text-center">
										<div class="filter-range text-center">
											<span class="min-value alignleft">$10,000</span>
											<span class="max-value alignright">$20,000</span>
											<input type="text" class="range-slider" value="" data-slider-min="3000" data-slider-max="60000" data-slider-step="500" data-slider-value="[12000,22000]">
										</div>
									</div>
									<br>
								</div>
								<div class="col-sm-12">
									<div class="input-item text-center">
										<button class="btn-main bg-brick wow bounceIn" data-wow-delay="0.5s">Next</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div><!-- END of .container -->
			</div><!-- END of .box-wr -->



		</div><!-- END of .content -->

<?php include 'includes/footer.php'; ?>
