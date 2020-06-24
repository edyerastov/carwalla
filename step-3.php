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
						<h1 class="color-theme">Most cars sell within a day of a price drop. To get fast access to price drops, enter your mobile number</h1>
						<form action="step-4.php" class="form-simple form-md wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-item text-center">
										<input data-inputmask="'mask': '(999) 999-9999'" type="text" required placeholder="Enter your mobile number">
									</div>
									<br>
								</div>
								<div class="col-sm-12">
									<div class="input-item text-center">
										<button class="btn-main bg-brick wow bounceIn" data-wow-delay="0.5s">Next</button>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-item text-left">
										<div class="block-info">
											<div class="img-wr">
												<img src="data/icon-phoenix.png" alt="">
											</div>
											<div class="text-wr">
												<h5><strong>2,197 Phoenix-area residents are receiving price drops</strong></h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						<div class="img-wr alignright box-shadow">
							<img src="data/step-car-img-3.png" alt="">
						</div>
					</div>
				</div><!-- END of .container -->
			</div><!-- END of .box-wr -->



		</div><!-- END of .content -->

<?php include 'includes/footer.php'; ?>
