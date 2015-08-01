<?php

class A {

    private $i;
    function __construct($i) {
        $this->i=$i;
    }
    function set_data($i) {
        $this->i = $i;
    }
    function get_data() {
        return $this->i;
    }

    function add($obj3) {
        $obj3 =new A($this->i + $obj3->i);
        return $obj3;
    }
}
$obj1 = new A(100);
$obj2 = new A(200);
$obj3 = $obj1->add($obj2);
echo $obj3->get_data();
?>