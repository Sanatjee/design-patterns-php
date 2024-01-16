<?php
require_once "Interfaces/WeaponBehavior.php";

class Axe implements WeaponBehavior {
    public function useWeapon()
    {  
       return "Chopping with AXE!" ;
    }
}