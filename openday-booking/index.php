<?php 
$page = "index";
$title = "Select your open day";
include('header.php'); 
?>
           
	<div id="inner-left"></div>

		<div id="inner-right">

			<p>Please choose your area of interest from the list below and click 'Select' to book your place.</p>

		 <ul class="list-folding">
			<li>
				<div class="title expander"><a href="#"><span>Further Education</span></a><br /><span class="bodycopy">Wednesday 6 February and Wednesday 27 February 2013, 11am (Lime Grove)</span></div>

				<div id="list10" class="sublist_content bodycopy">
					<ul class="inner">
						<li>Access to HE (Diploma): Fashion Business (11am both dates)</li>
						<li>Becoming an LCF Student (12pm both dates)</li>
						<li>Access to HE (Diploma): Fashion Media and Communications (1pm both dates)</li>
						<li>Access to HE (Diploma): Fashion (2pm both dates)</li>
					</ul>

					<form action="booking.php" method="get">    
					<input type="hidden" value="fe" name="openday">	
					<p><input type="submit" value="Select" /></p>
					</form>
				</div>
			</li><!-- #list10 -->
			
			<li>
				<div class="title expander"><a href="#"><span>Part Time Degrees</span></a><br /><span class="bodycopy">Wednesday 27 February (6pm) and Saturday 11 May (10.30am) (John Prince’s Street)</span></div>

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