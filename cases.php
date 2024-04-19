<?php
class Calculadora
{
    public $num1;
    public $num2;
    function __construct($newNum1, $newNum2)
    {
        $this->num1 = $newNum1;
        $this->num2 = $newNum2;
    }
    public function sumar()
    {
        return $this->num1 + $this->num2;
    }
    public function restar()
    {
        return $this->num1 - $this->num2;
    }
    public function multi()
    {
        return $this->num1 * $this->num2;
    }
    public function div()
    {
        if ($this->num2 === 0) {
            return "El segundo numero no puede ser 0";
        }
        return $this->num1 / $this->num2;
    }
    public function exp()
    {
        return $this->num1 ** $this->num2;
    }
};

$calc1 = new Calculadora(5, 5);

var_dump($calc1->sumar());
