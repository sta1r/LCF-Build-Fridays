<?php
// register globals 
$area=$_GET['openday']; 
$page="booking";
$title = "Booking Form";

// detect special courses
$specialCourses = 'foo';
if ($area == 'bm' || $area == 'dtmc' || $area == 'pg-fdt' || $area == 'pt') { $specialCourses = 1; }

include('header.php');
?>


	<div id="inner-left">	
		<p>Required fields are marked with an asterisk *</p>
		</div>
	

	<div id="inner-right">
		
		<?php if (empty($area)) { ?>
			
			<span class="error"><p>Sorry - you have either not selected a valid subject area, OR dates for your selected open day area are no longer available. Please <a href="index.php">go back</a> and try again.</p></span>
						
		<?php } else { ?>		
		
	<form action="response.php" id="register" class="register" method="post">

		<fieldset id="opendays">
			<legend>Available dates</legend>
			<label for="dates">Dates *</label>
			<select name="opendaydate[]" id="dates" class="required">
			<option class="select" value="">Please Select...</option>
			<?php
			$bSubmit=true;
			switch ($area) {

		    case "pt": ?>
		  <option value="pt-13feb">Wednesday 27 February</option>
		  <option value="pt-11may">Saturday 11 May</option>
		<?php 	break;
		    case "fe": ?>
		  <!-- <option value="fe-6feb">Wednesday 6 February</option>
		  <option value="fe-27feb">Wednesday 27 February</option> -->
		<?php 	break;
			case "bm": ?>
		  <option value="bm-5feb">Tuesday 5th February</option>
		<?php 	break;
			case "dtmc": ?>
		  <option value="dtmc-18feb">Monday 18th February</option>
		<?php 	break;	
		}
			?>
			</select>
		</fieldset><!-- #opendays -->	
		

		<fieldset id="usermeta">
			<legend>Your details</legend>
			<label for="first_name">First Name *</label>
			<input type="text" id="first_name" name="first_name" class="textfield required" /><br />          

			<label for="last_name">Last Name * </label>
			<input type="text" id="last_name" name="last_name" class="textfield required" /><br />			
			
			<label for="email">Email address * </label>
			<input type="text" id="email" name="email" class="textfield required email" /><br />
		
			<label for="telephone">Telephone * </label>
			<input type="text" id="telephone" name="telephone" class="textfield required" /><br />
		</fieldset><!-- Usermeta -->
			
		<fieldset class="guest">
			<legend>Guests</legend>
			<label for="guest">Will you be bringing a guest? (maximum of 1)</label>
			<select name="guest[]" id="guest" class="guest">

			   <option value="0">No guests</option>
				<option value="1">1 guest</option>					
			</select>			
		</fieldset>
						
			<?php if ($specialCourses == 1) { ?>
			<fieldset>
				<legend>More about you</legend>
				<label for="interest">Please state which course(s) you are interested in:</label>
				
				<?php 
				switch ($area)
				{
						case "bm": ?>
				<input type=checkbox name="interest[]" value="MA Strategic Fashion Marketing" class="checkbox" validate="required:true, minlength:1">MA Strategic Fashion Marketing<br/>	
				<input type=checkbox name="interest[]" value="MA Design Management for the Fashion Industries" class="checkbox" validate="required:true, minlength:1">MA Design Management for the Fashion Industries<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Entrepreneurship" class="checkbox" validate="required:true, minlength:1">MA Fashion Entrepreneurship<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Retail" class="checkbox" validate="required:true, minlength:1">MA Fashion Retail<br/>	
				<input type=checkbox name="interest[]" value="Postgraduate Certificate Fashion: Buying and Merchandising" class="checkbox" validate="required:true, minlength:1">Postgraduate Certificate Fashion: Buying and Merchandising<br/>	
				<input type=checkbox name="interest[]" value="Graduate Diploma in Fashion Management" class="checkbox" validate="required:true, minlength:1">Graduate Diploma in Fashion Management<br/>
				<?php break;
					case "dtmc": ?>
				<input type=checkbox name="interest[]" value="MA Fashion Artefact" class="checkbox" validate="required:true, minlength:1">MA Fashion Artefact<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Footwear" class="checkbox" validate="required:true, minlength:1">MA Fashion Footwear<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Design Technology, Menswear" class="checkbox" validate="required:true, minlength:1">MA Fashion Design Technology, Menswear<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Design Technology, Womenswear" class="checkbox" validate="required:true, minlength:1">MA Fashion Design Technology, Womenswear<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion and the Environment" class="checkbox" validate="required:true, minlength:1">MA Fashion and the Environment<br/>	
				<input type=checkbox name="interest[]" value="MA Costume Design for Performance" class="checkbox" validate="required:true, minlength:1">MA Costume Design for Performance<br/>	
				<input type=checkbox name="interest[]" value="Graduate Diploma in Fashion Design Technology" class="checkbox" validate="required:true, minlength:1">Graduate Diploma in Fashion Design Technology<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Media Production" class="checkbox" validate="required:true, minlength:1">MA Fashion Media Production<br/>	
				<input type=checkbox name="interest[]" value="MA History and Culture of Fashion" class="checkbox" validate="required:true, minlength:1">MA History and Culture of Fashion<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Curation" class="checkbox" validate="required:true, minlength:1">MA Fashion Curation<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion and Film" class="checkbox" validate="required:true, minlength:1">MA Fashion and Film<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Photography" class="checkbox" validate="required:true, minlength:1">MA Fashion Photography<br/>	
				<input type=checkbox name="interest[]" value="MA Fashion Journalism" class="checkbox" validate="required:true, minlength:1">MA Fashion Journalism<br/>	
				<input type=checkbox name="interest[]" value="Postgraduate Certificate Fashion: Fashion and Lifestyle Journalism" class="checkbox" validate="required:true, minlength:1">Postgraduate Certificate Fashion: Fashion and Lifestyle Journalism<br/>	
				<input type=checkbox name="interest[]" value="Graduate Diploma in Fashion Media Styling" class="checkbox" validate="required:true, minlength:1">Graduate Diploma in Fashion Media Styling<br/>	
				<input type=checkbox name="interest[]" value="MA Collaborative Performance" class="checkbox" validate="required:true, minlength:1">MA Collaborative Performance<br/>
				<?php break;				
						 case "communications": ?>
				<input type=checkbox name="interest[]" value="BA (Hons) Fashion Journalism" class="checkbox" validate="required:true, minlength:1">BA (Hons) Fashion Journalism<br/>
				<input type=checkbox name="interest[]" value="BA (Hons) Fashion Public Relations" class="checkbox">BA (Hons) Fashion Public Relations<br/>
				<input type=checkbox name="interest[]" value="BA (Hons) Fashion Photography" class="checkbox">BA (Hons) Fashion Photography<br/>
				<input type=checkbox name="interest[]" value="BA (Hons) Make Up and Prosthetics for Performance" class="checkbox">BA (Hons) Make Up and Prosthetics for Performance<br/>
				<input type=checkbox name="interest[]" value="BA (Hons) Costume for Performance" class="checkbox">BA (Hons) Costume for Performance<br/>				
				<input type=checkbox name="interest[]" value="BA (Hons) Technical Effects for Performance" class="checkbox">BA (Hons) Technical Effects for Performance<br/>				
				<input type=checkbox name="interest[]" value="BA (Hons) Fashion Illustration" class="checkbox">BA (Hons) Fashion Illustration<br/>				
				<input type=checkbox name="interest[]" value="FdA Fashion Styling and Photography" class="checkbox">FdA Fashion Styling and Photography<br/>				
				<input type=checkbox name="interest[]" value="FdA Hair and Make Up for Fashion" class="checkbox">FdA Hair and Make Up for Fashion<br/>				
				<input type=checkbox name="interest[]" value="FdA Hair and Make Up for Film and TV" class="checkbox">FdA Hair and Make Up for Film and TV<br/>
				<?php 	break;
					 case "pt": ?>
				<p><label><input type=checkbox name="interest[]" value="BA (Hons) Fashion Media" class="checkbox" validate="required:true, minlength:1">BA (Hons) Fashion Media (Part time)</label></p>
				<p><label><input type=checkbox name="interest[]" value="BA (Hons) Fashion Design Realisation" class="checkbox">BA (Hons) Fashion Design Realisation (Part time)</label></p>
				<p><label><input type=checkbox name="interest[]" value="BA (Hons) Fashion Business" class="checkbox">BA (Hons) Fashion Business (Part time)</label></p>
				<p><label><input type=checkbox name="interest[]" value="FdA Fashion Retail Branding and Visual Merchandising" class="checkbox">Foundation Degree Fashion Retail Branding and Visual Merchandising (Part time)</label></p>
				<?php 	break;					
				    case "pg-fb": ?> 
				<input type=checkbox name="interest[]" value="PG Cert Fashion Buying and Merchandising" class="checkbox" validate="required:true, minlength:1">PG Cert Fashion Buying and Merchandising<br/>				
				<input type=checkbox name="interest[]" value="MA Design Management for the Fashion Industries" class="checkbox">MA Design Management for the Fashion Industries<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Entrepreneurship" class="checkbox">MA Fashion Entrepreneurship<br/>
				<input type=checkbox name="interest[]" value="MA Fashion and the Environment" class="checkbox">MA Fashion and the Environment<br/>
				<input type=checkbox name="interest[]" value="MA Strategic Fashion Marketing" class="checkbox">MA Strategic Fashion Marketing<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Retail" class="checkbox">MA Fashion Retail<br/>
				<?php break; 
						case "pg-fdt": ?>				
				<input type=checkbox name="interest[]" value="PG Cert Creative Pattern Cutting for the Industry" class="checkbox">PG Cert Creative Pattern Cutting for the Industry<br/>
				<input type=checkbox name="interest[]" value="PG Dip Pattern Design and Garment Construction" class="checkbox">PG Dip Pattern Design and Garment Construction<br/>
				<input type=checkbox name="interest[]" value="MA Costume Design for Performance" class="checkbox">MA Costume Design for Performance<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Design Technology" class="checkbox">MA Fashion Design Technology<br/>
				<input type=checkbox name="interest[]" value="MA Digital Fashion" class="checkbox">MA Digital Fashion<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Artefact" class="checkbox">MA Fashion Artefact<br/>
				<input type=checkbox name="interest[]" value="MA Fashion and the Environment" class="checkbox">MA Fashion and the Environment<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Footwear" class="checkbox">MA Fashion Footwear<br/>
				<?php break; 
						case "pg-fmc": ?>
				<input type=checkbox name="interest[]" value="PG Cert Fashion and Lifestyle Journalism" class="checkbox">PG Cert Fashion and Lifestyle Journalism<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Photography" class="checkbox">MA Fashion Photography<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Curation" class="checkbox">MA Fashion Curation<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Journalism" class="checkbox">MA Fashion Journalism<br/>				      
				<input type=checkbox name="interest[]" value="MA History &amp; Culture of Fashion" class="checkbox">MA History &amp; Culture of Fashion<br/>
				<input type=checkbox name="interest[]" value="MA Fashion &amp; Film" class="checkbox">MA Fashion &amp; Film<br/>
				<input type=checkbox name="interest[]" value="MA Fashion Media Production" class="checkbox">MA Fashion Media Production<br/>
				<?php 	break;	}     ?>	
				<label class="error" for="interest[]">Please select at one course you are interested in.</label>			
			</fieldset>
			<?php } ?>
					
			<fieldset>
						<p>We may contact you by email about future LCF events and exhibitions. Please check this box if you do not wish to receive this information:</p>
			
			<input type=checkbox name="optout" value="optout" class="checkbox">I would prefer to opt out<br/>
			</fieldset>
				
			<?php
			if ($bSubmit) {
			?>
			<!-- FORM SUBMISSION -->	
			<div class="submission">
			<input type="button" value=" Clear Form " class="clear" onclick="clearForm('register');"/>
			<input type="submit" name="submit" value=" Submit " class="submit" />		
			</div>
			<?php } ?>
	 </form>
	
	<?php } // end of if isset $area conditional ?>

	</div>
	


	
	<div class="clear"></div>


	
<?php include('footer.php'); ?>