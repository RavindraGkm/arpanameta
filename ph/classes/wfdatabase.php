<?php
class wfdatabase {

    private $database_object;

    const DB_NAME = "wfdatabase";
    const DB_HOST="localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_TYPE = "mysql";

    function __construct() {
        $this->database_object = new PDO(wfdatabase::DB_TYPE.":host=".wfdatabase::DB_HOST.";dbname=".wfdatabase::DB_NAME,wfdatabase::DB_USER,wfdatabase::DB_PASSWORD);
    }

    function add_information ($info) {

        $statement = $this->database_object->prepare("insert into `information` (`fname`,`lname`,`age`,`date',`gender`,`address`,`email`) values (:fname,:lname,:age,:date,:gender,:address,:email)");
        $statement->bindParam(":fname",$info['FName']);
        $statement->bindParam(":lname",$info['LName']);
        $statement->bindParam(":age",$info['Age']);
        $statement->bindParam(":date",$info['DOB']);
        $statement->bindParam(":gender",$info['Gender']);
        $statement->bindParam(":address",$info['Address']);
        $statement->bindParam(":email",$info['Email']);
        if(!$statement->execute()) {
            print_r($info);
        }
    }
}
?>