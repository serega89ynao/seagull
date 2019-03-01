<?php
function seagull_breadcrumb(){
	
	global $post;
	if(!is_home()){ 
		echo '<a href="'. esc_url( home_url() ) .'">' . esc_html__( 'Home', 'seagull' ) . '</a> <span> > </span> ';
	if(is_single()){ // post
		the_category('<span>, </span>');
		echo " <span> > </span> "; ?>
		<span><?php the_title_attribute(); ?></span>
	<?php } elseif (is_page()) { // pages
		if ($post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . esc_url( get_permalink($page->ID) ) . '">' . get_the_title($page->ID) . '</a>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' <span> > </span> ';
		} ?>
		<span><?php the_title_attribute(); ?></span>
	<?php } elseif (is_category()) { // category
		global $wp_query;
		$obj_cat = $wp_query->get_queried_object();
		$current_cat = $obj_cat->term_id;
		$current_cat = get_category($current_cat);
		$parent_cat = get_category($current_cat->parent);
		if ($current_cat->parent != 0) 
			echo esc_html((get_category_parents($parent_cat, TRUE, ' <span> > </span> ')));
		 single_cat_title( '<span>', '</span>' ); 
	}
	elseif (is_search()) { // search pages
		echo '<span>' . esc_html__( 'Search Results for: ', 'seagull' ), get_search_query() . '</span>';
	}
	elseif (is_tag()) { // tags (tags)
		echo esc_html(single_tag_title('', false));
	}
	elseif (is_day()) { // archives (by day)
		echo esc_html('<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> <span> > </span> ');
		echo esc_html('<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> <span> > </span> ');
		echo esc_html(get_the_time('d'));
	}
	elseif (is_month()) { // archives (by month)
		echo esc_html('<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> <span> > </span> ');
		echo esc_html(get_the_time('F'));
	}
	elseif (is_year()) { // archives (by year)
		echo esc_html(get_the_time('Y'));
	}
	elseif (is_author()) { // the authors
		global $author;
		$userdata = get_userdata($author);
		echo esc_html__('Posted by', 'seagull' ) . $userdata->display_name;
	} elseif (is_404()) { //if the page does not exist
		echo esc_html__('Error 404', 'seagull');
	}

	if (get_query_var('paged')) // current page number
	echo ' (' . get_query_var('paged') . esc_html__( '-I am a page)', 'seagull' );

} else { // home
	$pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
	if($pageNum>1)
		echo '<a href="' . esc_url( home_url() ) . '">' . esc_html__('Home', 'seagull') . '</a> > ' . $pageNum . esc_html__('-I am a page', 'seagull');
	else
		echo esc_html__('You are on the main page', 'seagull');;
}
} 