<?php
include('../model/product_model.php');
if(isset($_POST['add'])){
    $id= $_POST['id'];
    if($id === 'undefined'){
        
    $productName = $_POST['product_name'];
    $productCode = $_POST['product_code'];
    $productImage = $_FILES['product_image'];
    $category = $_POST['category'];
    $productDescription = $_POST['product_description'];
    $productManufactureDate =$_POST['product_manufacture_date'];
    $productExpireDate = $_POST['product_expire_date'];
    $costPrice = $_POST['cost_price'];
    $sellingPrice = $_POST['selling_price'];
    $profit = $_POST['profit'];
    $totalStock = $_POST['total_stock'];

    $product = new ProductObject(0, $productName, 
    $productCode, $productImage,$category,
    $productDescription ,$productManufactureDate,
    $productExpireDate, $costPrice,
    $sellingPrice, $profit,
    $totalStock,
    0,
    $totalStock,
    0);


    $productData = new ProductData($product);
    $productData->saveProduct();
    header("Location: ../../");

    }else{
        
    $productName = $_POST['product_name'];
    $productCode = $_POST['product_code'];
    $productImage = $_FILES['product_image'];
    $category = $_FILES['category'];
    $productDescription = $_POST['product_description'];
    $productManufactureDate =$_POST['product_manufacture_date'];
    $productExpireDate = $_POST['product_expire_date'];
    $costPrice = $_POST['cost_price'];
    $sellingPrice = $_POST['selling_price'];
    $profit = $_POST['profit'];
    $totalStock = $_POST['total_stock'];

    $product = new ProductObject(0, $productName, 
    $productCode, $productImage,$category,
    $productDescription,  $productManufactureDate,
    $productExpireDate, $costPrice, 
    $sellingPrice, $profit,
    $totalStock,
    0,
    $totalStock,
    0);

    $productData = new ProductData($product);
    $productData->saveProduct();
    header("Location: ../../?id=" . $id);
    }

}



?>