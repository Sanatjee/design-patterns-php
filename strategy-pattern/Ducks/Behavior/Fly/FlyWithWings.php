<?php

include_once 'Interfaces/FlyBehaviorInterface.php';

class FlyWithWings implements FlyBehaviorInterface{
    public function fly()
    {
        return "I am flying";
    }
}