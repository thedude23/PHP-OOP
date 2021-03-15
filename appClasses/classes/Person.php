<?php
namespace appClasses\classes;

class Person {
    // properties
    private $name;
    private $age;

    public static $drinkingAge = 21;

    // const EXAMPLE = 'You cant change this.';

    // constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        // echo 'constructor test';
    }

    // methods
    public function setName(string $name) {
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
    // public function __destruct() {

    // }

}

/*
$a = Person::EXAMPLE;
echo $a;
*/