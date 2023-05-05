<?php
$user = null; 
$data_id = null;
include('./operations/model/user_model.php');
if(isset($_GET['id'])){
    $data_id = $_GET['id'];
    $userModel = new UserModel($data_id);
    $user = $userModel->getUser();
    echo $data_id;
}
?>