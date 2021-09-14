<?php
/**
 * Sahti Functions
 *
 * @package storefront-sahti-child
 */

/**
 * Set the theme version number as a global variable
*/

$theme				= wp_get_theme( 'storefront-sahti-child' );
$sahti_version		= $theme['Version'];

$theme				= wp_get_theme( 'storefront' );
$storefront_version	= $theme['Version'];

/**
 * Enqueue scripts, styles, and fonts.
 */
 
function sahti_scripts() {
    
    // unregister jquery loaded by WP - replace with 3.0 so caurousel will work - use jquery migrate to fix breaks from jquery 3.0
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.0.0.min.js', array(), '3.0.0' );
    wp_enqueue_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.0.min.js', array(), '3.0.0' );
    
    // register bootstrap
    wp_register_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
    wp_register_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array( 'jquery' ), '1.12.3', true );
    wp_register_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
    
    //register custom javascript
    wp_register_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0', true ); 
    
    //register google fonts
    wp_register_style( 'google-font', 'http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Merriweather:400i' );
    
    // load scripts and styles
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-migrate' );
    wp_enqueue_style( 'bootstrap-css' );
    wp_enqueue_script( 'popper-js' );
    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_script( 'custom-js' );
    wp_enqueue_style( 'google-font' );
}
add_action( 'wp_enqueue_scripts', 'sahti_scripts' );

/**
* Add sidebar for non-storefront pages
*/

add_action( 'widgets_init', 'sahti_widgets_init' );

function sahti_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'storefront' ),
		'id'            => 'sidebar2',
		'description'   => __( 'Add widgets here.', 'storefront' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}


// replacing default storefront site-branding 
function storefront_site_title_or_logo( $echo = true ) {
    if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
        $logo = get_custom_logo();
        $html = is_home() ? '<h1 class="logo">' . $logo . '</h1>' : $logo;
        
        // add this as well when displaying logo
        if ( '' !== get_bloginfo( 'description' ) ) {
            $html .= '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p>';
        }
        
    } elseif ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
        // Copied from jetpack_the_site_logo() function.
        $logo    = site_logo()->logo;
        $logo_id = get_theme_mod( 'custom_logo' ); // Check for WP 4.5 Site Logo
        $logo_id = $logo_id ? $logo_id : $logo['id']; // Use WP Core logo if present, otherwise use Jetpack's.
        $size    = site_logo()->theme_size();
        $html    = sprintf( '<a href="%1$s" class="site-logo-link" rel="home" itemprop="url">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image(
                $logo_id,
                $size,
                false,
                array(
                    'class'     => 'site-logo attachment-' . $size,
                    'data-size' => $size,
                    'itemprop'  => 'logo'
                )
            )
        );

        $html = apply_filters( 'jetpack_the_site_logo', $html, $logo, $size );
        
        // add this as well when displaying logo
        if ( '' !== get_bloginfo( 'description' ) ) {
            $html .= '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p>';
        }
        
    } else {
        $tag = is_home() ? 'h1' : 'div';

        $html = '<' . esc_attr( $tag ) . ' class="beta site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a></' . esc_attr( $tag ) .'>';

        if ( '' !== get_bloginfo( 'description' ) ) {
            $html .= '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p>';
        }
    }

    if ( ! $echo ) {
        return $html;
    }

    echo $html;
}

add_action( 'init', 'sahti_customise_storefront' );

function sahti_customise_storefront() {
	// Remove the storefromt post content function
	remove_action( 'storefront_loop_post', 'storefront_post_content', 30 );

	// Add our own custom function
	add_action( 'storefront_loop_post', 'sahti_custom_storefront_post_content', 30 );
}

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


function sahti_custom_storefront_post_content() {
	?>
	<div class="entry-content" itemprop="articleBody">
		<?php
			if ( has_post_thumbnail() ) { ?>
			    <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
				    <?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?>
				</a>			
			<?php }  ?>
			
		<?php the_excerpt(); ?>
		<div class="continue-reading" style="text-align: center;">
            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                <?php printf(
                    /* translators: %s: Name of current post. */
                    wp_kses( __( 'Continue reading %s', 'storefront' ), array( 'span' => array( 'class' => array() ) ) ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ); ?>
            </a>
        </div>
	</div><!-- .entry-content -->
	<?php
}


function storefront_credit() {
?>
    <div class="site-info">
        <span>&copy; Sahti LLC | Built by Dreamscape Development</span>
    </div>
<?php
}


/**
 * Load the individual classes required by this theme
 */
 
require_once( 'inc/class-sahti-child-template.php' );
 

add_action( 'init', 'sahti_remove_storefront_header_defaults' );

function sahti_remove_storefront_header_defaults() {
    remove_action( 'storefront_header', 'storefront_site_branding', 20);
    remove_action( 'storefront_header', 'storefront_product_search', 40);
    remove_action( 'storefront_header', 'storefront_header_cart', 60);
}

add_action( 'init', 'sahti_replace_storefront_headers' );

function sahti_replace_storefront_headers() {
  add_action( 'storefront_header', 'storefront_header_cart', 20);
  add_action( 'storefront_header', 'storefront_site_branding', 40);
  add_action( 'storefront_header', 'storefront_product_search', 60);
}

add_action( 'storefront_header', 'sahti_search_icon', 55 );
function sahti_search_icon() { ?>
	<span class="search-icon">
		<a class="search-icon-button" href=""></a>
	</span>
	<?php
}

 ?>