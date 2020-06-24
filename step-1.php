<!DOCTYPE html>
<html lang="en" class="header-align-center">
	<head>
		<title>Carwalla</title>

		<?php include 'includes/header.php'; ?>

		<div class="content bg-gradient-blue" id="content">

			<div class="box-wr box-step text-center">
				<div class="container wow fadeIn" data-wow-delay="0.2s">
					<a href="javascript:history.go(-1)" class="btn-back color-theme">Back</a>
					<div class="step-item">
						<h1 class="color-theme">Enter the make of the vehicle you’re looking for to start receiving price drops</h1>
						<form action="step-2.php" class="validate-model-on-submit form-simple form-md wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-item text-center">
										<label class="">
										    <select class="select-styled" id="select-car-make"></select>
										</label>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-item text-center">
										<label class="">
										    <select class="select-styled" id="select-car-model" disabled="disabled"></select>
										</label>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="error-row">
										<h5 class="color-brick">You must enter make and model</h5>
									</div>
									<div class="input-item text-center">
										<input type="hidden" id="getTimeZone">
										<button class="btn-main bg-brick wow bounceIn" data-wow-delay="0.5s">Next</button>
									</div>
								</div>
							</div>
						</form>
						<div class="img-wr alignright box-shadow">
							<div class="display-inline-block">
								<img src="data/step-car-img-1.png" alt="">
							</div>
							<div class="display-inline-block">
								<div class="tooltip-item">
									<div class="tooltip-item-inner bg-white color-theme">-$532</div>
								</div>
								<img src="data/step-car-img-2.png" alt="">
							</div>
						</div>
					</div>
				</div><!-- END of .container -->
			</div><!-- END of .box-wr -->



		</div><!-- END of .content -->

<?php include 'includes/footer.php'; ?>
