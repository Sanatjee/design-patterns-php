<?php
include_once 'Character.php';
include_once 'Behavior/Axe.php';


class Troll extends Character{
    public function __construct() {
        $this->weaponBehavior = new Axe();
    }
}