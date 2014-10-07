<form action="<?php echo home_url(); ?>" id="search-form" method="get">
	
	<input type="text" name="s" value="search" id="s" onblur="if(this.value=='')this.value='search'" onfocus="if(this.value=='search')this.value=''" placeholder="" />
	<input type="hidden" name="hidden" value="submit" />

</form>