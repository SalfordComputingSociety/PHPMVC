<?php
/**
 * Created by PhpStorm.
 * User: Katie
 * Date: 06/11/2016
 * Time: 23:57
 */

namespace Project\Database;

use Project\User;

class UsersTable extends TableAbstract
{
    
    protected $name = 'users';
    protected $primaryKey = 'id';

    //  In TableAbstract we get default data, here we specifically generate User Objects
    function fetchAllUsers()
    {
        $results = $this->fetchAll();
        $userArray = array();
        while ($row = $results->fetch()) {
            $userArray[] = new User($row);
        }
        return $userArray;
    }

    function fetchUserByID($id)
    {
        $row = $this->fetchByPrimaryKey($id);
        $newUser = NULL;
        if($row) {
            $newUser = new User($row);
        }
        return $newUser;
    }

    // Inserting into a database
    function addNewUser($data)
    {
        $password = password_hash($data['password'], PASSWORD_BCRYPT );

        $sql = 'INSERT INTO '. $this->name .' (username, password, email) VALUES (:username, :password, :email)';
        $result = $this->dbHandler->prepare($sql);
        $result->execute(array(
            ':username' => $data['username'],
            ':password' => $password,
            ':email' => $data['email']
        ));
        return $this->dbHandler->lastInsertId();
    }

    // fetch by specific query
    function fetchUserByUsername($username)
    {
        $sql = 'SELECT * FROM '. $this->name .' WHERE username = :username';
        $results = $this->dbHandler->prepare($sql);
        $results->execute(array(
            ':username' => $username
        ));
        $row = $results->fetch();
        if($row) {
            $user = new User($row);
        } else {
            $user = NULL;
        }
        return $user;
    }
    
    
    function login($data)
    {
        $user = $this->fetchUserByUsername($data['username']);
        if($user != null &&password_verify($data['password'], $user->getPassword() ))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}