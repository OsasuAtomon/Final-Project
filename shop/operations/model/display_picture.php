<?php 
class DisplayPictures{
    function getPicture($category){
        include('./config/connect.php');
        //include('./product_model.php');
        include('./operations/model/product_model.php');
        $picture = null;
        $sql = "SELECT * FROM products WHERE category = picture";
        $statement = $pdoConnect->prepare($sql);
        $statement->execute(array($category));

        while($row = $statement->fetch()){
            $picture = new ProductPicture(
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


        return $picture;

    }
    




    function getAllPictures(){
        include('./config/connect.php');
        //include('./product_model.php');
        include('./operations/model/product_model.php');
        $products = array();
        $sql = "SELECT * FROM products";
        $statement = $pdoConnect->query($sql);

        while($row = $statement->fetch()){
            $picture = new ProductPicture(
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
            array_push( $pictures, $picture);
        }


        return $pictures;

    }
}

?>