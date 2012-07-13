<?php
/*
Template Name: NEWSLETTER
*/
?>
<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<div class="visual">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php         
					$Homepage = get_post_meta($post->ID, 'Homepage', true);
					if (!empty($Homepage))echo str_replace('src="wp','src="'.get_bloginfo('url').'/wp',$Homepage);
				?>
			</div>
			<div class="article">
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>	
            
            <script type="text/javascript">
				function canSubmit()
				{
					if (document.getElementById('read-conditions').checked != true)
					{
						alert('Please accept the terms and conditions before submitting the form.');
						return false;
					}
					else
					{
						return true;
					}
				}
			</script>
			
			<div class="form-subscribe">
				<div class="newsletterContainer" id="ajaxNewsletter">
				
				<?php // old action was: http://newsletters.brushfiredesign.net/t/r/s/tiijii/ ?>
                    <form action="http://centreforsustainablefashion.createsend.com/t/r/s/ikzji/" onsubmit="return canSubmit();" name="newsletterForm" id="newsletterForm" method="post">
        
                <fieldset>
                    <div class="row">
                        <div class="col">
                            <label>Name</label>
                            <div>
                                <input
                                class="newsletterTextInput"
                                onblur="if(this.value==''){this.value='Enter your name'}"
                                onfocus="if(this.value=='Enter your name'){this.value=''}"
                                type="text" name="cm-name"
                                id="name"
                                value="Enter your name" />
                            </div>
                        </div>
        
                    
                        <div class="col">
                            <label>Email</label>
                            <div><input
                                class="newsletterTextInput"
                                onblur="if(this.value==''){this.value='Enter your email'}"
                                onfocus="if(this.value=='Enter your email'){this.value=''}"
                                type="text" 
                                name="cm-ikzji-ikzji" id="ikzji-ikzji"
                               <?php // old name="cm-tiijii-tiijii" ?>
                                value="Enter your email" /></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="checks">
                            <div>
        
                                <input type="checkbox" id="mailing-list" value="1" name="cm-f-vkrdh" />
                                <span><label for="mailing-list">Please add me to your mailing list</label></span>
                            </div>
                            <div>
                                <input type="checkbox" id="read-conditions" />
                                <span><label for="read-conditions">I have read</label> <a href="http://www.sustainable-fashion.com/wp-content/uploads/2010/01/TermsAndConditions.pdf" target="_blank">the terms and conditions</a></span>
                            </div>
        
                        </div>
            
                    </div>
                    <div class="btns">
                        <input type="image" class="submit" name="newsletterSub" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/cfsflcof/images/btn-submit.gif" alt="Submit" />
                        <input type="image"  src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/cfsflcof/images/btn-cancel.gif" alt="Cancel" value="reset" />
                    </div>
                </fieldset>


            </form>
                </div>

			</div>

		</div>
		<div id="sidebar">
			<?php get_sidebar('bulletin'); ?>
		</div>
	</div>
<?php get_footer(); ?>
