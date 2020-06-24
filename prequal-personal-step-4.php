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
						<a href="prequal-personal-step-1.php" class="bg-brick">1</a>
						<a href="prequal-residential-step-1.php" class="bg-theme">2</a>
						<a href="prequal-employment-step-1.php" class="bg-theme">3</a>
						<a href="prequal-finance-step-1.php" class="bg-theme">4</a>
					</div>
					<div class="step-item">
						<h1 class="color-theme">To complete the personal info section, enter your DOB</h1>
						<form action="prequal-residential-step-1.php" class="form-simple form-QQ wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-sm-4">
									<div class="input-item text-center">
										<select>
											<option>Month</option>
											<option>January</option>
											<option>February</option>
											<option>...</option>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-item text-center">
										<select>
											<option>Day</option>
											<option>01</option>
											<option>02</option>
											<option>...</option>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-item text-center">
										<select>
											<option>Year</option>
											<option>2020</option>
											<option>2019</option>
											<option>...</option>
										</select>
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
