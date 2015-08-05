<?php
class wfdatabase {

    private $database_object;

    const DB_NAME = "wfdatabase";
    const DB_HOST="localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "root";
    const DB_TYPE = "mysql";

    function __construct() {
        $this->database_object = new PDO(wfdatabase::DB_TYPE.":host=".wfdatabase::DB_HOST.";dbname=".wfdatabase::DB_NAME,wfdatabase::DB_USER,wfdatabase::DB_PASSWORD);
    }

    function add_information ($info) {

        $statement = $this->database_object->prepare("insert into `information` (`fname`,`lname`,`age`,`date`,`gender`,`address`,`email`) values (:fname,:lname,:age,:date,:gender,:address,:email)");
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

    function get_all_information () {
        $statement = $this->database_object->prepare("select * from `information`");
        $statement->execute();
        $response_array = array();
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $response_array[]=$row;
        }
        return $response_array;
    }

    function is_user_exists($user_email) {
        $statement = $this->database_object->prepare("select * from `login` where `email_id`=:email_id");
        $statement->bindParam(":email_id",$user_email);
        $statement->execute();
        $response = array();
        if($statement->rowCount()>0) {
            $response['msg']="Email exists";
            $response['status']=200;
            $response['email_exists']=true;
        }
        else {
            $response['msg']="Email does not exists";
            $response['status']=200;
            $response['email_exists']=false;
        }
        return $response;
    }

}
?>