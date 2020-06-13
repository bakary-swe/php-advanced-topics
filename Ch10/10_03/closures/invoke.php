<?php

class IsPositive {
    public function __invoke($value)
    {
        return ((int) $value == $value && $value > 0);
    }
}

$invoke = new IsPositive();

var_dump($invoke(5));
var_dump($invoke('5'));
var_dump($invoke(5.0));
var_dump($invoke(-5));
var_dump($invoke(5.1));