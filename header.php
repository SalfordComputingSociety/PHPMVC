<?php

/**
 * HeaderController
 * A simple controller that handles general set up tools
 * User: Katie
 * Date: 08/11/2016
 * Time: 19:17
 */

// autoload the classes in the src directory
require_once (__DIR__ . "/vendor/autoload.php");
// set the timezone to London
date_default_timezone_set('Europe/London');
// Create a view object from the standard class
$view = new stdClass();
// Sessions for dealing with logins
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}