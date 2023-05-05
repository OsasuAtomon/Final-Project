<?php
include('../model/login_model.php');
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $LoginModel= new loginModel($username, $password);
    $LoginModel->loginUser();

   
}
?>