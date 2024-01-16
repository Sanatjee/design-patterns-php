<?php

include_once 'Duck.php';
include_once 'Behavior/Fly/NoFly.php';
include_once 'Behavior/Quack/NoQuack.php';

class DecoyDuck extends Duck{
    public function __construct() {
        $this->flyBehavior = new NoFly();
        $this->quackBehavior = new NoQuack();
    }
}