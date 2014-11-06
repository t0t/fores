<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

/*
if (!isset($content_width))
{
    $content_width = 900;
}
*/

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('fotogrande', 365, 365);
    add_image_size('slider', 940, 250, true);
    add_image_size('thumbsportada', 210, 130);
    add_image_size('thumbspie', 100, 135, true);
    add_image_size('portadaproductos', 818, 200, true);
    add_image_size('thumbsproductos', 172, 127);
    add_image_size('productospeque', 70, 80);

    add_image_size('thumbsgaleria', 146, 185, true);
    add_image_size('grid_6', 220, 125);
    add_image_size('carruselsubsidiary', 460, 125, true);
	add_image_size('carruselsidebar', 122, 133, true);
	add_image_size('ambientes', 450, 250, true);
	add_image_size('th-actualidad', 279, 155);
    add_image_size('galeria', 50, 50);

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    //add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'false',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="menu1 nav navbar-nav pull-right">%3$s</ul>',
		'depth'           => 0,
		'walker'          => new BootstrapNavMenuWalker()
		)
	);
}
function html5blank_nav2()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'extra-menu',
		'menu'            => '',
		'container'       => 'false',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="menu2 nav navbar-nav pull-right">%3$s</ul>',
		'depth'           => 0,
		'walker'          => new BootstrapNavMenuWalker()
		)
	);
}

function html5blank_nav3()
{
		
		wp_nav_menu(
		array(
		'theme_location'  => '',
		'menu'            => 'menu3',
		'container'       => 'false',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="list-group menu2 nav navbar-nav">%3$s</ul>',
		'depth'           => 0,
		'walker'          => new BootstrapNavMenuWalker()
		)
	);
		
}



// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if (!is_admin()) {

    	wp_deregister_script('jquery'); // Deregister WordPress jQuery
    	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.9.1'); // Google CDN jQuery
    	wp_enqueue_script('jquery'); // Enqueue it!
    	
    	//wp_register_script('jquery2', '../../../../../../../Users/o0/Downloads/wlantel.com-master/official_site/public_html/wp-includes/js/jquery/jquery.js'); // jQuery en local para DESARROLLO despues QUITAR
    	//wp_enqueue_script('jquery2'); // Enqueue it!

    	//wp_register_script('conditionizr', 'http://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/4.0.0/conditionizr.js', array(), '4.0.0'); // Conditionizr
        //wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js', array(), '2.6.2'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!


        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
        
        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js'); // Bootstrap
        wp_enqueue_script('bootstrap'); // Enqueue it!
                
        //wp_register_script('skrollr', get_template_directory_uri() . '/js/skrollr.js'); // Skrollr
        //wp_enqueue_script('skrollr'); // Enqueue it!
        
        wp_register_script('jcarousel', get_template_directory_uri() . '/js/jquery.jcarousel.min.js'); // Bootstrap
        wp_enqueue_script('jcarousel'); // Enqueue it!
                
        wp_register_script('tinynav', get_template_directory_uri() . '/js/tinynav.min.js'); // mobil nav
        wp_enqueue_script('tinynav'); // Enqueue it!
        
        //wp_register_script('responsive-nav', get_template_directory_uri() . '/js/responsive-nav.js'); // mobil nav
        //wp_enqueue_script('responsive-nav'); // Enqueue it!
        
        //wp_register_script('cycle2', get_template_directory_uri() . '/js/jquery.cycle2.min.js'); // Bootstrap
        //wp_enqueue_script('cycle2'); // Enqueue it!
        
        //wp_register_script('open-on-mouseover', get_template_directory_uri() . '/js/open-on-mouseover.js'); // Bootstrap
        //wp_enqueue_script('open-on-mouseover'); // Enqueue it!
        
        //wp_register_script('flaunt', get_template_directory_uri() . '/js/flaunt.js', array(), '1.0.0'); // http://toddmotto.com/flaunt-js-for-stylish-responsive-navigations-with-nested-click-to-reveal
        //wp_enqueue_script('flaunt'); // Enqueue it!
    }
}		

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_single()) {
        wp_register_script('fluidvids', get_template_directory_uri() . '/js/fluidvids.min.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('fluidvids'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
   /*
 wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');
*/ 
    
    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.4.3', 'all');
    wp_enqueue_style('html5blank');
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<ul id="%1$s" class="%2$s bb">',
        'after_widget' => '</ul>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'container_class' => 'list-group'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}


/**
 * Extended Walker class for use with the
 * Twitter Bootstrap toolkit Dropdown menus in Wordpress.
 * Edited to support n-levels submenu.
 * @author johnmegahan https://gist.github.com/1597994, Emanuele 'Tex' Tessore https://gist.github.com/3765640
 */
class BootstrapNavMenuWalker extends Walker_Nav_Menu {
 
 
	function start_lvl( &$output, $depth ) {
 
		$indent = str_repeat( "\t", $depth );
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output	   .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
 
	}
 
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
 
 
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$li_attributes = '';
		$class_names = $value = '';
 
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		// managing divider: add divider class to an element to get a divider before it.
		$divider_class_position = array_search('divider', $classes);
		if($divider_class_position !== false){
			$output .= "<li class=\"divider\"></li>\n";
			unset($classes[$divider_class_position]);
		}
		
		$classes[] = ($args->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if($depth && $args->has_children){
			$classes[] = 'dropdown-submenu';
		}
 
 
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children) 	    ? ' class="dropdown-toggle" data-toggle=""' : '';
 
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($depth == 0 && $args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;
 
 
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	
 
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		//v($element);
		if ( !$element )
			return;
 
		$id_field = $this->db_fields['id'];
 
		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);
 
		$id = $element->$id_field;
 
		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
 
			foreach( $children_elements[ $id ] as $child ){
 
				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
			unset( $children_elements[ $id ] );
		}
 
		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}
 
		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);
 
	}
 
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}



function html5wp_pagination( $query=null ) {

  global $wp_query;

  $query = $query ? $query : $wp_query;

  $big = 999999999;

  $paginate = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'type' => 'array',
    'total' => $query->max_num_pages,
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'prev_text' => __('&laquo;'),
    'next_text' => __('&raquo;'),
    )
  );
  if ($query->max_num_pages > 1) :
?>
<ul class="pagination pagination-lg">
  <?php
  foreach ( $paginate as $page ) {
    echo '<li>' . $page . '</li>';
  }
  ?>
</ul>
<?php
  endif;
}



// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
/*
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
    
}
*/

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
// add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
// add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'coleccion'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'coleccion');
    register_post_type('colecciones', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Colecciones', 'coleccion'), // Rename these to suit
            'singular_name' => __('Coleccion', 'coleccion'),
            'add_new' => __('Add New', 'coleccion'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'coleccion'),
            'edit' => __('Edit', 'coleccion'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'coleccion'),
            'new_item' => __('New HTML5 Blank Custom Post', 'coleccion'),
            'view' => __('View HTML5 Blank Custom Post', 'coleccion'),
            'view_item' => __('View HTML5 Blank Custom Post', 'coleccion'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'coleccion'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'coleccion'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'coleccion')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
    
    
    register_taxonomy_for_object_type('category', 'mueble'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'mueble');
    register_post_type('mueble', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('mueble', 'mueble'), // Rename these to suit
            'singular_name' => __('Mueble', 'mueble'),
            'add_new' => __('Add New', 'mueble'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'mueble'),
            'edit' => __('Edit', 'mueble'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'mueble'),
            'new_item' => __('New HTML5 Blank Custom Post', 'mueble'),
            'view' => __('View HTML5 Blank Custom Post', 'mueble'),
            'view_item' => __('View HTML5 Blank Custom Post', 'mueble'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'mueble'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'mueble'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'mueble')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}






/* Breadcrumb */
function custom_breadcrumb() {
        if (!is_page (array ('Home', 'bienvenida', 'contacto', 'colecciones', 'novedades', 'el-grupo', 'servicios')) && !is_category() && !is_archive('colecciones') ) {
		echo '<ul class="breadcrumb">';
		echo '<li><a href="';
		echo '">';
		echo '<span class="el-icon-home"></span>';
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo '<li>';
			_e( '', 'html5blank' ); the_category(', ');
			echo '</li>';
			if (is_single()) {
				echo '<li>';
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo the_title();
		}
		echo'</ul>';
	}
}

/**
 * ====================================================
 * Help Contact Form 7 Play Nice With Twitter Bootstrap
 * ==================================================== 
 * Add a Twitter Bootstrap-friendly class to the "Contact Form 7" form
 */
add_filter( 'wpcf7_form_class_attr', 'wildli_custom_form_class_attr' );
function wildli_custom_form_class_attr( $class ) {
	$class .= ' form-horizontal';
	return $class;
}

?>
