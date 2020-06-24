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
						<a href="step-3.php" class="bg-theme">2</a>
						<a href="step-4.php" class="bg-brick">3</a>
					</div>
					<div class="step-item">
						<h1 class="color-theme">Please verify your mobile number by entering the 6-digit pin we sent you</h1>
						<form action="step-5.php" class="form-simple form-small wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-item text-center">
										<input data-inputmask="'mask': '99 99 99'" type="text" required placeholder="Enter 6-digit pin">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-item text-left">
										<h6>Didn’t get it? <a href="javascript:void(0);" class="tdu">Resend.</a></h6>
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
