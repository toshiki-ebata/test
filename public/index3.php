<?php
declare(strict_types=1);
error_reporting(-1);

class Hoge {
    static protected function _test() {
        echo "Hoge#_test \n";
    }
    static public function test() {
        static::_test();
    }
}
//
class Foo extends Hoge {
    static protected function _test() {
        echo "Foo#_test \n";
    }
}
//
Hoge::test();
Foo::test();