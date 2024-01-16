<?php
require_once "Interfaces/WeaponBehavior.php";

class BowAndArrow implements WeaponBehavior {
    public function useWeapon()
    {  
       return "Shooting an arrow with a bow" ;
    }
}