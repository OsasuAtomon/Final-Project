<?php
class ProductData{
public $product;

    function __construct($product)
    {
        $this->product =$product;
    }

    function uploadProductImage($imageFile){
        $fileLocation = null;
        $fileName = $imageFile['name'];
        $fileType = $imageFile['type'];
        $fileTmp = $imageFile['tmp_name'];
        $fileError= $imageFile['error'];
        $fileSize =$imageFile['size'];

        $fileExt = explode('.', $fileName);
        $fileActualExtension = strtolower(end($fileExt));

        $allow = array('jpg','jpeg','png', 'mp4', 'jfif');
            if(in_array($fileActualExtension, $allow)){
                if($fileError == 0){
                    if($fileSize <= 2048000){
                        $uniqueID = uniqid('', true);
                        $fileUploadName = $uniqueID.".".$fileActualExtension;
                        $fileMove = '../../uploads/media'.basename($fileUploadName);
                        $fileLocation = './uploads/media'.basename($fileUploadName);
                        move_uploaded_file($fileTmp, $fileMove);

                    }else{
                        echo("file is too large");
                    }
                }else{
                    echo("There is an Error Uploading The file");
                };
            }else{
                echo("You cannot upload files of this type");
            }
       

    

        return $fileLocation;
    }

    function saveProduct(){
        include('../../config/connect.php');
        $productImage = $this->uploadProductImage($this->product->product_image);
        $sql = "INSERT INTO products". 
        "(product_name, product_code,".
        "product_image,category,  product_description ,product_manufacture_date,".
        "product_expire_date, cost_price, selling_price, profit, total_stock,".
        "qty_sold, qty_left, product_score) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       //$sql = "INSERT INTO products(product_name, product_code, product_image,category, product_description, product_manufacture_date, product_expire_date,
                                      // cost_price,  selling_price,  profit, total_stock, qty_sold ,qty_left, product_score) VALUeS(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdoConnect->prepare($sql); 
        $statement->execute(
            array (
                  $this->product->product_name,
                  $this->product->product_code,
                  $productImage,
                  $this->product->category,
                  $this->product->product_description,
                  $this->product->product_manufacture_date,
                  $this->product->product_expire_date,
                  $this->product->cost_price,
                  $this->product->selling_price,
                  $this->product->profit,
                  $this->product->total_stock,
                  $this->product->qty_sold,
                  $this->product->qty_left,
                  $this->product->product_score
                )
        ) ;                             
    }
}

class ProductObject{
    public $id;
    public $product_name;
    public $product_code;
    public $product_image;
    public $category;
    public $product_description;
    public $product_manufacture_date;
    public $product_expire_date;
    public $cost_price;
    public $selling_price;
    public $profit;
    public $total_stock;
    public $qty_sold;
    public $qty_left;
    public $product_score;

    function __construct($id, $product_name, $product_code, $product_image, $category, $product_description, $product_manufacture_date, $product_expire_date,
                           $cost_price, $selling_price,  $profit, $total_stock,$qty_sold ,$qty_left, $product_score)
    {
        $this->id=$id;
        $this->product_name=$product_name;
        $this->product_code=$product_code;
        $this->product_image=$product_image;
        $this->category=$category;
        $this->product_description=$product_description;
        $this->product_manufacture_date=$product_manufacture_date;
        $this->product_expire_date=$product_expire_date;
        $this->cost_price= $cost_price;
        $this->selling_price = $selling_price;
        $this->profit=  $profit;
        $this->total_stock = $total_stock;
        $this->qty_sold = $qty_sold;
        $this->qty_left = $qty_left;
        $this->product_name = $product_score;

        
    }
}

class ProductPicture{
    public $id;
    public $product_name;
    public $product_code;
    public $product_image;
    public $category;
    public $product_description;
    public $product_manufacture_date;
    public $product_expire_date;
    public $cost_price;
    public $selling_price;
    public $profit;
    public $total_stock;
    public $qty_sold;
    public $qty_left;
    public $product_score;

    function __construct($id, $product_name, $product_code, $product_image, $category, $product_description, $product_manufacture_date, $product_expire_date,
                           $cost_price, $selling_price,  $profit, $total_stock,$qty_sold ,$qty_left, $product_score)
    {
        $this->id=$id;
        $this->product_name=$product_name;
        $this->product_code=$product_code;
        $this->product_image=$product_image;
        $this->category=$category;
        $this->product_description=$product_description;
        $this->product_manufacture_date=$product_manufacture_date;
        $this->product_expire_date=$product_expire_date;
        $this->cost_price= $cost_price;
        $this->selling_price = $selling_price;
        $this->profit=  $profit;
        $this->total_stock = $total_stock;
        $this->qty_sold = $qty_sold;
        $this->qty_left = $qty_left;
        $this->product_name = $product_score;

        
    }
}

?>