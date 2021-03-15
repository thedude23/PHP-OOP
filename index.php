<?php

declare(strict_types=1); // type declaration - strict mode // 0 for false
//namespace index;

// require_once 'autoload.php';
require_once 'vendor/autoload.php';

//include_once 'classes/BuyProduct.php';
//include_once 'abstract/Visa.abstract.php';

// "classmap": [
//     "appClasses/classes",
//     "appClasses/abstracts",
//     "appClasses/includes"
// ]

// echo phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <!-- Working with Person(a) class -->
    <?php
    // $pet01 = new Pet();
    // echo $pet01->owner();

    // echo '<hr>';

    // $person01 = new Person();
    // echo $person01->owner();

    // echo '<hr>';


    //$person1 = new Persona('Daniel', 'blue', 29);
    // echo $persona1->name . "<br>";
    // echo $persona1->eyeColor . "<br>";
    // echo $persona1->age . "<br>";
    //$persona1->setName('Timmy');
    // echo $persona1->name . "<br>";
    //echo $persona1->getName() . "<br>";


    //$object = new NewClass();
    // unset($object);
    //echo $object->getProperty() . "<br>";


    //echo Persona::$drinkingAge . "<br>";
    //Persona::setDrinkingAge(18);
    // echo Persona::$drinkingAge . "<br>";
    //echo $persona1->getDrinkingAge();


    /*
    try {
        $person1 = new Person('Danny', 28);
        $person1->setName('Johnny');
        echo $person1->getName();
    } catch (TypeError $e) {
        echo 'Error!: ' . $e->getMessage();
    }
    */
    ?>


    <!-- Working with forms -->
    <form action="appClasses/includes/calc.php" method="post">
        <fieldset>
            <legend>My own Calculator!</legend>
            <input type="number" name="num1" placeholder="First Number">
            <select name="oper">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="div">/</option>
                <option value="mul">*</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number">
            <button type="submit" name="Submit">Calculate</button>
        </fieldset>
    </form>


    <?php
    // Abstract class
    // echo '<hr>';
    // $buyProduct = new BuyProduct();
    // echo $buyProduct->getPayment();


    // Anonymous class
    // echo '<hr>';
    // $newObj = new class() {
    //     public function helloWorld() {
    //         echo 'Hello world';
    //     }
    // }
    // $newObj->helloWorld();
    ?>


    <!-- Working with DB -->
    <?php
    echo '<br>';
    //$testObjt = new Test();
    // $testObjt->getUsers();
    //$testObjt->getUsersStmt('Daniel', 'Nielsen');
    //$testObjt->setUsersStmt('Tim', 'Koprivnik', '1994-07-23');

    $usersObjt = new appClasses\classes\UsersView();
    $usersObjt->showAllUsers();
    // $usersObjt->showSpecificUsers('Daniel', 'Nielsen');

    // $usersObjt2 = new appClasses\classes\UsersContr();
    // $usersObjt2->createUser('Tix', 'WebTix', '2020-01-01');

    ?>
</body>

</html>