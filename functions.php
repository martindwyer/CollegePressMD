<?php

/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CollegePressMD
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('THEME_DIR', get_template_directory());
define('THEME_URI', esc_url(get_template_directory_uri()));

/**
 * Theme features
 */
require_once THEME_DIR . '/inc/core/theme-features.php';

/**
 * Theme scripts
 */
require_once THEME_DIR . '/inc/core/theme-scripts.php';

/**
 * Theme nav menu locations
 */
require_once THEME_DIR . '/inc/core/nav-menu.php';

/**
 * Theme functionality: Image support
 */
require_once THEME_DIR . '/inc/core/image-support.php';

/**
 * Theme functionality: Post types
 */
require_once THEME_DIR . '/inc/types/post-types.php';

/**
 * Theme functionality: REST API
 */
require_once THEME_DIR . '/inc/rest/rest-api.php';
require_once THEME_DIR . '/inc/rest/like-route.php';

/**
 * Theme functionality: Adjust queries as needed
 */
require_once THEME_DIR . '/inc/campus/queries.php';
require_once THEME_DIR . '/inc/event/queries.php';
require_once THEME_DIR . '/inc/program/queries.php';

/**
 * Theme functionality: Set up Google map key
 */
require_once THEME_DIR . '/inc/campus/map-key.php';

/**
 * Theme utilities
 */

/**
 * Page banner utility
 */
require_once THEME_DIR . '/inc/core/page-banner.php';

/**
 * Home page functionality
 */
require_once THEME_DIR . '/inc/home/home-posts.php';
require_once THEME_DIR . '/inc/home/home-events.php';


/**
 * Redirect subscribers on login
 */
require_once THEME_DIR . '/inc/core/redirect-login.php';

/**
 * Remove admin bar for subscriber login
 */
require_once THEME_DIR . '/inc/core/remove-admin.php';


/**
 * Customize login screen
 */
require_once THEME_DIR . '/inc/core/login-custom.php';

/**
 * Make notes private
 */
require_once THEME_DIR . '/inc/core/notes-private.php';


/**
 * Exclude node_modules on export
 */
require_once THEME_DIR . '/inc/core/exclude-filters.php';
