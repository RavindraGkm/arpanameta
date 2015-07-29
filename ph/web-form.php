<?php
echo $_GET['user_name'];
echo "<br/>";
echo $_GET['user_password'];
echo "<br/>";
if(isset($_GET['user_language'])) {
    echo "set hai ";
    echo $_GET['user_language'];
}

//print_r($_POST);
?>