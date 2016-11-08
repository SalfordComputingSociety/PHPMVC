<?php
/**
 * LoginController
 * Allows a user to login to the website
 * User: Katie
 * Date: 08/11/2016
 * Time: 19:17
 */

require_once ("header.php");
if(!isset($_SESSION['user'])) {
    // user is not logged in
    if (isset($_POST['login'])) {
        // check form has been submitted

        // prepare form data
        $data = array(
            "username" => $_POST['username'],
            "password" => $_POST['password']
        );

        // create new user table to manage the data
        $usersTable = new \Project\Database\UsersTable();

        // call login method returns a boolean
        $login = $usersTable->login($data);

        if ($login === true) {
            // user can be logged in

            // fetch userId to store in the session
            $user_id = $usersTable->fetchUserByUsername($data['username'])->getId();

            // store the session
            $_SESSION['user'] = $user_id;

            // send us to the index
            header('Location: index.php');
        } else {
            // user can't be logged in

            // show ann error and send us back to the login page
            echo "Error: Can't login";
            require_once("views/login.phtml");
        }
    } else {
        // form not submitted
        require_once("views/login.phtml");
    }
} else {
    // user is already logged in, just redirect them
    header('Location: index.php');
}