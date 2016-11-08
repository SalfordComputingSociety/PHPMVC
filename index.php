<?php
/**
 * Index Controller
 * Basic index controller, if a user is logged in it loads the current logged in user as a object
 * and a list of all users. If a user is not logged in it redirects them to the login controller
 * User: Katie
 * Date: 08/11/2016
 * Time: 19:17
 */



// Require the header, we do this on all pages
require_once ("header.php");

// Set the title of the webpage we're currently on
$view->title = "PHPMVC";

// We want to use the database so we need a UsersTable object to manage this
$usersTable = new \Project\Database\UsersTable();

// Check if a user is logged in
// Note: by default $_SESSION['user'] is an id from the database
if(isset($_SESSION['user'])) {
    // user is logged in

    // Returns a User object of the current logged in user
    $view->loggedInUser = $usersTable->fetchUserByID($_SESSION['user']);

    // Returns a list of User objects which are registered
    $view->listOfUsers = $usersTable->fetchAllUsers();

    // Load the view
    require_once("views/index.phtml");
} else {
    // If the user isn't logged in

    // Redirect to the login controller
    // Note: This function only works if we have not sent any HTML to the page yet
    header('Location: login.php');
}