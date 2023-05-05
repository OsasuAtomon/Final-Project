<?php 
class DisplayProducts{
    function getProduct($id){
        include('./config/connect.php');
        //include('./product_model.php');
        include('./operations/model/product_model.php');
        $product = null;
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $pdoConnect->prepare($sql);
        $statement->execute(array($id));

        while($row = $statement->fetch()){
            $product = new ProductObject(
                $row['id'],
                $row['product_name'],
                $row['product_code'],
                $row['product_image'],
                $row['category'],
                $row['product_description'],
                $row['product_manufacture_date'],
                $row['product_expire_date'],
                $row['cost_price'],
                $row['selling_price'],
                $row['profit'],
                $row['total_stock'],
                $row['qty_sold'],
                $row['qty_left'],
                $row['product_score'],

            );
        }


        return $product;

    }
    




    function getAllProducts(){
        include('./config/connect.php');
        //include('./product_model.php');
        include('./operations/model/product_model.php');
        $products = array();
        $sql = "SELECT * FROM products";
        $statement = $pdoConnect->query($sql);

        while($row = $statement->fetch()){
            $product = new ProductObject(
                $row['id'],
                $row['product_name'],
                $row['product_code'],
                $row['product_image'],
                $row['category'],
                $row['product_description'],
                $row['product_manufacture_date'],
                $row['product_expire_date'],
                $row['cost_price'],
                $row['selling_price'],
                $row['profit'],
                $row['total_stock'],
                $row['qty_sold'],
                $row['qty_left'],
                $row['product_score'],

            );
            array_push( $products, $product);
        }


        return $products;

    }
}

?>