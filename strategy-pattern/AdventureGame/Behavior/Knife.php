<?php
require_once "Interfaces/WeaponBehavior.php";

class Knife implements WeaponBehavior {
    public function useWeapon()
    {  
       return "Cutting with a knife" ;
    }
}