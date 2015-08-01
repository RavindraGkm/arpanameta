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
class B extends A {
    private $j;
    function __construct($i,$j) {
        parent::__construct($i);
        $this->j=$j;
    }
    function get_data () {
        return $this->j+parent::get_data();
    }
}
$obj1 = new B(100,2000);
echo $obj1->get_data();
?>