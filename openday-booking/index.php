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
				<div class="title expander"><a href="#"><span>Further Education</span></a><br /><span class="bodycopy"><strike>Wednesday 6 February and Wednesday 27 February 2013, 11am</strike> *FULLY BOOKED* (Lime Grove)</span></div>

				<div id="list10" class="sublist_content bodycopy">
					<ul class="inner">
						<li>Access to HE (Diploma): Fashion Business (11am both dates)</li>
						<li>Becoming an LCF Student (12pm both dates)</li>
						<li>Access to HE (Diploma): Fashion Media and Communications (1pm both dates)</li>
						<li>Access to HE (Diploma): Fashion (2pm both dates)</li>
					</ul>

				<!--	<form action="booking.php" method="get">    
					<input type="hidden" value="fe" name="openday">	
					<p><input type="submit" value="Select" /></p>
					</form> -->
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
			
			<li>
				<div class="title expander"><a href="#"><span>Graduate School: Business and Management</span></a><br /><span class="bodycopy">Tuesday 5th February (6pm) (High Holborn)</span></div>

				<div id="list11" class="sublist_content bodycopy">
					<ul class="inner">
						<li>MA Strategic Fashion Marketing</li>
						<li>MA Design Management for the Fashion Industries</li>
						<li>MA Fashion Entrepreneurship</li>
						<li>MA Fashion Retail</li>
						<li>Postgraduate Certificate Fashion: Buying and Merchandising</li>
						<li>Graduate Diploma in Fashion Management</li>
					</ul>

					<form action="booking.php" method="get">    
					<input type="hidden" value="bm" name="openday">	
					<p><input type="submit" value="Select" /></p>
					</form>
				</div>
			</li><!-- #list11 -->
			
			<li>
				<div class="title expander"><a href="#"><span>Graduate School: Design and Technology / <br/>Media and Communications</span></a><br /><span class="bodycopy">Monday 18th February (10am) (Victoria House Basement - exhibition venue)</span></div>

				<div id="list12" class="sublist_content bodycopy">
					<h4>Design and Technology</h4>
					<ul class="inner">
						<li>MA Fashion Artefact</li>
						<li>MA Fashion Footwear</li>
						<li>MA Fashion Design Technology, Menswear</li>
						<li>MA Fashion Design Technology, Womenswear</li>
						<li>MA Fashion and the Environment</li>
						<li>MA Costume Design for Performance</li>
						<li>Graduate Diploma in Fashion Design Technology</li>
					</ul>
					
					<h4>Media and Communications</h4>
					<ul class="inner">
						<li>MA Fashion Media Production</li>
						<li>MA History and Culture of Fashion</li>
						<li>MA Fashion Curation</li>
						<li>MA Fashion and Film</li>
						<li>MA Fashion Photography</li>
						<li>MA Fashion Journalism</li>
						<li>Postgraduate Certificate Fashion: Fashion and Lifestyle Journalism</li>
						<li>Graduate Diploma in Fashion Media Styling</li>
						<li>MA Collaborative Performance</li>
					</ul>
					

					<form action="booking.php" method="get">    
					<input type="hidden" value="dtmc" name="openday">	
					<p><input type="submit" value="Select" /></p>
					</form>
				</div>
			</li><!-- #list12 -->
			
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
				<div class="title expander"><a href="#"><span>Research Degrees: Student Open Evening</span></a><br /><span class="bodycopy">Tuesday 12th February 2013 (4-6pm) (305, John Prince's Street)</span></div>

				<div id="list14" class="sublist_content bodycopy">
					<p>Please see the following event listing for more details and to RSVP:</p>
					<ul class="inner">
						<li><a href="http://newsevents.arts.ac.uk/event/lcf-research-degrees-student-open-evening/">LCF Research Degrees Student Open Evening</a></li>
					</ul>

				</div>
			</li><!-- #list14 -->
			
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