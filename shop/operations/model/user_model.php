<?php
class UserModel{
    public $id;

    function __construct($id){
        $this->id = $id;
    }

    function getUser(){
        include('./config/connect.php');
        $user = null;
        $sql = "SELECT * FROM users WHERE id = ?";
        $statement = $pdoConnect->prepare($sql);
        $statement -> execute(array($this->id));
        while($row = $statement->fetch()){
            $user = new User(
                $this->id,
                $row['username'],
                $row['date_of_birth'],
                $row['email'],
                $row['phone_number'],
                $row['address'],
                $row['payment_method']
            );
        }

        return $user;
    }
}

class User{
    public $id;
    public $username;
    public $date_of_birth;
    public $email;
    public $phoneNumber;
    public $address;
    public $payment_method;

    function __construct($id, $username,$date_of_birth, $email, $phoneNumber, $address, $payment_method){
        $this->id = $id;
        $this->username = $username;
        $this->date_of_birth = $date_of_birth;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->payment_method = $payment_method;
    }
}
?>