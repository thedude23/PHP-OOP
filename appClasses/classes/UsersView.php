<?php

namespace appClasses\classes;
// require_once 'Users.php';

class UsersView extends Users
{
    public function showAllUsers()
    {
        $results = $this->getAllUsers();
    }

    public function showSpecificUsers($firstname, $lastname)
    {
        $results = $this->getSpecificUser($firstname, $lastname);
        echo 'Full name: ' . $results[0]['users_firstname'] . ' ' . $results[0]['users_lastname'] . ' ' . $results[0]['users_dateofbirth'];
    }
}
