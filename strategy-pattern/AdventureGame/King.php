<?php
include_once 'Character.php';
include_once 'Behavior/BowAndArrow.php';


class King extends Character{
    public function __construct() {
        $this->weaponBehavior = new BowAndArrow();
    }
}