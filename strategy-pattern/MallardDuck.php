<?php

include_once 'Duck.php';
include_once 'Behavior/Fly/FlyWithWings.php';
include_once 'Behavior/Quack/Quack.php';

class MallardDuck extends Duck{

    public function __construct() {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }
}