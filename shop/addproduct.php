<?php
echo($_GET['id']);
$id = 'undefined';
if($_GET['id'] !== 'undefined'){
   $id = $_GET['id'];
}


$user = null; 
$data_id = null;
include('./operations/model/user_model.php');
if(isset($_GET['id'])){
    $data_id = $_GET['id'];
    $userModel = new UserModel($data_id);
    $user = $userModel->getUser();
}
 
?>

<html>
    <head>
    
        <script src="./scripts/index.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
      <script src="./scripts/addproduct.js"></script>
        <link rel="stylesheet" href="./styles/addproduct.css"/>
    </head>
    <style>
body{
    background-color:white;
}     
#title{
    height: 50px;
    margin-top: 20px;
    margin-left: 20px;
    border-radius: 40px;
    width: 1010px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    box-shadow: -1px -1px 8px 10px rgba(213, 184, 236, 0.822);
    background-color: #ff9899;
}
#title:hover{
    transition: ease-in-out 1000ms;
}
a{
    outline: none;
    text-decoration: none;
    font-weight: 200;
}
.head{
    margin-left: 8px;
    cursor: pointer;
    border-radius: 40px;
    width: 210px;
    align-items: center;
    justify-content: center;
    color:#000022;
    font-weight: 200;
}
.head:hover{
    background-color: black;
    color: white;
    transition: ease-in-out 200ms;
}

#title h1{
    font-size: 34px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    
}

#search{
    width: 380px;
    height: 35px;
    background-color: #efefef;
    display: flex;
    align-items: center;
    border-radius: 20px;
    margin-left: 100px;
}

#search input{
    width: 320px;
    height: 35px;
    border: none;
    background-color: #efefef;
    margin-left: 20px;
}

#search input:focus{
    outline: none;
}

#profile{
    width: 50px;
    height: 50px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #000022;
    margin-left: 110px;
}
#profile:hover{
    cursor: pointer;
}
#profile a{
    outline: none;
    text-decoration: none;
    font-weight: 200;
    color: #efefef;
}

.form1{
        background-color: rgba(213, 184, 236, 0.822);
        box-shadow: -1px -1px 8px 10px rgba(213, 184, 236, 0.822);
        border: 4px solid #555
}



#text_info{
    color:  #F79C34;
    font-weight: 200;
    font-size: 30px;
}

</style>
<body onload="displayBanner('<?php  if($user == null){echo('New');} else{echo($user->username);} ?>') ">
    <center>
        <div id="title">
                <div><a href="http://localhost/newphp/shop/"> <h1 class="head"> SHOP-LEFT</h1> </a></div>
                
                
                <!--<div onclick="loginUser()" id="profile"><h1 id="user_name"></h1></div>-->
                
                <div onclick="profile()" id="profile"> <a href="http://localhost/newphp/shop/login.php"> <h1 id="user_name"></h1> </a> </div>
        </div>
    </center>

        <div id="main">
           
            <div>
                <center>
                <h1 id="text_info">
                    Add Product
                </h1>
                </center>
                <form action="./operations/request/product_request.php" method="POST" enctype="multipart/form-data" class="form1">
                  <div id="price_info">
                    <input type="hidden" name="id"  value="<?php echo($id);?>">
                    <input name="product_name" type="text" placeholder="Product Name">
                    <input name="product_code" type="text" placeholder="Product Code">
                    <input name="product_image" type="file" placeholder="Product Image">
                    <select name="category" id="category" placeholder="category">
                        <option value="category">Select a category</option>
                        <option value="Clothes">Clothes</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Anime">Anime</option>
                        <option value="Movies & Pictures">Movies & Pictures</option>
                        <option value="Accessories">Accessories</option>
                    </select>
                    <textarea name="product_description" placeholder="Product Description"></textarea>                 
                    <input name="product_manufacture_date" type="date" placeholder="Product Menu Date">
                    <input name="product_expire_date" type="date" placeholder="Product Expire Date">
                    <input id="cost_price" name="cost_price" type="number" value="0" placeholder="Cost Price" onkeyup="calculateProfit()">
                    <input id="selling_price" name="selling_price" type="number" value="0" placeholder="Selling Price" onkeyup="calculateProfit()">
                    <input id="profit" name="profit" type="number" value="0" readonly placeholder="Profit">
                    <input name="total_stock" type="number" placeholder="Total Stock">
                    <button type="submit" name="add">ADD</button>
                 </div>
                </form>
            </div>
        </div>
    </body>
</html>