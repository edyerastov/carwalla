
			<div class="error-row">
				<h5 class="color-brick">You must enter make and model</h5>
			</div>

			<form action="step-2.php" class="validate-model-on-submit form-search form-search-simple wow fadeInUp" data-wow-delay="0.4s">
				<div class="form-row">
					<label class="">
					    <select class="select-styled" id="select-car-make"></select>
					</label>
				</div>
				<div class="form-row">
					<label class="">
					    <select class="select-styled" id="select-car-model" disabled="disabled"></select>
					</label>
				</div>
				<div class="">
					<input type="hidden" id="getTimeZone">
					<button class="btn-search bg-red">GET PRICE DROPS</button>
				</div>
			</form>