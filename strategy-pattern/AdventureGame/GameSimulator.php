<?php

include_once 'King.php';
include_once 'Queen.php';
include_once 'Knight.php';
include_once 'Troll.php';

include_once "Behavior/Sword.php";
include_once "Behavior/BowAndArrow.php";

class GameSimulator{
    public static function main(){
        echo "King <br>";
        $king = new King();
        echo $king->fight();

        echo "<br> <br> 
        Queen <br>";
        $queen = new Queen();
        echo $queen->fight();
        echo "<br> I need a better weapon";
        echo $queen->setWeapon(New BowAndArrow());
        echo "<br> Here we go!<br>";
        echo $queen->fight();
        

        echo "<br> <br> 
        Knight <br>";
        $knight = new Knight();
        echo $knight->fight();
        

        echo "<br> <br> 
        Troll <br>";
        $troll = new Troll();
        echo $troll->fight();
        echo "<br> I need a better weapon";
        echo $troll->setWeapon(New Sword());
        echo "<br> FORWARD!<br>";
        echo $troll->fight();
        
    }
}

GameSimulator::main();