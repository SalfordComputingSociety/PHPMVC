<?php
/**
 * LogoutController
 * Allows a user to logout
 * User: Katie
 * Date: 07/11/2016
 * Time: 01:16
 */

include_once ("header.php");

// destroy the session
session_destroy();

// redirect to login page
header('Location: login.php');