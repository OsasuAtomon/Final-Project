<?php
include('../model/sign_up_model.php');
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sign_up = new SignUp($firstname, $lastname, 
    $date, $username, $email, $phone, $password, $gender);
    $sign_up->createAccount();
}
?>
