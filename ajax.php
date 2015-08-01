<?php
//echo "Hello this is a paragraph";
$a['name'] = 'ram';
$a['msg'] = 'This is a paragraph';
$a['age'] = $_GET['user_age'];
if($a['age']>90) {
    $a['msg'] = 'Plz enter correct age';
}
echo json_encode($a);
?>