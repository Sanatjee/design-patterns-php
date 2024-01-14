<?php

abstract class Duck{
    protected $flyBehavior;
    protected $quackBehavior;

     public function __construct(FlyBehaviorInterface $flyBehavior,QuackBehaviorInterface $quackBehavior) {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function performFly(){
        return $this->flyBehavior->fly();
    }

    public function performQuack(){
        return $this->quackBehavior->quack();
    }

    // common methods
    public function swim(){
        return "I am swimming";
    }

}