<?php

include_once ('classes/wfdatabase.php');

$info= $_GET;

$obj= new wfdatabase();

$obj->add_information($info);


?>