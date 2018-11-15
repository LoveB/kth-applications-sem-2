<?php

namespace PersonRegister\Model;

/**
 * Represents a person.
 */
class User {

    private $name;
    private $password;
    private $loggedIn = false;

    /**
     * Contructs a new person with the specified name, age and phone number.
     */
    public function __construct($name, $password) {
        $this->name = $name;
        $this->password = $password;

    }

    /**
     * @return string the person's name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return integer the person's age.
     */
    public function getPassword() {
        return $this->password;
    }

    public function logIn() {
        $this->loggedIn = true;
    }


}