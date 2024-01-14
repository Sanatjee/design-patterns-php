<?php

include_once 'Interfaces/QuackBehaviorInterface.php';

class Squeak implements QuackBehaviorInterface{
    public function quack()
    {
        return "I am squeaking";
    }
}