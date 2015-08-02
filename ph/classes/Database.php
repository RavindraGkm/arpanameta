<?php
class Database {

    private $database_object;

    const DB_NAME = "arpan";
    const DB_HOST="localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_TYPE = "mysql";

    function __construct() {
        $this->database_object = new PDO(Database::DB_TYPE.":host=".Database::DB_HOST.";dbname=".Database::DB_NAME,Database::DB_USER,Database::DB_PASSWORD);
    }

    function insert_student_record ($info) {
        $statement = $this->database_object->prepare("insert into `student` (`st_name`,`address`) values (:st_name,:address)");
        $statement->bindParam(":st_name",$info['st_name']);
        $statement->bindParam(":address",$info['st_address']);
        $statement->execute();
    }
}
?>