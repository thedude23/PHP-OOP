<?php

class Person {

    protected $first = 'Daniel'; // a property
    private $second = 'Nielsen';
    private $age = '28';

    public function owner() { // a method
        $a = $this->first;
        return $a;
    }
}

class Pet extends Person {

    // public function owner() { // a method
    //     $a = 'Hi there!';
    //     return $a;
    // }

    public function owner() { // a method
        $a = $this->first;
        return $a;
    }
}

class Persona {

    // properties
    // public $name;
    // public $eyeColor;
    // public $age;

    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;

    // constructor
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // methods
    public function setName($name) {
        $this->name = $name;
    }

    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }

    public function getName() {
        return $this->name;
    }

    public function getDrinkingAge() {
        return self::$drinkingAge;
    }

    // destructor -- to clean up our class
    public function __destruct() {

    }
}

class NewClass {

    public $data = 'I am a property.';

    public function __construct() {
        echo 'This class has been instantiated. <br>';
    }

    public function setNewProperty($newData) {
        $this->data = $newData;
    }

    public function getProperty() {
        return $this->data;
    }

    public function __destruct() {
        echo '<br> This is the end of the class.';
    }
}