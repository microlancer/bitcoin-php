<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

return array(
    'service_manager' => array(
        'aliases'   => array(
            'Bitcoin\Client' => 'Bitcoin\BitcoinClient',
        ),
        'factories' => array(
            'Bitcoin\Client' => 'Bitcoin\Factory\ClientFactory',
        ),
    ),
    'view_manager' => array(
        // Enable this in your application configuration in order to get full
        // exception stack traces in your API-Problem responses.
        'display_exceptions' => false,
    ),
);
