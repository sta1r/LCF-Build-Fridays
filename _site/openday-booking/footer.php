  </div>
	
<div id="side-bar">
            
		<div id="site-search">
		    <h4>Site Search</h4>
		    <!-- Google CSE Search Box Begins -->

		      <form id="cse-search-box" action="http://www.fashion.arts.ac.uk/site-search/" class="bodycopy">

					      <input type="hidden" name="cx" value="017699431643206132718:st9hhvy4ehc" />
					      <input type="hidden" name="cof" value="FORID:11" />
					      <input type="hidden" name="ie" value="UTF-8" />
					      <input name="q" type="text" />
					      <p><input type="image" class="rollbtn" src="http://www.arts.ac.uk/media/artsacukstyleassets/styleassets/images/btn-go.gif" alt="Go" name="submit-image" /></p>
					   </form>
					
		    <!-- Google CSE Search Box Ends -->
		</div>
		
		<?php if ($page == "index") { ?>
		<div id="related-links">
			<h4>Browse faster!</h4>
			<!--<p>Click each link to view further detail, or:</p>-->
			<ul class="side-panel bodycopy">
				<li><a href="#" id="all">Expand all</a></li>
			</ul>	
		</div>
		<?php } ?>
		
</div><!-- #side-bar -->

		    </div>

		    <!-- teasers -->

				<ul id="footer">
				   <li><a href="http://www.arts.ac.uk/accessibility/"><span>Accessibility</span></a></li>
				   <li><a href="http://www.fashion.arts.ac.uk/brochure/"><span>Prospectus?</span></a></li>
				   <li><a href="http://www.fashion.arts.ac.uk/about/locations/"><span>Find Us</span></a></li>
				   <li><a href="http://www.arts.ac.uk/e-bulletin/"><span>e-bulletin</span></a></li>

				</ul>
		    <div class="grid_16"><p class="copyright">&copy; <?php echo date('Y'); ?> University of the Arts London All Rights Reserved.</p></div>
		</div>
		
		
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<!-- wayfinder.js --><script src="http://www.fashion.arts.ac.uk/media/artsacukstyleassets/styleassets/js/wayfinder.js"></script>

		<script type="text/javascript" src="js/jquery.metadata.js"></script><!-- the metadata script is essential to make validation work with checkboxes -->
		<script type="text/javascript" src="js/clear-form-input.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

		<script type="text/javascript">

		// The Metadata plugin enables us to add special attributes to the first checkbox in any group, that add special conditions for validation
		$.metadata.setType("attr", "validate");

		$(document).ready(function(){

				$("#register").validate(/*{
					rules: {
								interest: {
									//required: "#newsletter:checked",
									minlength: 1
								},
								agree: "required"
							}
				}*/);

				$('.expander').click(function(e) {
					$(this).parent().find('.sublist_content').slideToggle();
					e.preventDefault();
				});

				$('#all').click(function(e) {
					if ($(this).hasClass('open')) {
						$('.sublist_content').hide(500);
						$(this).removeClass('open').html('Expand all');
					} else {				
						$('.sublist_content').show(500);
						$(this).addClass('open').html('Close all');
					}
					e.preventDefault();
				});

				$('.highlight').fadeTo("slow", 1);

	    });
		</script>
		
</body>
</html>