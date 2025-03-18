<?php

class Duck
{
    private $flyBehavior;

    public function setFly($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function fly()
    {
        $this->flyBehavior->fly();
    }
}
