<?php
include_once 'Character.php';
include_once 'Behavior/Knife.php';


class Queen extends Character{
    public function __construct() {
        $this->weaponBehavior = new Knife();
    }
}