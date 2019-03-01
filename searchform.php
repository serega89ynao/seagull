
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ) ?>" >
	<label class="screen-reader-text" for="s"><?php esc_html__('Search:', 'seagull');?> </label>
	<input class="area-search" type="search" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="<?php echo esc_html__('Search...', 'seagull');?>" />
	<button class="search-btn" type="submit" id="searchsubmit"><i class="flaticon-musica-searcher"></i></button>
</form>