<?php
/**
 * Plugin Name: Remove P Query
 * Plugin URI: https://github.com/alxrdev/remove-p-query
 * Description: Plugin that removes the p query variable from the list of public query variables.
 * Author: Alex Rodrigues Moreira
 * Version: 1.0
 * Author URI: https://github.com/alxrdev
 * Namespace: rpq
 */


/**
 * Function that remove the p query var.
 *
 * @param     array     $vars Public query variables.
 * @return    array     Public query variables without the p var.
 */
function rpq_remove_query_var( $vars ) 
{
    foreach ($vars as $key => $var) {
        if ($var === 'p')
            unset($vars[$key]);
    }

    return $vars;
}
add_filter( 'query_vars', 'rpq_remove_query_var' );