<?php
echo $_GET['user_name'];
echo "<br/>";
echo $_GET['user_password'];
echo "<br/>";
if(isset($_GET['user_language'])) {
    echo $_GET['user_language'];
}
?>