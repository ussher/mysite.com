<?php
/**
 * @copyright 2017 Talldude Networks, LLC.
 * @author Michael Ussher <michael [at] jamroom [dot] net>
 */

// make sure we are not being called directly
defined('APP_DIR') or exit();

/**
 * meta
 */
function xxJunk_meta()
{
    $_tmp = array(
        'name'        => 'Junk',
        'url'         => 'junk',
        'version'     => '1.0.0',
        'developer'   => 'Your Name Here, &copy;' . strftime('%Y'),
        'description' => 'Testing out stuff with a module called Junk',
        'category'    => 'custom',
        'license'     => 'mpl'
    );
    return $_tmp;
}

/**
 * init
 */
function xxJunk_init()
{
    return true;
}