<?php

include_once ('classes/wfdatabase.php');
$obj= new wfdatabase();
$response = $obj->get_all_information();
foreach($response as $row) {
    echo $row['fname']."<br/>";
}
?>