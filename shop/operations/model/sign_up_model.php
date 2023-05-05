
<?php
class SignUp{
    public $firstName;
    public $lastName;
    public $date_of_birth;
    public $username;
    public $email;
    public $phoneNumber;
    public $password;
    public $gender;

    function __construct($firstName, $lastName, $date_of_birth, $username, $email, $phoneNumber, $password, $gender) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->date_of_birth = $date_of_birth;
        $this->username = $username;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->gender = $gender;
    }

    function userExist(){
        $exists = false;
        $count = 0;
        include('../../config/connect.php');
        $sql = "SELECT * FROM users WHERE username = ? AND email = ?";
        $statement = $pdoConnect->prepare($sql);
        $statement->execute(array(
            $this->username,
            $this->email
        ));
        while($statement->fetch())
        {
         $count++;   
        }

        if($count > 0)
        {
            $exists = true;
        }

        return $exists;
    }

    function createCartTable($user){
        include('../../config/connect.php');
        $sql = "CREATE TABLE ".$user."_cart(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        product_id INT(11) NOT NULL, 
        qty INT(11) NOT NULL, 
        price INT(11) NOT NULL)";
        $statement = $pdoConnect->query($sql);
    }

    function createProductTable($user){
        include('../../config/connect.php');
        $sql = "CREATE TABLE ".$user."_product(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        product_id INT(11) NOT NULL)";
        $statement = $pdoConnect->query($sql);
    }

    function createTransactionTable($user){
        include('../../config/connect.php');
        $sql = "CREATE TABLE ".$user."_transaction(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        amount INT(11) NOT NULL, 
        date VARCHAR(255) NOT NULL)";
        $statement = $pdoConnect->query($sql);
    }
    function createTextTable($user){
        include('../../config/connect.php');
        $sql = "CREATE TABLE ".$user."_message(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        email INT(11) NOT NULL, 
        text VARCHAR(255) NOT NULL)";
        $statement = $pdoConnect->query($sql);
    }

    function getUserId($username){
        include('../../config/connect.php');
        $id = 0;
        $sql = "SELECT * FROM users WHERE username = ?";
        $statement = $pdoConnect->prepare($sql);
        $statement -> execute(array($username));
        while($row = $statement->fetch()){
            $id = $row['id'];
        }

        return $id;
    }

    function createAccount(){
        include('../../config/connect.php');
        $message = "";
        if(!$this->userExist())
        {
            $sql = "INSERT INTO users (
                first_name,
                last_name,
                username,
                date_of_birth,
                email,
                phone_number,
                password,
                address,
                payment_method,
                customer_score,
                gender
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $statement = $pdoConnect->prepare($sql);
            $statement->execute(
                array(
                    $this->firstName,
                    $this->lastName,
                    $this->username,
                    $this->date_of_birth,
                    $this->email,
                    $this->phoneNumber,
                    $this->password,
                    "",
                    "",
                    0,
                    $this->gender
                )
            );

            $this->createCartTable($this->username);
            $this->createProductTable($this->username);
            $this->createTransactionTable($this->username);
            $id = $this->getUserId($this->username);
            header("Location: ../../?id=".$id);
        }else{
            $message = "The user already exists";
            header("Location: ../../create_account.php?message=".$message);
        }
    }
}


?>