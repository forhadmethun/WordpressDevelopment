<?php 
/*
Template Name:Contact
*/
?>

<?php get_header();?>
<div id="main_content_area">
				<div id="main_content" class="inner_wrapper">

					<div>
						<h1>Contact Us</h1>
						<div class="horizontal_line"></div>
						<p>
							Reach us by completing the form below to send an email message or use any of this details.
						</p>
						<div id="contact_info">
							<div id="phone_fax" class="float_left">
								<h5 class="float_left">Phone:</h5><span class="float_right">+555 555 9555</span>
								<br />
								<div class="clear"></div>
								<h5 class="float_left">Fax:</h5><span class="float_right">+555 555 9555</span>
								<br />
							</div>
							<div id="social_site" class="float_left">
								<h5 class="float_left">Skype:</h5><span class="float_right right_margin">Lightbox</span>
								<br />
								<div class="clear"></div>
								<h5 class="float_left">Twitter:</h5><span class="float_right">@lightbox</span>
							</div>
						</div>
						<div class="clear"></div>
						<form>
							NAME
							<br />
							<input type="text" size="50"/><br />
							EMAIL
							<br />
							<input type="text" size="50" /><br />
							PHONE
							<br />
							<input type="text" size="50" /><br />
							MESSAGE
							<br />
							<textarea rows="4" cols="50">

                            </textarea><br />
                            <input type="submit" value="SUBMIT" class="float_right"/>
						</form>
					</div>

				</div>

			</div><!--end main_content_area-->


<?php get_footer();?>