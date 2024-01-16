<?php

include_once 'MallardDuck.php';
include_once 'DecoyDuck.php';
include_once 'ToyDuck.php';

include_once "Behavior/Fly/FlyWithWings.php";
include_once "Behavior/Quack/Quack.php";

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
        echo "<br> Let me get a beak!";
        echo $decoy->setQuackBehavior(new Quack);
        echo "<br> Oh see! ";
        echo $decoy->performQuack();

        echo "<br> <br> 
        Toy Duck <br>";
        $toy = new ToyDuck();
        echo $toy->performFly();
        echo "<br> Let me get wings!";
        $toy->setFlyBehavior(new FlyWithWings);
        echo "<br>Ohh see! ";
        echo $toy->performFly();
        echo "<br>";
        echo $toy->performQuack();
    }
}

DuckSimulator::main();