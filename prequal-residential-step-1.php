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
						<a href="prequal-personal-step-1.php" class="bg-theme">1</a>
						<a href="prequal-residential-step-1.php" class="bg-brick">2</a>
						<a href="prequal-employment-step-1.php" class="bg-theme">3</a>
						<a href="prequal-finance-step-1.php" class="bg-theme">4</a>
					</div>
					<div class="step-item">
						<h1 class="color-theme">What is your current address?</h1>
						<form action="prequal-residential-step-2.php" class="form-simple form-small wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-item text-center">
										<input id="location" type="text" required placeholder="Enter your Address">
									</div>
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
