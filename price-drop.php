<!DOCTYPE html>
<html lang="en" class="header-align-center">
	<head>
		<title>Carwalla</title>

		<?php include 'includes/header.php'; ?>

		<div class="content bg-gray" id="content">

			<div class="box-wr box-price-drop text-center">
				<div class="container wow fadeIn" data-wow-delay="0.2s">
					<div class="price-drop">

						<form method="GET" action="#pricedropshopping/pdash/All/All/All" id="form-price-drop" class="validate-model-on-submit form-simple form-md wow fadeInUp" data-wow-delay="0.4s">
							<div class="row">
								<div class="col-xs-6">
									<div class="input-item text-center">
										<label class="">
										    <select class="select-styled" id="select-car-make"></select>
										</label>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="input-item text-center">
										<label class="">
										    <select class="select-styled" id="select-car-model" disabled="disabled"></select>
										</label>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="error-row">
										<h5 class="color-brick">You must enter make and model</h5>
									</div>
								</div>
							</div>
						</form>

						<!-- <div class="block-info block-opened text-left">
							<a href="javascript:void(0);" class="btn-close-block">X</a>
							<h5>Below are the most recent price drops. Connect with one of...</h5>
						</div> -->

						<div class="sort-items-list" id="sort-items-list">

							<div class="text-center bg-white">
								<h4>Sort By</h4>
								<select id="sort" class="sorting-select">
									<!-- <option value="">Sort By</option> -->
									<option value="price-drop-value" sort="desc">Largest Price Drops</option>
									<option value="time-since-price-drop" sort="asc">Recent Price Drops</option>
									<option value="car-mileage" sort="asc">Mileage</option>
									<option value="car-price" sort="asc">Least Expensive</option>
									<option value="car-price" sort="desc">Most Expensive</option>
									<option value="car-year" sort="desc">Newest Model</option>
									<option value="car-year" sort="asc">Oldest Model</option>
								</select>
							</div>

                            <!-- Duplicated the list items for clarity, as well as added the class "lazyload" for images.-->

							<ul class="result-items-list text-left list infinite-scroll">
								<li class="result-item bg-white">
                                    <div class="img-wr">
                                        <a href="VDP.php"><img class="lazyload" data-src="data/car-thumb-1.jpg" alt=""></a>
                                    </div>
									<div class="alignleft">
										<span class="price-drop-value circle"><span>-$1234</span></span>
									</div>
									<div class="alignnone color-blue">
										<h5>
                                            <a href="VDP.php">
                                                <span class="car-year">2014</span>
                                                <span class="car-make">Honda</span>
                                                <span class="car-model">Civic</span>
                                            </a>
										</h5>
										<h4>
											<span class="car-price">Now $14,092</span>
										</h4>
										<h6>
											<span class="car-mileage">52k Miles</span>
											<br>
											<span class="car-location">Courtesy Volvo of Scottsdale</span>
										</h6>
										<a href="javascript:void(0);" class="btn-main bg-red wow bounceIn" data-wow-delay="0.5s">Call Me</a>
									</div>
									<div class="text-center">
										<p>Price Dropped <span class="time-passed-days"></span> days, <span class="time-passed-hours"></span> hours, <span class="time-passed-minutes"></span> minutes ago</p>
										<div class="progress">
											<div class="progress-bar">
												<span class="hidden">
													<span class="price-drop-start-date">05/29/2020 12:00</span>
													<span class="time-since-price-drop"><!-- this filled with js from previous line --></span>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li class="result-item bg-white">
                                    <div class="img-wr">
                                        <a href="VDP.php"><img class="lazyload" data-src="data/car-thumb-2.jpg" alt=""></a>
                                    </div>
                                    <div class="alignleft">
										<span class="price-drop-value circle"><span>-$2534</span></span>
									</div>
									<div class="alignnone color-blue">
										<h5>
                                            <a href="VDP.php">
                                                <span class="car-year">2019</span>
                                                <span class="car-make">Volvo</span>
                                                <span class="car-model">S90</span>
                                            </a>
										</h5>
										<h4>
											<span class="car-price">Now $22,096</span>
										</h4>
										<h6>
											<span class="car-mileage">42k Miles</span>
											<br>
											<span class="car-location">Courtesy Volvo of Scottsdale</span>
										</h6>
										<a href="javascript:void(0);" class="btn-main bg-red wow bounceIn" data-wow-delay="0.5s">Call Me</a>
									</div>
									<div class="text-center">
										<p>Price Dropped <span class="time-passed-days"></span> days, <span class="time-passed-hours"></span> hours, <span class="time-passed-minutes"></span> minutes ago</p>
										<div class="progress">
											<div class="progress-bar">
												<span class="hidden">
													<span class="price-drop-start-date">05/26/2020 12:00</span>
													<span class="time-since-price-drop"><!-- this filled with js from previous line --></span>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li class="result-item bg-white">
                                    <div class="img-wr">
                                        <a href="VDP.php"><img class="lazyload" data-src="data/car-thumb-1.jpg" alt=""></a>
                                    </div>
									<div class="alignleft">
										<span class="price-drop-value circle"><span>-$599</span></span>
									</div>
									<div class="alignnone color-blue">
										<h5>
                                            <a href="VDP.php">
                                                <span class="car-year">2016</span>
                                                <span class="car-make">VW</span>
                                                <span class="car-model">Passat</span>
                                            </a>
										</h5>
										<h4>
											<span class="car-price">Now $10,401</span>
										</h4>
										<h6>
											<span class="car-mileage">17k Miles</span>
											<br>
											<span class="car-location">Courtesy Volvo of Scottsdale</span>
										</h6>
										<a href="javascript:void(0);" class="btn-main bg-red wow bounceIn" data-wow-delay="0.5s">Call Me</a>
									</div>
									<div class="text-center">
										<p>Price Dropped <span class="time-passed-days"></span> days, <span class="time-passed-hours"></span> hours, <span class="time-passed-minutes"></span> minutes ago</p>
										<div class="progress">
											<div class="progress-bar">
												<span class="hidden">
													<span class="price-drop-start-date">05/22/2020 12:00</span>
													<span class="time-since-price-drop"><!-- this filled with js from previous line --></span>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li class="result-item bg-white">
                                    <div class="img-wr">
                                        <a href="VDP.php"><img class="lazyload" data-src="data/car-thumb-2.jpg" alt=""></a>
                                    </div>
									<div class="alignleft">
										<span class="price-drop-value circle"><span>-$450</span></span>
									</div>
									<div class="alignnone color-blue">
										<h5>
                                            <a href="VDP.php">
                                                <span class="car-year">2012</span>
                                                <span class="car-make">Hyundai</span>
                                                <span class="car-model">Santa Fe</span>
                                            </a>
										</h5>
										<h4>
											<span class="car-price">Now $20,401</span>
										</h4>
										<h6>
											<span class="car-mileage">27k Miles</span>
											<br>
											<span class="car-location">Courtesy Volvo of Scottsdale</span>
										</h6>
										<a href="javascript:void(0);" class="btn-main bg-red wow bounceIn" data-wow-delay="0.5s">Call Me</a>
									</div>
									<div class="text-center">
										<p>Price Dropped <span class="time-passed-days"></span> days, <span class="time-passed-hours"></span> hours, <span class="time-passed-minutes"></span> minutes ago</p>
										<div class="progress">
											<div class="progress-bar">
												<span class="hidden">
													<span class="price-drop-start-date">05/28/2020 09:00</span>
													<span class="time-since-price-drop"><!-- this filled with js from previous line --></span>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li class="result-item bg-white">
                                    <div class="img-wr">
                                        <a href="VDP.php"><img class="lazyload" data-src="data/car-thumb-1.jpg" alt=""></a>
                                    </div>
									<div class="alignleft">
										<span class="price-drop-value circle"><span>No Drop</span></span>
									</div>
									<div class="alignnone color-blue">
										<h5>
                                            <a href="VDP.php">
                                                <span class="car-year">2014</span>
                                                <span class="car-make">Honda</span>
                                                <span class="car-model">Civic</span>
                                            </a>
										</h5>
										<h4>
											<span class="car-price">Now $14,092</span>
										</h4>
										<h6>
											<span class="car-mileage">52k Miles</span>
											<br>
											<span class="car-location">Courtesy Volvo of Scottsdale</span>
										</h6>
										<a href="javascript:void(0);" class="btn-main bg-red wow bounceIn" data-wow-delay="0.5s">Call Me</a>
									</div>
									<div class="text-center">
										<p>Price Dropped <span class="time-passed-days"></span> days, <span class="time-passed-hours"></span> hours, <span class="time-passed-minutes"></span> minutes ago</p>
										<div class="progress">
											<div class="progress-bar">
												<span class="hidden">
													<span class="price-drop-start-date"><!-- 05/29/2020 12:00 --></span>
													<span class="time-since-price-drop"><!-- this filled with js from previous line --></span>
												</span>
											</div>
										</div>
									</div>
								</li>
							</ul>

						</div>
					</div>
				</div><!-- END of .container -->
			</div><!-- END of .box-wr -->



		</div><!-- END of .content -->

<?php include 'includes/footer.php'; ?>
