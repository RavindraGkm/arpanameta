<?php

$a = 10;

function function_name() {
    global $a;
    $a=$a+1;
}

function_name();

echo $a;

?>