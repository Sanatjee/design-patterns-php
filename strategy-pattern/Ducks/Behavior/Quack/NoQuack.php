<?php

include_once 'Interfaces/QuackBehaviorInterface.php';

class NoQuack implements QuackBehaviorInterface{
    public function quack()
    {
        return "I cannot quack!";
    }
}