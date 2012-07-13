<?php
/*
Template Name: Students
*/
?>
<?php get_header(); ?>
	<div id="main">
		<div id="content">		
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php         
						$Homepage = get_post_meta($post->ID, 'Homepage', true);
						$HomepageText = get_post_meta($post->ID, 'HomepageText', true);
						if (!empty($Homepage)) 
						?>
						<div class="visual">
                        	<?php
								if ($Homepage == "")
								{
									if ($post->post_parent == 7) // WHAT WE DO SECTION
									{
										$Homepage = get_post_meta(7, 'Homepage', true);
									}
									
									if ($post->post_parent == 9) // WHAT WE LEARN SECTION
									{
										$Homepage = get_post_meta(9, 'Homepage', true);
									}
									
									if ($post->post_parent == 11) // WHAT WE KNOW SECTION
									{
										$Homepage = get_post_meta(11, 'Homepage', true);
									}
									
									if ($post->post_parent == 15) // ABOUT SECTION
									{
										$Homepage = get_post_meta(15, 'Homepage', true);
									}
									else
									{
										$Homepage = "<img src=\"/wp-content/themes/cfsflcof/images/photo02.jpg\" alt=\"CSF\" />";
									}
								}
								
								if ($HomepageText == "")
								{
									$HomepageText = $post->post_title;
								}
								echo $Homepage;
								echo "<h2>" . $HomepageText . "</h2>";
							?>
                        </div>						
						<div class="article">
							<?php the_content(); ?>
                            
                            <?php
							
							$mode = "none";
							
							if (count($_POST) > 0) { $mode = "block"; }
							?>
                            
                            <h3>Please choose from the list below</h3>
                            
                            <div class="student_uploads">
                            	<h3><a href="javascript:toggleDisplay('thriving');">Design for a Thriving Fashion Industry</a></h3>
                                <div class="form" id="thriving" style="display:<?php echo $mode; ?>">
                                	<p>Each entrant must submit a written and visual concept behind the vision of how you would truly desire the world to be: maximum 250 words and 8 sheets of visuals.</p>
                                     
                                     <p>Required elements:</p>
                                   
                                       <li>- Written concept (pdf or Word; maximum 250 words)</li>
                                       <li>- Visual concept (pdf; maximum 8 pages)</li>
                                     
									
                            		<?php insert_cform('Design for a Thriving Fashion Industry'); ?>
                                </div>
                                
                                
                                
                                
                                <h3><a href="javascript:toggleDisplay('systems');">Systems for a Sustainable Fashion Industry</a></h3>
                                <div class="form" id="systems" style="display:<?php echo $mode; ?>">
                                	<p>Each entrant must submit a written and, if applicable, visual concept behind your idea: maximum 250 words and 8 sheets of visuals.
                                    
								     <br />Each entrant must submit a 'New Ways of Doing Things' written or technical submission relating to the fashion industry with visual or technical explanations as appropriate: maximum 2500 words.</p>
                                     
                                     <p>Required elements:</p>
                                 
                                       <li>- Written concept (pdf or Word; maximum 250 words)</li>
                                       <li>- Visual concept (pdf; maximum 8 pages)</li>
                                       <li>- 'New Ways of Doing Things' (pdf or Word; maximum 2500 words)</li>
                                    

                            		<?php insert_cform('Systems for a Sustainable Fashion Industry'); ?>
                                </div>
                                
                                
                                
                                
                                
                                <h3><a href="javascript:toggleDisplay('materials');">The Role of Materials in a Sustainable Fashion Industry</a></h3>
                                <div class="form" id="materials" style="display:<?php echo $mode; ?>">
                                	<p>Each entrant must submit a written and/or visual context behind your choice of India or China as the starting point for your submission: maximum 250 words and/or 8 sheets of visuals.<br />
Each entrant must submit a practical, written or technical submission relating to the role of materials in a sustainable fashion industry: maximum 2500 words OR digital display of 1 piece of practical work (sample swatches or a finished collection of maximum 6 outfits, shoes or accessories).<br />If you would like to submit an audio visual file please upload to YouTube and supply your link below.</p>
                                     
                                     <p>Required elements:</p>
                                 
                                       <li>- Written concept (pdf or Word; maximum 250 words)</li>
                                       <li>- Visual concept (pdf; maximum 8 pages)</li>
                                    
									<?php insert_cform('The Role of Materials in a Sustainable Fashion Industry'); ?>
                                </div>
                                
                                
                                
                                
                                
                                <h3><a href="javascript:toggleDisplay('Communication');">The Role of Communication in a Sustainable Fashion Culture (Theoretical)</a></h3>
                                <div class="form" id="Communication" style="display:<?php echo $mode; ?>">
                                	<p>Each entrant must submit a written press release relating to your work: maximum 250 words, with visuals as applicable.<br />
Each entrant must submit a 'New Definition of Fashion' written submission relating to the role of communication in a sustainable fashion culture. This may be either a theoretical analysis or the description of a new product or service relating to a new identity for fashion: maximum 2500 words with visual or technical explanations as appropriate.</p>
                                     
                                     <p>Required elements:</p>
                                 
                                       <li>- Press release (pdf or Word; maximum 250 words)</li>
                                       <li>- New Definition of Fashion (pdf or Word; maximum 2500 words)</li>
                                    

									<?php insert_cform('The Role of Communication in a Sustainable Fashion Culture (Theoretical)'); ?>
                                </div>
                                
                                
                                
                                
                                <h3><a href="javascript:toggleDisplay('Identity');">The Identity of Sustainable Fashion (Visual)</a></h3>
                                <div class="form" id="Identity" style="display:<?php echo $mode; ?>">
                                	<p>Each entrant must submit a written press release relating to your work: maximum 250 words, with visuals as applicable.<br />
Each entrant must submit a visual 'New Identity of Fashion' submission relating to the identity of sustainable fashion in a modern cultural context. This may be either photographic, illustrative, film or animation: maximum 8 visuals or 30 minutes.<br />If you would like to submit a film or animation please upload to YouTube and supply your link below.
</p>
                                     
                                     <p>Required elements:</p>
                                 
                                       <li>- Press release (pdf or Word; maximum 250 words)</li>
                                       <li>- New Identity of Fashion (pdf format; maximum 8 pages)</li>
                                    
									<?php insert_cform('The Identity of Sustainable Fashion (Visual)'); ?>
                                </div>
                                
                                
                                
                                <h3><a href="javascript:toggleDisplay('Enterprise');">Enterprise Initiative for the Future Fashion Industry</a></h3>
                                <div class="form" id="Enterprise" style="display:<?php echo $mode; ?>">
                                	<p>Each entrant must submit a written context behind the idea: maximum 250 words with up to 8 sheets of visuals, as applicable.<br />
Each entrant must submit a written, visual, audio visual or technical submission relating to your enterprise initiative for the future fashion industry: maximum 2500 words OR digital display of 1 piece of practical work (sample swatches or a finished collection of maximum 6 outfits, shoes or accessories) OR 30 minutes audio visual.<br />If you would like to submit an audio visual file please upload to YouTube and supply your link below.
</p>
                                     
                                     <p>Required elements:</p>
                                 
                                       <li>- Written context (pdf or Word; maximum 250 words with up to 8 sheets of visuals, as applicable)</li>
                                       <li>- Visual, audio visual or technical submission (pdf format; maximum 2500 words OR   
   digital display of 1 piece of practical work)</li>
                                    
									<?php insert_cform('Enterprise Initiative for the Future Fashion Industry'); ?>

                                </div>
                                
                                
                                
                                
                                <h3><a href="javascript:toggleDisplay('Water');">Water - the right for all citizens of this planet </a></h3>
                                <div class="form" id="Water" style="display:<?php echo $mode; ?>">
                                	<p>Each entrant must submit a written and/or visual context behind your idea: maximum 250 words and/or 8 sheets of visuals. <br />
Each entrant must submit a practical, written, visual, or technical submission relating to the role of water in a sustainable fashion industry: maximum 2500 words OR digital display of 1 piece of practical work (sample swatches or a finished collection of maximum 6 outfits, shoes or accessories) OR 30 minutes audio visual.<br />If you would like to submit an audio visual file please upload to YouTube and supply your link below.
</p>
                                     
                                     <p>Required elements:</p>
                                 
                                       <li>- Upload written or visual context (pdf or Word; maximum 250 words with up to 8 sheets of visuals, as applicable)</li>
                                       <li>- Upload practical, written, visual or technical submission (pdf or Word format; maximum 2500 words OR digital display of 1 piece of practical work)</li>
                                       <li>- If you would like to submit an audio visual file please upload to YouTube and supply your link below.</li>
                                    
									<?php insert_cform('Water'); ?>

                                </div>
                                
                            </div>
						</div>
				<?php endwhile; ?>				
				<?php endif; ?>
			<div class="boxes">
				<ul>
					<?php show_subpages_from_parent($post->ID); ?>
					
				</ul>				
			</div>
		</div>
		<div id="sidebar">
		<?php
          $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
          if ($children == "")
		  {
		  	
			if ($post->post_parent == 7) // WHAT WE DO SECTION
			{
				$children = wp_list_pages('title_li=&child_of=7&echo=0');
			}
			
			if ($post->post_parent == 9) // WHAT WE LEARN SECTION
			{
				$children = wp_list_pages('title_li=&child_of=9&echo=0');
			}
			
			if ($post->post_parent == 11) // WHAT WE KNOW SECTION
			{
				$children = wp_list_pages('title_li=&child_of=11&echo=0');
			}
			
			if ($post->post_parent == 15) // ABOUT SECTION
			{
				$children = wp_list_pages('title_li=&child_of=15&echo=0');
			}
		  } 
		  
		  ?>
            <ul class="subnav">
          <?php echo $children; ?>
          </ul>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>

<?php

for ($i = 2009; $i > 1900; $i--)
{
	//printf("\"%s\" ", $i);
};

?>