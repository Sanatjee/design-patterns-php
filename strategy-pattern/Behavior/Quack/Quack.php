<?php

include_once 'Interfaces/QuackBehaviorInterface.php';

class Quack implements QuackBehaviorInterface{
    public function quack(){
        return "I am quacking";
    }
}