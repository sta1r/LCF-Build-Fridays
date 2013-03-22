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
				<div class="title expander"><a href="#"><span>Halls of Residence open days</span></a><br /><span class="bodycopy">Wednesday 27 March (12 - 6pm)</span></div>

				<div id="list8" class="sublist_content bodycopy">
						<p>Most of our halls of residence will be open from 12-6pm for visitors to come and explore before booking opens in May. Students and current residents will be on hand to show you around each building.</p>
						<p>No booking is required at any halls, however Coopers Court is not open as it will not be available next year and Glassyard Building will not be open to visitors until April.</p>
						<p>For addresses and transport details of all our halls, please visit their individual information pages at <a href='http://www.arts.ac.uk/housing/ '>www.arts.ac.uk/housing/</a></p>
						<p>We look forward to seeing you there.</p>

				</div>
			</li><!-- #list8 -->
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