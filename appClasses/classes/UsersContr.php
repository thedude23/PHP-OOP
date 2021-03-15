<?php
namespace appClasses\classes;

// Creating/inserting user(s)
class UsersContr extends Users {
    public function createUser($firstname, $lastname, $dateofbirth) {
        $this->setUser($firstname, $lastname, $dateofbirth);
    }
}