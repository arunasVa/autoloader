<?php namespace Magic\Methods;

class Magic {

    public function __construct()
    {
        echo "__construct works".PHP_EOL;
    }

    public function __destruct()
    {
        echo "__destruct works".PHP_EOL;
    }
}