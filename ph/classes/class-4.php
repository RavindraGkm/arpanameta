<?php
class A {
    function aa () {
        echo "sup";
    }
}
class B extends A {
    function aa() {
        parent::aa();
        echo "sub";
    }
}

$obj = new B();
$obj->aa();