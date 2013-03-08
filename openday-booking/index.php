<?php 
$page = "index";
$title = "Select your open day";
include('header.php'); 
?>
           
	<div id="inner-left"></div>

		<div id="inner-right">

			<p>Please choose your area of interest from the list below and click 'Select' to book your place.</p>
			<p>The undergraduate open days for all BA (Hons) subjects will take place in September and October 2013 – further information will be available in due course.</p>

		 <ul class="list-folding">
			
			<li>
				<div class="title expander"><a href="#"><span>Short Courses Open Afternoon</span></a><br /><span class="bodycopy"><strike>Saturday 9th March (12pm-4.30pm) (Lime Grove)</strike> *FULLY BOOKED*</span></div>

				<div id="list15" class="sublist_content bodycopy">
					<p>Please note that this open afternoon is now fully booked.</p>			
				</div> <!-- #list15-->
			</li>

			<li>
				<div class="title expander"><a href="#"><span>Part Time Degrees</span></a><br /><span class="bodycopy">Saturday 11 May (10.30am) (John Prince’s Street)</span></div>

				<div id="list9" class="sublist_content bodycopy">
						<ul class="inner">
							<li>BA (Hons) Fashion Media (Part Time)</li>
							<li>BA (Hons) Fashion Design and Realisation (Part Time)</li>
							<li>BA (Hons) Fashion Business (Part Time)</li>
							<li>FdA (Hons) Fashion Retail Branding and Visual Merchandising (Part Time)</li>
						</ul>

						<form action="booking.php" method="get">    
						<input type="hidden" value="pt" name="openday">	
						<p><input type="submit" value="Select" /></p>
						</form>
				</div>
			</li><!-- #list9 -->
			
			


		</ul><!-- .list-folding -->
		
		</div><!-- #inner-right -->
		
    <div class="image-container-float">
			<img src="img/trio.jpg">
		</div>
						
	<?php include('footer.php'); ?>