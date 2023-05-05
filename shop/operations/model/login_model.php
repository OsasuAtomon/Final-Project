<?php
class LoginModel{
    public $username;
    public $password;

    function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    function loginUser(){
        include('../../config/connect.php');
        $count = 0;
        $id = 0 ;
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $statement = $pdoConnect->prepare($sql);
        $statement->execute(array($this->username,$this->password));

        while($row = $statement->fetch() ){
            $count++;
            $id = $row['id'];
            /*$username = $row['username'];*/
        }
        if($count > 0 ){
        header("Location: ../../?id=".$id/*."username=".$username*/);
        }else{
            $message = "The user does not exists";
            header("Location: ../../login.php?message=".$message);

        }
    }
}
?>