<?php

include_once 'Interfaces/FlyBehaviorInterface.php';

class NoFly implements FlyBehaviorInterface{
    public function fly()
    {
        return "I cannot fly";
    }
}