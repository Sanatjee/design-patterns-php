<?php

include_once 'Iinterfaces/QuackBehaviorInterface.php';

class Squeak implements QuackBehaviorInterface{
    public function quack()
    {
        return "I am squeaking";
    }
}