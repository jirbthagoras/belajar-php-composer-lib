<?php

namespace jirb\belajar;

class customer {

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name):string {
        return "Hello $name! " . "My name is $this->name" . PHP_EOL;
    }
}