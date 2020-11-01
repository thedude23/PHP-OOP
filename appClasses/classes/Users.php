<?php
namespace appClasses\classes;
// require_once 'Dbh.php';

class Users extends Dbh {
    protected function getAllUsers() {
        $sql = 'SELECT * FROM users';
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo $row['users_firstname'] . '<br>';
        }
    }

    protected function getSpecificUser($firstname, $lastname) {
        $sql = 'SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($firstname, $lastname, $dateofbirth) {
        $sql = 'INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dateofbirth]);
    }
}