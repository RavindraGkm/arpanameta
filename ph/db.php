<?php
require_once('classes/Database.php');

$object = new Database();
$info['st_name']='Ram Sharma';
$info['st_address']='Jaipur';
$object->insert_student_record($info);
?>