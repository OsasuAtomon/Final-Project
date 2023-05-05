<?php 

$username = $_GET['username'];

if(isset($_POST['product'])){
    $productId = $_POST['product'];
    $user = $_POST['user'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $tableName = $user."_cart";

    include('../../config/connect.php');
    $sql = "INSERT INTO $tableName(product_id, qty, price) VALUES (?,?,?)";
    $statement = $pdoConnect->prepare($sql);
    $statement->execute(
        array(
            $productId,
            $quantity,
            $price
        )
    );
    header("Location: ../../?id=".$id."&username=".$username);
    //header("Location: ../../product.php?id=".$productId ."&username=".$username);
}


?>