<?php 
$page = "index";
$title = "Open Days";
include('header.php'); 
?>
           
             <div id="inner-left">
<ul id="nav-inpage">

</ul>   
            </div>

            
			<div id="inner-right">
				
				<h3>Open Days still available</h3>
				<ul id="list-folding">
		      
				<div class="title">
				<li><a href="#"><span>Part Time Degrees</span></a><br /><span class="bodycopy">10.30am, 7 May 2011 (High Holborn)</span>
				</li>
				</div>

				<div id="list12" class="sublist_content">
					<p>Please note the times indicated above.</p>
					<ul class="inner">
					<li><strong>BA Fashion Design and Realisation</strong></li>
					<li><strong>BA Fashion Media</strong></li>
					<li><strong>BA Fashion Business</strong></li>
					<li><strong>Foundation Degree Fashion Retail Branding and Visual Merchandising</strong></li>
					</ul>
					<form action="booking.php" method="get">    
					<input type="hidden" value="parttime" name="openday">	
					<p><input type="submit" value="Select" /></p>
					</form>
				</div><!-- #list12 -->
				
				</ul>
				
				<h3>New Open Days - Summer 2011</h3>
				
				<p>Open days for our full time courses have now finished for this academic year. We will be running a series of general information sessions aimed at students wishing to study at further education or undergraduate level towards the beginning of July to coincide with our graduate exhibition. Our course specific open days will start again in September.</p>

				<p>If you would like us to let you know when the information sessions and open days are available for booking please fill in the form below:</p>
				<!--<p>If you aren't able to make one of these dates, there's <a href="http://www.fashion.arts.ac.uk/58192.htm">lots you can find out</a> by browsing this site.</p>-->

				<form action="response_b.php" id="register" method="post">
					<fieldset>
						<legend>Your details</legend>

						<label for="first_name"><span class="compulsory"></span>First Name *</label>
						<input type="text" id="first_name" name="first_name" class="required" /><br />          

						<label for="last_name"><span class="compulsory"></span>Last Name * </label>
						<input type="text" id="last_name" name="last_name" class="required" /><br />

						<label for="email"><span class="compulsory"></span>Email address * </label>
						<input type="text" id="email" name="email" class="required email" /><br />
					</fieldset>
					
					<fieldset>
						<legend>About you</legend>

						<label for="gender"><span class="compulsory"></span>Gender *</label>
						<input class="radio" type="radio" value="male" name="gender[]" class="required" />Male<br /> 
						<input class="radio" type="radio" value="female" name="gender[]" class="required" />Female<br /><br/> 
						         
						<label for="age"><span class="compulsory"></span>What age are you * </label>
						<input class="radio" type="radio" value="under17" name="age[]" class="required" />Under 17<br /> 
						<input class="radio" type="radio" value="17-19" name="age[]" class="required" />17 - 19<br />
						<input class="radio" type="radio" value="20-24" name="age[]" class="required" />20 - 24<br />
						<input class="radio" type="radio" value="over25" name="age[]" class="required" />25 and over<br /><br/>

						<label for="region"><span class="compulsory"></span>Your city or region * </label>
						<input type="text" id="region" name="region" class="required" /><br /><br/>
						
						<label for="doing"><span class="compulsory"></span>What are you doing at the moment? * </label>
						<select name="doing[]" class="required">
							<option class="select" value="">Please Select...</option>
							<option value="GCSEs">GCSEs</option>
							<option value="A-Levels">A Levels</option>
							<option value="BTEC">BTEC</option>
							<option value="NVQ">NVQ</option>
							<option value="FoundationDip">Foundation Diploma in Art and Design</option>
							<option value="Access">Access course</option>
							<option value="Gap">Gap year</option>
							<option value="Working">Working</option>
							<option value="Other">Other</option>
						</select><br/><br/>
						
						<label for="first-uni">Are you the first person in your family to attend University?</label>
						<input class="radio" type="radio" value="first-uni-no" name="first-uni[]" />No<br /> 
						<input class="radio" type="radio" value="first-uni-yes" name="first-uni[]" />Yes<br />
					</fieldset>
					
					<fieldset>
						<legend>Course Level</legend>
						<p class="bodycopy">Please indicate the level(s) of course you are interested in studying at LCF.</p>
						
						<p><label><input type=checkbox name="course_level[]" value="Further Education" class="checkbox" validate="required:true, minlength:1">Further Education</label></p>
						<p><label><input type=checkbox name="course_level[]" value="Undergraduate" class="checkbox">Undergraduate (Foundation Degrees and Bachelor Degrees)</label></p>
						<p><label><input type=checkbox name="course_level[]" value="Postgraduate" class="checkbox">Postgraduate</label></p>
					</fieldset>
					
					<fieldset>
						<legend>Mode of Study</legend>
						<p class="bodycopy">Please indicate the mode(s) of study you are interested in.</p>
						
						<p><label><input type=checkbox name="study_mode[]" value="Full time" class="checkbox" validate="required:true, minlength:1">Full time</label></p>
						<p><label><input type=checkbox name="study_mode[]" value="Part Time" class="checkbox">Part Time</label></p>
						<p><label><input type=checkbox name="study_mode[]" value="Distance Learning" class="checkbox">Distance Learning</label></p>
					</fieldset>
					
					<fieldset>
						<legend>Course Areas</legend>
						<p class="bodycopy">Please tick the subject areas you are interested in. You can tick as many boxes as you like.</p>
						<p class="bodycopy"><strong>Media and Communication</strong></p>
						<p><label><input type=checkbox name="interest[]" value="Curation and Criticism" class="checkbox" validate="required:true, minlength:1">Curation and Criticism</label></p>
						<p><label><input type=checkbox name="interest[]" value="Illustration" class="checkbox">Illustration</label></p>
						<p><label><input type=checkbox name="interest[]" value="Journalism and Public Relations" class="checkbox">Journalism and Public Relations</label></p>
						<p><label><input type=checkbox name="interest[]" value="Make Up and Styling" class="checkbox">Make Up and Styling</label></p>
						<p><label><input type=checkbox name="interest[]" value="Photography" class="checkbox">Photography</label></p>
						
						<p class="bodycopy"><strong>Management and Science</strong></p>
						<p><label><input type=checkbox name="interest[]" value="Beauty and Spa Management" class="checkbox">Beauty and Spa Management</label></p>
						<p><label><input type=checkbox name="interest[]" value="Cosmetic Science" class="checkbox">Cosmetic Science</label></p>
						<p><label><input type=checkbox name="interest[]" value="Buying and Merchandising" class="checkbox">Buying and Merchandising</label></p>
						<p><label><input type=checkbox name="interest[]" value="Management" class="checkbox">Management</label></p>
						<p><label><input type=checkbox name="interest[]" value="Marketing" class="checkbox">Marketing</label></p>
						<p><label><input type=checkbox name="interest[]" value="Retail Branding and Visual Merchandising" class="checkbox">Retail Branding and Visual Merchandising</label></p>
						
						<p class="bodycopy"><strong>Design</strong></p>
						<p><label><input type=checkbox name="interest[]" value="Costume" class="checkbox">Costume</label></p>
						<p><label><input type=checkbox name="interest[]" value="Design Development" class="checkbox">Design Development</label></p>
						<p><label><input type=checkbox name="interest[]" value="Digital Fashion" class="checkbox">Digital Fashion</label></p>
						<p><label><input type=checkbox name="interest[]" value="Footwear and Accessories" class="checkbox">Footwear and Accessories</label></p>
						<p><label><input type=checkbox name="interest[]" value="Fashion Jewellery" class="checkbox">Fashion Jewellery</label></p>
						<p><label><input type=checkbox name="interest[]" value="Menswear" class="checkbox">Menswear</label></p>
						<p><label><input type=checkbox name="interest[]" value="Pattern Cutting" class="checkbox">Pattern Cutting</label></p>
						<p><label><input type=checkbox name="interest[]" value="Sportswear" class="checkbox">Sportswear</label></p>
						<p><label><input type=checkbox name="interest[]" value="Surface Textiles" class="checkbox">Surface Textiles</label></p>
						<p><label><input type=checkbox name="interest[]" value="Tailoring" class="checkbox">Tailoring</label></p>
						<p><label><input type=checkbox name="interest[]" value="Theatre Design and Performing Arts" class="checkbox">Theatre Design and Performing Arts</label></p>
						<p><label><input type=checkbox name="interest[]" value="Womenswear" class="checkbox">Womenswear</label></p>
					</fieldset>
					
					<!-- FORM SUBMISSION -->
					<div class="button-container">
						<input type="hidden" name="event" value="off-season" />
						<input type="button" value=" Clear Form " onclick="clearForm('register');"/>
						<input type="submit" name="submit" value=" Submit " class="submit" />
					</div>	

				</form>		

          </div><!-- #inner-right -->
            
        </div>
	
	<div id="side-bar">

		            
		<div id="site-search">
		    <h4>Site Search</h4>
		    <!-- Google CSE Search Box Begins -->

		      <form id="searchbox_002212721428847306985:qpytkc5lchu" action="http://www.fashion.arts.ac.uk/site-search-results.htm" class="bodycopy">
		      <input type="hidden" name="cx" value="002212721428847306985:qpytkc5lchu" />

		    <input type="hidden" name="cof" value="FORID:11" />
		    <input name="q" type="text" /> 
		    <p><input type="image" class="rollbtn" src="http://www.fashion.arts.ac.uk/css/btn-go.gif" alt="Go" name="submit-image" /></p>

		    <!-- http://www.fashion.arts.ac.uk/css/btn-go-over.gif -->
		   </form>
		    <!-- Google CSE Search Box Ends -->
		</div>
		<!-- purple -->

		            <div id="related-links">
		                <h4>Related Links</h4>
		                <ul class="side-panel bodycopy section-purple">

		                    <li class="section-purple"><a href="http://www.fashion.arts.ac.uk/courses/how-to-apply.htm">How to Apply</a></li>



		                    <li class="section-purple"><a href="http://www.fashion.arts.ac.uk/visiting.htm">Drop in sessions</a></li>


		                    <li class="section-purple"><a href="http://www.fashion.arts.ac.uk/45887.htm">LCF On Tour</a></li>


		                </ul>
		            </div>

		        </div>
		    </div>

		    <!-- teasers -->

		    <ul id="footer">
		    <li><a href="http://www.arts.ac.uk/unisitemap.htm"><span>University Site Map</span></a></li><li><a href="http://www.arts.ac.uk/contact-us.htm"><span>Contact Us</span></a></li><li><a href="http://www.arts.ac.uk/accessibility.htm"><span>Accessibility</span></a></li><li><a href="http://www.arts.ac.uk/university-disclaimer.htm"><span>Disclaimer</span></a></li><li><a href="http://www.arts.ac.uk/e-bulletin.php"><span>e-bulletin</span></a></li>
		    </ul>
		    <p class="copyright">&copy; 2011 University of the Arts London All Rights Reserved.</p>
		</div>
</body>
</html>
