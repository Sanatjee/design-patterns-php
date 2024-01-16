<?php
include_once 'Character.php';
include_once 'Behavior/Sword.php';


class Knight extends Character{
    public function __construct() {
        $this->weaponBehavior = new Sword();
    }
}