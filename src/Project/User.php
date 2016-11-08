<?php

/**
 * User Class
 * This class represents a simple user object created from a database, to be used with a UsersTable class
 * User: Katie Paxton-Fear @Rapidbug
 * Date: 06/11/2016
 * Time: 23:51
 */
namespace Project;
class User
{
    private $id;
    private $username;
    private $password;
    private $email;

    /**
     * User constructor.
     * @param database row to generate from
     */
    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->password = $row['password'];
        $this->email = $row['email'];
    }

    /**
     * Getter for the id variable from the user
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    


}