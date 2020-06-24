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
						<h1 class="color-theme">Tell us more about what you want out of your next car (pick up to 3)</h1>
						<form action="step-7-v2.php" class="form-simple wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-sm-4">
									<div class="input-item text-center">
										<label class="checkbox-styled">
											<input type="checkbox" name="example-checkbox-1" value="ex-1-1">
											<span class="checkbox-label">Low Price</span>
										</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-item text-center">
										<label class="checkbox-styled">
											<input type="checkbox" name="example-checkbox-1" value="ex-1-2">
											<span class="checkbox-label">Commuter</span>
										</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-item text-center">
										<label class="checkbox-styled">
											<input type="checkbox" name="example-checkbox-1" value="ex-1-3">
											<span class="checkbox-label">Luxury</span>
										</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-item text-center">
										<label class="checkbox-styled">
											<input type="checkbox" name="example-checkbox-1" value="ex-1-4">
											<span class="checkbox-label">Outdoors</span>
										</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-item text-center">
										<label class="checkbox-styled">
											<input type="checkbox" name="example-checkbox-1" value="ex-1-5">
											<span class="checkbox-label">Tech-loaded</span>
										</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-item text-center">
										<label class="checkbox-styled">
											<input type="checkbox" name="example-checkbox-1" value="ex-1-6">
											<span class="checkbox-label">Family-friendly</span>
										</label>
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
