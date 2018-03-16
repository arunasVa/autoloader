<?php namespace Magic\Methods;

class MoreMagic {

    public function __get($name) {
        echo "__get works with name $name".PHP_EOL;
    }

    public function __set($name, $value) {
        echo "__set works with name $name and $value".PHP_EOL;
    }

    public function __call($name, $parameter) {
        $a = print_r($parameter, true);
        echo "__call works with $name, parameter $a".PHP_EOL;
    }

    public static function __callStatic($name, $parameter) {
        $a = print_r($parameter, true);
        echo "__callstatic works with name $name, parameter $a".PHP_EOL;
    }

    public function __isset($name)
    {
        echo "__isset is called for $name".PHP_EOL;
    }

    public function __unset($name)
    {
        echo "__unset is called for $name".PHP_EOL;
    }
}