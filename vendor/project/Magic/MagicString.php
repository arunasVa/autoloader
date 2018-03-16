<?php namespace Magic\Methods;

class MagicString {
    public $foo;

    public function __construct($foo) {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return ( string ) $this->foo . PHP_EOL;
    }
}