<?php

namespace Model;

/**
 * Represents a user.
 */
class User {

    private $name;
    private $password;

    /**
     * Contructs a new user with the specified name, age and phone number.
     */
    public function __construct($name, $password) {
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * @return string the user's name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return integer the user's password.
     */
    public function getPassword() {
        return $this->password;
    }

}

