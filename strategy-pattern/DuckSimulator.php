<?php

include_once 'MallardDuck.php';
include_once 'DecoyDuck.php';

class DuckSimulator{
    public static function main(){
        echo "Mallard Duck <br>";
        $mallard = new MallardDuck();
        echo $mallard->performFly();
        echo "<br>";
        echo $mallard->performQuack();

        echo "<br> <br> 
        Decoy Duck <br>";
        $decoy = new DecoyDuck();
        echo $decoy->performFly();
        echo "<br>";
        echo $decoy->performQuack();
    }
}

DuckSimulator::main();