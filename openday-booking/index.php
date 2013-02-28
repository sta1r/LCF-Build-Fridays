<?php 
$page = "index";
$title = "Select your open day";
include('header.php'); 
?>
           
	<div id="inner-left"></div>

		<div id="inner-right">

			<p>Please choose your area of interest from the list below and click 'Select' to book your place.</p>

		 <ul class="list-folding">
<!--			<li>
				<div class="title expander"><a href="#"><span>Further Education</span></a><br /><span class="bodycopy">Wednesday 27 February 2013, 11am (Lime Grove)</span></div>

				<div id="list10" class="sublist_content bodycopy">
					<ul class="inner">
						<li>Access to HE (Diploma): Fashion Business (11am both dates)</li>
						<li>Becoming an LCF Student (12pm both dates)</li>
						<li>Access to HE (Diploma): Fashion Media and Communications (1pm both dates)</li>
						<li>Access to HE (Diploma): Fashion (2pm both dates)</li>
					</ul>
					<p>Please call <span style="color:#C51B8A;">+44 (0)207 514 7582</span> for further details</p>
					<form action="booking.php" method="get">    
					<input type="hidden" value="fe" name="openday">	
					<p><input type="submit" value="Select" /></p>
					</form> 
				</div>
			</li>--> <!-- #list10 -->
			
			<li>
				<div class="title expander"><a href="#"><span>Graduate School: Pattern Design and Garment Technology / Creative Pattern Cutting</span></a><br /><span class="bodycopy">Thursday 7th March 2013 (6pm) (Mare Street)</span></div>

				<div id="list13" class="sublist_content bodycopy">
					<ul class="inner">
						<li>PG Diploma Pattern Design and Garment Technology</li>
						<li>PG Certificate Fashion: Creative Pattern Cutting for the Fashion Industry</li>
					</ul>

					<form action="booking.php" method="get">    
					<input type="hidden" value="pdgt" name="openday">	
					<p><input type="submit" value="Select" /></p>
					</form>
				</div>
			</li><!-- #list13 -->
			
			<li>
				<div class="title expander"><a href="#"><span>Short Courses Open Afternoon</span></a><br /><span class="bodycopy">Saturday 9th March (12pm-4.30pm) (Lime Grove)</span></div>

				<div id="list15" class="sublist_content bodycopy">
					<p>Please see the following event page for more details and to RSVP:</p>
					<ul class="inner">
						<li><a href="http://www.fashion.arts.ac.uk/short-courses/usefulinformation/open-afternoon/">Short Courses Open Afternoon</a></li>
					</ul>

				</div>
			</li><!-- #list15 -->

		</ul><!-- .list-folding -->
		
		</div><!-- #inner-right -->
		
    <div class="image-container-float">
			<img src="img/trio.jpg">
		</div>
						
	<?php include('footer.php'); ?>