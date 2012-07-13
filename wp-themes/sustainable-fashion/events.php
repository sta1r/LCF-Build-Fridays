<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>
	<div id="main" class="grid_22 prefix_2">
		<div id="content">
			<div class="visual">									
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo02.jpg" alt="EVENTS LIST"/>
				<h2><span class='pinkdash'><img src='/wp-content/themes/cfsflcof/images/bullet-pink.gif' /></span>EVENTS LIST</h2>
			</div>	  
			<?php ec3_get_events( '365 days',	/* Number of events to display */
				'%DATE% - %ENDDATE%: <a href="%LINK%">%TITLE%</a>',						/* Display template */
				'',						/* template day */
				'jS F Y',						/* Date format */
				'',						/* Template month */
				'%MONTH%'						/* Month format */
			
			); ?>
    		<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>
			
		</div>
		<div id="sidebar">
		<?php get_sidebar('events'); ?>
		</div>
	</div>

<?php get_footer(); ?>