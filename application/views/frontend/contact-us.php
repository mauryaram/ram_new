<section class="contact-form-style-one">
	<div class="container">
		<div class="block-title text-center">
			<p>Contact with us now</p>
			<h2>Available 24 X 7</h2>
                        <?=notification(); errors();?>
		</div>
		<!-- /.block-title -->
                <form action="<?=FRONTURL.'Contact/sendinq'?>" class="contact-form-one row" id="contact-form" method="post">
			<div class="col-lg-6">
				<div class="input-holder">
                                    <input type="hidden" name="vehicleName" value="<?=!empty($fleet['vehicleName']) ? $fleet['vehicleName'] : "";?>">
                                    <input type="hidden" name="price" value="<?=!empty($fleet['price']) ? $fleet['price'] : "";?>">
                                    <input class="form-control lettersOnly" type="text" name="name" maxlength="100" placeholder="Your name">
				</div>
				<!-- /.input-holder -->
			</div>
			<!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="input-holder">
					<input class="form-control" type="email" name="emailId" placeholder="Email address">
				</div>
				<!-- /.input-holder -->
			</div>
			<!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="input-holder">
					<input class="form-control numbersOnly" maxlength="10" type="text" name="mobileNo" placeholder="Phone">
				</div>
				<!-- /.input-holder -->
			</div>
			<!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="input-holder">
					<input class="form-control" type="text" name="subject" placeholder="Subject">
				</div>
				<!-- /.input-holder -->
			</div>
			<!-- /.col-lg-6 -->
			<div class="col-lg-12">
				<div class="input-holder">
					<textarea class="form-control" name="message" placeholder="Write message"></textarea>
				</div>
				<!-- /.input-holder -->
			</div>
			<!-- /.col-lg-6 -->
			<div class="col-lg-12">
				<div class="input-holder text-center">
					<button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Send Message</span>
					</button>
				</div>
				<!-- /.input-holder -->
			</div>
			<!-- /.col-lg-6 -->
		</form>
		<!-- /.contact-form-one -->
	</div>
	<!-- /.container -->
</section>
<!-- /.contact-form-style-one -->