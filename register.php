<?php
/**
 * RegisterController
 * Allows a user to register to the website
 * User: Katie
 * Date: 08/11/2016
 * Time: 19:28
 */
require_once ("header.php");


if(!isset($_SESSION['user'])) {
    // user is not logged in
    if (isset($_POST['register'])) {
        // check form has been submitted

        // prepare form data
        $data = array(
            "username" => $_POST['username'],
            "password" => $_POST['password'],
            "email" => $_POST['email']
        );

        // create new user table to manage the data
        $usersTable = new \Project\Database\UsersTable();

        // add new record to the table
        // note: we do not check if we can add the user - this is something you could add
        // addNewUser returns a userid
        $user_id = $usersTable->addNewUser($data);

        // we can save the users session now
        $_SESSION['user'] = $user_id;

        // redirect to the index
        header('Location: index.php');
    }
    else {
        // form wasn't submitted just load the page
        require_once("views/register.phtml");
    }
} else {
    // user is already logged in, just redirect them
    header('Location: index.php');
}