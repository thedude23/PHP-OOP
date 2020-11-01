<?php
namespace appClasses\classes;

class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $oper, int $n1, int $n2) {
        $this->operator = $oper;
        $this->num1 = $n1;
        $this->num2 = $n2;
    }

    public function calculator() {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2; 
                return $result;
            break;
            case 'sub':
                $result = $this->num1 - $this->num2; 
                return $result;
            case 'div':
                $result = $this->num1 / $this->num2; 
                return $result;
            case 'mul':
                $result = $this->num1 * $this->num2; 
                return $result;
            default: 
                echo 'Error!';
            break;
        }
    }
}