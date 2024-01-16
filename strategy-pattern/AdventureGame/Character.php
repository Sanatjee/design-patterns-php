<?php

abstract class Character{
    protected $weaponBehavior;

    public function __construct(WeaponBehavior $weaponBehavior) {
        $this->weaponBehavior = $weaponBehavior;
    }

    public function setWeapon($weaponBehavior){
        $this->weaponBehavior = $weaponBehavior;
    }

    public function fight(){
        return $this->weaponBehavior->useWeapon();
    }
}