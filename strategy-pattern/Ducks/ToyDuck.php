<?php

include_once 'Duck.php';
include_once 'Behavior/Fly/NoFly.php';
include_once 'Behavior/Quack/Squeak.php';

class ToyDuck extends Duck{

    public function __construct() {
        $this->flyBehavior = new NoFly();
        $this->quackBehavior = new Squeak();
    }
}