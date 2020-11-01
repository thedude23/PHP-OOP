<?php

declare(strict_types = 1); // type declaration - strict mode // 0 for false
namespace appClasses\includes;

include_once '../classes/Calc.php';

use appClasses\classes\Calc as Calc;


$oper = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new Calc((string)$oper, (int)$num1, (int)$num2);


try {
    echo $calc->calculator();
} catch(\TypeError $e) {
    echo 'Error!: ' . $e->getMessage();
}