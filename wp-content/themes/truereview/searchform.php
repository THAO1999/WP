<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="search" class="search-field field" placeholder="<?php echo esc_attr_x( 'Search here &hellip;', 'placeholder', 'truereview' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'truereview' ) ?>" />
		<button type="submit" class="submit-field"><i class="fa fa-search"></i></button>
	</div>
</form>
