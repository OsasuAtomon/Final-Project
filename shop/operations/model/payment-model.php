<?php 
class paymentModel{
    public $username;
    public $id;

    function __construct($id, $username )
    {
        $this->username= $username;
        $this->id = $id;

    }

    function getProductName($product_id){
        include('./config/connect.php');
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $pdoConnect->prepare($sql);
        $statement ->execute(
            array($product_id)
        );
        $product_name = "";
        while($row = $statement->fetch()){
            $product_name = $row["product_name"];
        }
        return $product_name;
    }

    function getProducts(){
        $tableName = $this->username."_cart";
        $products = array();
        include('./config/connect.php');
        $sql = "SELECT * FROM $tableName";
        $statement = $pdoConnect->query($sql);
        while($row = $statement->fetch()){
            $product = new paymentObject(
                $this->getProductName($row['product_id']),
                $row['qty'],
                $row['price'],
                (intval($row['price']) * intval($row['qty']))
            );
            array_push($products, $product);
               
            
        }
        return $products;
    }
}

class paymentObject{
    public $productName;
    public $quantity;
    public $pricePerProduct;
    public $totalPrice;

    function __construct($productName, $quantity, $pricePerProduct, $totalPrice)
    {
        $this->productName = $productName;
        $this->quantity =  $quantity;
        $this->pricePerProduct = $pricePerProduct;
        $this->totalPrice = $totalPrice;
        
    }
}
?>