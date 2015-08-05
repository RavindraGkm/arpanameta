<?php
require_once('classes/Database.php');

$object = new Database();
$info['st_name']=$_POST['Student_Name'];
$info['st_address']=$_POST['Student_Address'];
$object->insert_student_record($info);
?>