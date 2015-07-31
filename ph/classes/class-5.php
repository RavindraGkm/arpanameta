<?php

abstract class MyAbstractClass {
    abstract function myAbstractFunction();
}
class B extends MyAbstractClass {
    function myAbstractFunction() {
        echo "yo";
    }
}
$obj = new B();
$obj->myAbstractFunction();
?>