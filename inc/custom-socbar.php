<?php
/**
 * 
 * Links with social networking icons that will be displayed at the bottom of your site.
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seagull
 */
function seagull_soc_link() {
	echo get_theme_mod( 'social_footer_1' );
	echo get_theme_mod( 'social_footer_2' );
	echo get_theme_mod( 'social_footer_3' );
	echo get_theme_mod( 'social_footer_4' );
	echo get_theme_mod( 'social_footer_5' );
};

function seagull_customize_register_soc_bar( $wp_customize ) {

	$list_soc_network = (array(
		' ' => '-------------',
		'<a href="https://www.instagram.com" target="_blank"><i class="flaticon-instagram-social-outlined-logo"></i></a>' => 'Instagram',
		'<a href="https://twitter.com" target="_blank"><i class="flaticon-twitter-social-outlined-logo"></i></a>' => 'Twitter',
		'<a href="https://www.facebook.com" target="_blank"><i class="flaticon-facebook-logo-outline"></i></a>' => 'Facebook',
		'<a href="https://www.youtube.com" target="_blank"><i class="flaticon-youtube-play-button-outlined-social-symbol"></i></a>' => 'YouTube',
		'<a href="https://vimeo.com" target="_blank"><i class="flaticon-vimeo-letter-logo-outline"></i></a>' => 'Vimeo',
		'<a href="https://www.linkedin.com" target="_blank"><i class="flaticon-linkedin-social-outline-logotype"></i></a>' => 'Linkedin',
		'<a href="https://plus.google.com" target="_blank"><i class="flaticon-google-plus-outlined-logo-social-symbol"></i></a>' => 'Google Plus',
		'<a href="https://www.pinterest.ru" target="_blank"><i class="flaticon-pinterest-outlined-logo"></i></a>' => 'Pinterest',
		'<a href="https://www.behance.net" target="_blank"><i class="flaticon-behance-social-outlined-logo"></i></a>' => 'Behance',
	));
	

	$wp_customize->add_section('social_section', array(
		'title'      => esc_html__( 'Social setting', 'seagull' ),
		'description' => esc_html__('Links with social networking icons that will be displayed at the bottom of your site.', 'seagull'),
		'priority'   => 30,
	) 
);
	
	// select-1
	$wp_customize->add_setting('social_footer_1', array(
		'transport' => 'refresh',
		'sanitize_callback' => false,
	) 
);
	$wp_customize->add_control('select_1', array(
		'label'    => esc_html__( 'First icon', 'seagull' ),
		'section'  => 'social_section',
		'settings' => 'social_footer_1',
		'type'     => 'select',
		'choices'  => $list_soc_network,
	)
);

	// select-2
	$wp_customize->add_setting('social_footer_2', array(
		'transport' => 'refresh',
		'sanitize_callback' => false,
	) 
);
	$wp_customize->add_control('select_2', array(
		'label'    => esc_html__( 'Second icon', 'seagull' ),
		'section'  => 'social_section',
		'settings' => 'social_footer_2',
		'type'     => 'select',
		'choices'  => $list_soc_network,
	)
);

// select-3
	$wp_customize->add_setting('social_footer_3', array(
		'transport' => 'refresh',
		'sanitize_callback' => false,
	) 
);
	$wp_customize->add_control('select_3', array(
		'label'    => esc_html__( 'Third icon', 'seagull' ),
		'section'  => 'social_section',
		'settings' => 'social_footer_3',
		'type'     => 'select',
		'choices'  => $list_soc_network,
	)
);

	// select-4
	$wp_customize->add_setting('social_footer_4', array(
		'transport' => 'refresh',
		'sanitize_callback' => false,
	) 
);
	$wp_customize->add_control( 'select_4', array(
		'label'    => esc_html__( 'Fourth icon', 'seagull' ),
		'section'  => 'social_section',
		'settings' => 'social_footer_4',
		'type'     => 'select',
		'choices'  => $list_soc_network,
	)
);

	// select-5
	$wp_customize->add_setting('social_footer_5', array(
		'transport' => 'refresh',
		'sanitize_callback' => false,
	) 
);
	$wp_customize->add_control('select_5', array(
		'label'    => esc_html__( 'Fifth icon', 'seagull' ),
		'section'  => 'social_section',
		'settings' => 'social_footer_5',
		'type'     => 'select',
		'choices'  => $list_soc_network,
	)
);


}
add_action( 'customize_register', 'seagull_customize_register_soc_bar' );