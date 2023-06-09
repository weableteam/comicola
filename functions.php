<?php

/**
 * Include Theme Customizer
 *
 * @since v1.0
 */
$theme_customizer = get_template_directory() . '/inc/customizer.php';
if ( is_readable( $theme_customizer ) ) {
	require_once $theme_customizer;
}


/**
 * Include Support for wordpress.com-specific functions.
 * 
 * @since v1.0
 */
$theme_wordpresscom = get_template_directory() . '/inc/wordpresscom.php';
if ( is_readable( $theme_wordpresscom ) ) {
	require_once $theme_wordpresscom;
}

/**
 * W-functions
 * 
 * @since v1.0
 */
$w_functions = get_template_directory() . '/inc/w-functions.php';
if ( is_readable( $w_functions ) ) {
	require_once $w_functions;
}

/**
 * W-acf
 * 
 * @since v1.0
 */
$w_acf = get_template_directory() . '/inc/w-acf.php';
if ( is_readable( $w_acf ) ) {
	require_once $w_acf;
}

/**
 * W-options
 * 
 * @since v1.0
 */
$w_options = get_template_directory() . '/inc/w-options.php';
if ( is_readable( $w_options ) ) {
	require_once $w_options;
}




/**
 * Set the content width based on the theme's design and stylesheet
 *
 * @since v1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


/**
 * General Theme Settings
 *
 * @since v1.0
 */
if ( ! function_exists( 'weable_setup_theme' ) ) :
	function weable_setup_theme() {
		// Make theme available for translation: Translations can be filed in the /languages/ directory.
		load_theme_textdomain( 'weable', get_template_directory() . '/languages' );

		// Theme Support.
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for full and wide alignment.
		add_theme_support( 'align-wide' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Default Attachment Display Settings.
		update_option( 'image_default_align', 'none' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );

		// Custom CSS-Styles of Wordpress Gallery.
		add_filter( 'use_default_gallery_style', '__return_false' );

	}
	add_action( 'after_setup_theme', 'weable_setup_theme' );

	// Disable Block Directory: https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/filters/editor-filters.md#block-directory
	remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
	remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );
endif;


/**
 * Fire the wp_body_open action.
 *
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 *
 * @since v2.2
 */
if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since v2.2
		 */
		do_action( 'wp_body_open' );
	}
endif;


/**
 * Add new User fields to Userprofile
 *
 * @since v1.0
 */
if ( ! function_exists( 'weable_add_user_fields' ) ) :
	function weable_add_user_fields( $fields ) {
		// Add new fields.
		$fields['facebook_profile'] = 'Facebook URL';
		$fields['twitter_profile']  = 'Twitter URL';
		$fields['linkedin_profile'] = 'LinkedIn URL';
		$fields['xing_profile']     = 'Xing URL';
		$fields['github_profile']   = 'GitHub URL';

		return $fields;
	}
	add_filter( 'user_contactmethods', 'weable_add_user_fields' ); // get_user_meta( $user->ID, 'facebook_profile', true );
endif;


/**
 * Test if a page is a blog page
 * if ( is_blog() ) { ... }
 *
 * @since v1.0
 */
function is_blog() {
	global $post;
	$posttype = get_post_type( $post );

	return ( ( is_archive() || is_author() || is_category() || is_home() || is_single() || ( is_tag() && ( 'post' === $posttype ) ) ) ? true : false );
}


/**
 * Disable comments for Media (Image-Post, Jetpack-Carousel, etc.)
 *
 * @since v1.0
 */
function weable_filter_media_comment_status( $open, $post_id = null ) {
	$media_post = get_post( $post_id );
	if ( 'attachment' === $media_post->post_type ) {
		return false;
	}
	return $open;
}
add_filter( 'comments_open', 'weable_filter_media_comment_status', 10, 2 );


/**
 * Style Edit buttons as badges: http://getbootstrap.com/components/#badges
 *
 * @since v1.0
 */
function weable_custom_edit_post_link( $output ) {
	return str_replace( 'class="post-edit-link"', 'class="post-edit-link badge badge-secondary"', $output );
}
add_filter( 'edit_post_link', 'weable_custom_edit_post_link' );

function weable_custom_edit_comment_link( $output ) {
	return str_replace( 'class="comment-edit-link"', 'class="comment-edit-link badge badge-secondary"', $output );
}
add_filter( 'edit_comment_link', 'weable_custom_edit_comment_link' );


/**
 * Responsive oEmbed filter: http://getbootstrap.com/components/#responsive-embed
 *
 * @since v1.0
 */
function weable_oembed_filter( $html ) {
	return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'weable_oembed_filter', 10, 4 );


if ( ! function_exists( 'weable_content_nav' ) ) :
	/**
	 * Display a navigation to next/previous pages when applicable
	 *
	 * @since v1.0
	 */
	function weable_content_nav( $nav_id ) {
		global $wp_query;

		if ( $wp_query->max_num_pages > 1 ) :
	?>
			<div id="<?php echo esc_attr( $nav_id ); ?>" class="d-flex mb-4 justify-content-between">
				<div><?php next_posts_link( '<span aria-hidden="true">&larr;</span> ' . esc_html__( 'Older posts', 'weable' ) ); ?></div>
				<div><?php previous_posts_link( esc_html__( 'Newer posts', 'weable' ) . ' <span aria-hidden="true">&rarr;</span>' ); ?></div>
			</div><!-- /.d-flex -->
	<?php
		else :
			echo '<div class="clearfix"></div>';
		endif;
	}

	// Add Class.
	function posts_link_attributes() {
		return 'class="btn btn-secondary btn-lg"';
	}
	add_filter( 'next_posts_link_attributes', 'posts_link_attributes' );
	add_filter( 'previous_posts_link_attributes', 'posts_link_attributes' );
endif;


/**
 * Init Widget areas in Sidebar
 *
 * @since v1.0
 */
function weable_widgets_init() {
	// Area 1.
	register_sidebar(
		array(
			'name'          => 'Primary Widget Area (Sidebar)',
			'id'            => 'primary_widget_area',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	// Area 2.
	register_sidebar(
		array(
			'name'          => 'Secondary Widget Area (Header Navigation)',
			'id'            => 'secondary_widget_area',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Third Widget Area (Footer)',
			'id'            => 'third_widget_area',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'weable_widgets_init' );


if ( ! function_exists( 'weable_article_posted_on' ) ) :
	/**
	 * "Theme posted on" pattern
	 *
	 * @since v1.0
	 */
	function weable_article_posted_on() {
		printf(
			__( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author-meta vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'weable' ),
			esc_url( get_the_permalink() ),
			esc_attr( get_the_date() . ' - ' . get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() . ' - ' . get_the_time() ),
			esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'weable' ), get_the_author() ),
			get_the_author()
		);
	}
endif;


/**
 * Template for Password protected post form
 *
 * @since v1.0
 */
function weable_password_form() {
	global $post;
	$label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );

	$output = '<div class="row">';
		$output .= '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">';
		$output .= '<h4 class="col-md-12 alert alert-warning">' . esc_html__( 'This content is password protected. To view it please enter your password below.', 'weable' ) . '</h4>';
			$output .= '<div class="col-md-6">';
				$output .= '<div class="input-group">';
					$output .= '<input type="password" name="post_password" id="' . esc_attr( $label ) . '" placeholder="' . esc_attr__( 'Password', 'weable' ) . '" class="form-control" />';
					$output .= '<div class="input-group-append"><input type="submit" name="submit" class="btn btn-primary" value="' . esc_attr__( 'Submit', 'weable' ) . '" /></div>';
				$output .= '</div><!-- /.input-group -->';
			$output .= '</div><!-- /.col -->';
		$output .= '</form>';
	$output .= '</div><!-- /.row -->';
	return $output;
}
add_filter( 'the_password_form', 'weable_password_form' );


if ( ! function_exists( 'weable_comment' ) ) :
	/**
	 * Style Reply link
	 *
	 * @since v1.0
	 */
	function weable_replace_reply_link_class( $class ) {
		return str_replace( "class='comment-reply-link", "class='comment-reply-link btn btn-outline-secondary", $class );
	}
	add_filter( 'comment_reply_link', 'weable_replace_reply_link_class' );

	/**
	 * Template for comments and pingbacks:
	 * add function to comments.php ... wp_list_comments( array( 'callback' => 'weable_comment' ) );
	 *
	 * @since v1.0
	 */
	function weable_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback':
			case 'trackback':
	?>
		<li class="post pingback">
			<p><?php esc_html_e( 'Pingback:', 'weable' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'weable' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
				break;
			default:
	?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<?php
							$avatar_size = ( '0' !== $comment->comment_parent ? 68 : 136 );
							echo get_avatar( $comment, $avatar_size );

							/* translators: 1: comment author, 2: date and time */
							printf(
								__( '%1$s, %2$s', 'weable' ),
								sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
								sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
									esc_url( get_comment_link( $comment->comment_ID ) ),
									get_comment_time( 'c' ),
									/* translators: 1: date, 2: time */
									sprintf( esc_html__( '%1$s ago', 'weable' ), human_time_diff( (int) get_comment_time( 'U' ), current_time( 'timestamp' ) ) )
								)
							);

							edit_comment_link( __( 'Edit', 'weable' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .comment-author .vcard -->

					<?php if ( '0' === $comment->comment_approved ) : ?>
						<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'weable' ); ?></em>
						<br />
					<?php endif; ?>
				</footer>

				<div class="comment-content"><?php comment_text(); ?></div>

				<div class="reply">
					<?php
						comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'weable' ) . ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
					?>
				</div><!-- /.reply -->
			</article><!-- /#comment-## -->
		<?php
				break;
		endswitch;
	}

	/**
	 * Custom Comment form
	 *
	 * @since v1.0
	 * @since v1.1: Added 'submit_button' and 'submit_field'
	 * @since v2.0.2: Added '$consent' and 'cookies'
	 */
	function weable_custom_commentform( $args = array(), $post_id = null ) {
		if ( null === $post_id ) {
			$post_id = get_the_ID();
		}

		$commenter     = wp_get_current_commenter();
		$user          = wp_get_current_user();
		$user_identity = $user->exists() ? $user->display_name : '';

		$args = wp_parse_args( $args );

		$req      = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true' required" : '' );
		$consent  = ( empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"' );
		$fields   = array(
			'author'  => '<div class="form-group"><label for="author">' . esc_html__( 'Name', 'weable' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' . 
						'<input type="text" id="author" name="author" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
			'email'   => '<div class="form-group"><label for="email">' . esc_html__( 'Email', 'weable' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' . 
						'<input type="email" id="email" name="email" class="form-control" value="' . esc_attr( $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
			'url'     => '',
			'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' /> ' .
							'<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'weable' ) . '</label></p>',
		);

		$defaults = array(
			'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field'        => '<div class="form-group"><textarea id="comment" name="comment" class="form-control" aria-required="true" required placeholder="' . esc_attr__( 'Comment', 'weable' ) . ( $req ? '*' : '' ) . '"></textarea></div>',
			/** This filter is documented in wp-includes/link-template.php */
			'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'weable' ), wp_login_url( apply_filters( 'the_permalink', get_the_permalink( get_the_ID() ) ) ) ) . '</p>',
			/** This filter is documented in wp-includes/link-template.php */
			'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'weable' ), get_edit_user_link(), $user->display_name, wp_logout_url( apply_filters( 'the_permalink', get_the_permalink( get_the_ID() ) ) ) ) . '</p>',
			'comment_notes_before' => '',
			'comment_notes_after'  => '<p class="small comment-notes">' . esc_html__( 'Your Email address will not be published.', 'weable' ) . '</p>',
			'id_form'              => 'commentform',
			'id_submit'            => 'submit',
			'class_submit'         => 'btn btn-primary',
			'name_submit'          => 'submit',
			'title_reply'          => '',
			'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'weable' ),
			'cancel_reply_link'    => esc_html__( 'Cancel reply', 'weable' ),
			'label_submit'         => esc_html__( 'Post Comment', 'weable' ),
			'submit_button'        => '<input type="submit" id="%2$s" name="%1$s" class="%3$s" value="%4$s" />',
			'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
			'format'               => 'html5',
		);

		return $defaults;
	}
	add_filter( 'comment_form_defaults', 'weable_custom_commentform' );

endif;


/**
 * Nav menus
 *
 * @since v1.0
 */
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main-menu'   => 'Main Navigation Menu',
			'footer-menu' => 'Footer Menu',
			'mobile-menu' => 'Mobile Menu',
		)
	);
}

// Custom Nav Walker: wp_bootstrap4_navwalker().
$custom_walker = get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
if ( is_readable( $custom_walker ) ) {
	require_once $custom_walker;
}

$custom_walker_footer = get_template_directory() . '/inc/wp_bootstrap_navwalker_footer.php';
if ( is_readable( $custom_walker_footer ) ) {
	require_once $custom_walker_footer;
}


/**
 * Loading All CSS Stylesheets and Javascript Files
 *
 * @since v1.0
 */
function weable_scripts_loader() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// 1. Styles.
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/libs/slick/slick.css', array(), '', 'all' );
	wp_enqueue_style( 'sal', get_template_directory_uri() . '/assets/libs/sal/sal.css', array(), '', 'all' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/libs/slick/slick-theme.css', array(), '', 'all' );
	wp_enqueue_style( 'fancyApp', get_template_directory_uri() . '/assets/libs/fancyApp/fancybox.css', array(), '', 'all' );
	wp_enqueue_style( 'lightgallery', get_template_directory_uri() . '/assets/libs/lightGallery/css/lightgallery-bundle.css', array(), '', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), $theme_version, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version, 'all' );


	if ( is_rtl() ) {
		wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), $theme_version, 'all' );
	}

	// 2. Scripts.
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.bundle.js', array( 'jquery' ), $theme_version, true );

	wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'fancyAppScripts', get_template_directory_uri() . '/assets/libs/fancyApp/fancybox.umd.js', array(), '', true );

	wp_enqueue_script( 'saljs', get_template_directory_uri() . '/assets/libs/sal/sal.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'lightgalleryjs', get_template_directory_uri() . '/assets/libs/lightGallery/lightgallery.min.js', array(), '', true );

	wp_enqueue_script( 'lg-thumbnail', get_template_directory_uri() . '/assets/libs/lightGallery/plugins/thumbnail/lg-thumbnail.umd.js', array(), '', true );

	wp_enqueue_script( 'lg-zoom', get_template_directory_uri() . '/assets/libs/lightGallery/plugins/zoom/lg-zoom.umd.js', array(), '', true );

	wp_enqueue_script( 'wscripts', get_template_directory_uri() . '/assets/js/w-scripts.js', array( 'jquery' ), $theme_version, true );

	wp_enqueue_script( 'timer', get_template_directory_uri() . '/assets/jquery.simple.timer.js', array( 'jquery' ), $theme_version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'weable_scripts_loader' );


add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
    
    // loop
    foreach( $items as &$item ) {
        
        // vars
        $icon = get_field('icon', $item);
        $ishot = get_field('is_hot', $item);
        // append icon
        if( $icon ) {
            
            $item->title .= ' <div class="icon" style="background: url('.$icon['url'].')"></div>';
            
        }
		if( $ishot ) {
            
            $item->title .= '<img class="hot" src="https://xs123.webmau.net/wp-content/uploads/2023/02/download-15.webp" alt="">' ;
            
        }
        
    }
    
    
    // return
    return $items;
    
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Menu con',
        'menu_title'    => 'Menu con',
        'menu_slug'     => 'sub-menu',
        'capability'    => 'edit_posts',
        'redirect'      => false,
		'icon_url'		=> 'dashicons-menu-alt3'
    ));
    
}