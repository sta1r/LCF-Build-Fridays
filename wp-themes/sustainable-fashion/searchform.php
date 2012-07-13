<form method="get" id="searchform" action="<?php echo home_url(); ?>">
	<fieldset>
		<div><input type="text" value="Search" name="s" id="s" title="Search" onfocus="if (this.value=='Search') this.value = ''"></div>
		<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/btn-search.gif" onclick="document.getElementById('searchform').submit();" />							
	</fieldset>
</form>