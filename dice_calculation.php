<?php

class Dice
{
    static $amount = null;
    public function __construct()
    {
        self::$amount = 100;
    }
    public function roll($amount)
    {
        self::$amount -=  10;
    }

    public function getAmount()
    {
        return self::$amount;
    }

    public function win($amount)
    {
        return self::$amount += $amount;
    }
}

$obj = new Dice();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $selection  = $_POST['selectedValues'];
    $total = $_POST['total'];
    $obj->roll($total);
    if ($selection == 'Below7') {
        if ($total < 7) {
            $obj->win(20);
            $obj->win($amount);
            echo $obj->getAmount();
        }
    }
    if ($selection == '7') {
        if ($total == 7) {
            $obj->win(30);
            $obj->win($amount);
            echo $obj->getAmount();
        }
    }
    if ($selection == 'Above7') {
        if ($total > 7) {
            $obj->win(20);
            $obj->win($amount);
            echo $obj->getAmount();
        }
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $obj::$amount = null;
}
