<?php
/*echo($_GET['id']);
$id = 'undefined';
if($_GET['id'] !== 'undefined'){
   $id = $_GET['id'];
}*/
 //include_once('./head.php');
 include('./operations/model/display_picture.php');
 //require_once('./product_desc.php');
/*$user = null; 
$data_id = null;
if(isset($_GET['id'])){
    $data_id = $_GET['id'];
    $userModel = new UserModel($data_id);
    $user = $userModel->getUser();
}*/
$category = $_GET['category'];
$displayPicture = new DisplayPictures();
$product = $displayPicture->getPicture($category);
$username = $_GET['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--<link rel="stylesheet" href="./styles/product.css">-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="./scripts/product.js"></script>
    <script src="./scripts/index.js"></script>
</head>
<style>

#title{
    height: 50px;
    margin-top: 10px;
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
a{
    outline: none;
    text-decoration: none;
    font-weight: 200;
}
#title:hover{
    transition: ease-in-out 1000ms;
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

.form1{
        background-color: rgba(213, 184, 236, 0.822);
        box-shadow: -1px -1px 8px 10px rgba(213, 184, 236, 0.822);
}

body{
    background-image: url("./background/p9.jfif");

}

.addbutton{
    border-radius: 10px;
    background-color: #000022;
    color:white;
    margin-left: 5px;
    cursor: pointer;
    border: 4px solid rgb(11,11,11);
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

#main{
    width: 100%;
    height: 100%;
    margin-top: 20px;
}

#product_info{
    display: flex;
    flex-direction: row;

}

#display{
    width: 600px;
    height: 500px;
     border: 4px solid #b65fcf;
     border-radius: 20px;
}

#info{
    margin-left: 20px;
    width: 600px;
    height: 500px;
}
#info h1:nth-child(1){
    font-size: 30px;
    color: #000022;
}
#info h1:nth-child(3){
    font-size: 16px;
    color: #000022;
}

#info h1:nth-child(4){
    font-size: 20px;
    color: rgb(224,72,72);
}

#info #product_score{
    font-size: 19px;
    color: rgb(224,72,72);
}
#info #qty{
    width: 40px;
    height: 25px;
    border: 2px solid rgb(10,10,10);
    justify-content: center;
    align-items: center;
    color: rgb(209, 51, 51);
}

/*#info button{
    width: 160px;
    height: 40px;
    border: 2px solid rgb(10,10,10);
    text-align: center;
    color: white;
    background-color: rgb(10,10,10);
    justify-content: center;
    align-items: center;
    cursor: pointer;
}*/

#product_category{
    font-size: 15px;
    margin-top: 30px;
    color: #000022;
}
#product_desc{
    font-size: 20px;
    color: rgb(224,72,72);


}
#product_desc_title{
    font-size: 30px;
    color: rgb(228, 80, 80);
}
#product_info{
    display: flex;
    flex-direction: row;

}
/*.product_desc{
    margin-top: 500px;
    margin-right: 2900px;
}*/

.segments{
    display: flex;
    flex-direction: row;
}

.product{
    width:1000px;
    height: 1000px;
    border: 4px solid #b65fcf;
     border-radius: 20px;
    background-color: rgba(213, 184, 236, 0.822);
    margin-left: 14%;
}

#addbtn{
    margin-bottom: 8px;
    background-color: #ffc107 ;
    cursor: pointer;
    color: #000;
    border-color: #ffc107;
    width: 160px;
    height: 40px;
    text-align: center;
    color: white;
    justify-content: center;
    align-items: center;
}
#addbtn:hover{
    color: #000;
    background-color: #ffca2c;
    border-color: #ffc720;
} 
#addbtn:focus{
    box-shadow: rgb(217,164,6);
}
#addbtn:active{
    color: #000;
    background-color: #ffcd39;
    border-color: #ffc720;
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}

#addbtn:disabled{
    color: #000;
    background-color: #ffc107;
    border-color: #ffc107;
}

.catlab{
    font-size: 20px;
    color: red;
}

#backbtn{
    width: 100px;
    height: 50px;
    cursor: pointer;
    color: #000022;
    background-color: #b65fcf;
    border-radius: 20px;
}
#backbtn:hover{
    background-color: #b65fdf;
  
}

.cart{
    margin-left: 50px;
    /*border: 1px solid black;
    background-color: white;
    height: 50px;
    width: 57px;
    align-items: center;
    justify-content: center;*/

    border-radius: 25px;
    display: flex;
    cursor: pointer;

}
.counter-container{
    border: 1px solid #ffffff20;
    border-radius: 16px;
    width: 3.3rem;
    height: 3.3rem;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    left: .3rem;
}

.counter-container i{
    width:3rem;
    left: .3rem;
}
.counter-container span{
    user-select: none;
    position:absolute;
    background-color: #ff4754;
    height: 1.3rem;
    width:1.3rem;
    border-radius: 50%;
    font-size: .8rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    top: .2rem;
    right: .7rem;
}
.counter-container span:not(.animated-counter){
    display:none;

}
.counter-container span .animated-counter{
    animation: count .4s ease-in-out;
}
@keyframes count{
    from{
        top: .2rem;
        right: -1.8rem;
        transform: rotate(120deg);
    }
    25%{
        top: -.2rem;
        right: -1.2rem;
        transform: rotate(80deg);
    }
    50%{
        top: -.4rem;
        right: -.6rem;
        transform: rotate(60deg);
    }
    75%{
        top: -.4rem;
        right: 0rem;
        transform: rotate(30deg);
    }
    to{
        top: .2rem;
        right: .3rem;
        transform: rotate(0deg);
    }
}
</style>
<body >
    <?php echo($username);?>
    <div id="main">
        

        <div class="bod" >
                                    <div class="cart" >
                                        <div class="counter-container" >
                                            <span id="counter" >1</span>
                                            <i class="fa fa-shopping-cart">Cart</i>
                                            
                                        </div>
                                        <button id="addcart" onclick="addcart()" >Add To Cart</button>
                                    </div>
            
       
                            
       
                                <div class="product">
                                    <button onclick="backbtn()" id="backbtn"><-BACK</button>
                                    
                                    
                                <div id="product_info"> 
                                    
                                 <img id="display" src="<?php echo($product->product_image); ?>">
                                    <div id="info">
                                        <h1 id="product_name"><?php echo($product->product_name); ?></h1>
                                        <h1 id="product_score"><?php echo($product->product_score." Likes"); ?></h1>
                                        <h1 id="product_price"><?php echo("$" . $product->selling_price.".00"); ?></h1>
                                        <h1 id="product_text"><?php echo($product->product_description); ?></h1>
                                        <form action="./operations/request/add_to_cart.php" method="POST" onsubmit="addToCart(event, <?php echo($productId); ?>, '<?php echo($username) ?>', <?php echo($selling_price) ?>)">
                                            <input type="number" value="1" step="1" id="qty" name="quantity">
                                            <input  type="hidden" value="<?php echo($username) ?>" name="user"> 
                                            <input  type="hidden" value="<?php echo($product->selling_price) ?>" name="price"> 
                                            <input  type="hidden" value="<?php echo($productId) ?>" name="product"> 
                                            <button  id="addbtn">Add to Cart</button>                                   
                                        </form>
                                        <h2>Category:   <?php echo($product->category);?> </h2>  <h3 id="category"><br> Tag: Shoe <br> Share this post</h3> 
                                    </div>
                                
                                </div>
                                <div class="product_desc">
                                <center><h1 id="product_desc_title">Description</h1></center>
                                <h1 id="product_desc">
                                <?php echo($product->product_description); ?>
                                </h1>
                                </div>
                                </div>
                                
                                </div>
                                </div>
    </div>

        
    </div>
   
    
</body>
</html>