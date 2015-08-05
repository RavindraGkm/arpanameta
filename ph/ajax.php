<?php

include_once ('classes/wfdatabase.php');
if(isset($_GET['user_email'])) {
    $obj= new wfdatabase();
    $user_email = $_GET['user_email'];
    $response = $obj->is_user_exists($user_email);
    echo json_encode($response);
}
elseif(isset($_GET['get_all_results'])) {
    $obj= new wfdatabase();
    $response = $obj->get_all_information();
    echo json_encode($response);
}

?>