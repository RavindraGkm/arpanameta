<?php

if(!empty($_FILES['image']['name'])) {
    $PATH = 'uploads/'.$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$PATH);
}

?>