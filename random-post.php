<?php 

    /*
    Plugin Name: Random Post by Ajax 
    Plugin URI: http://www.misaco.ir 
    Description: Combining beauty and efficiency to display random posts
    Author: MiSaCo. 
    Version: 0.7.6
    Author URI: http://www.misaco.ir
    Text Domain: random-post-ajax
    */ 
    /*-------------------------------------------------------------------------------------------------*/

    // Security Check 
    if ( ! defined( 'ABSPATH' ) ) exit;

    // Set Define 
    define('randompost_Version' , '0.7.6');
    define('randompost_CodeName', ' Lotfi A. Zadeh');
    define('randompost_CodeName_link', 'https://en.wikipedia.org/wiki/Lotfi_A._Zadeh');


    // Get Core file 
    require_once('core.php');


    // i18n plugin domain
    define('RANDOM_POST_AJAX_I18N_DOMAIN', 'random-post-ajax');

    /* Initialise the internationalisation domain */
    load_plugin_textdomain(RANDOM_POST_AJAX_I18N_DOMAIN,'wp-content/plugins/duplicate-post/languages','random-post-ajax/languages');



        ?>