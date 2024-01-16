<?php
require_once "Interfaces/WeaponBehavior.php";

class Sword implements WeaponBehavior {
    public function useWeapon()
    {  
       return "Swinging a sword" ;
    }
}