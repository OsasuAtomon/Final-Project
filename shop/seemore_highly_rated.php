<?php
    require_once('./product_desc.php');
    //$name = $_GET['name'];
    //require_once('./product_desc.php');
    include_once('./user.php');


  //include('./operations/model/user_model.php');
    include('./operations/model/display_product.php');
    if(isset($_GET['id'])){
        $data_id = $_GET['id'];
        $userModel = new UserModel($data_id);
        $user = $userModel->getUser();
    }

    $displayProduct = new DisplayProducts();
    $products = $displayProduct->getAllProducts();
    $length =0 ;
    $start=0;
        $end=0;

    if(count($products) > 4){
        $length = count($products)/4;
        $end = 4;
    }else{
        $length = count($products);
        $end = count($products);
    }
?>
<html>
<head>
        <link rel="stylesheet" href="./styles/index.css"/>
        <script src="./scripts/index.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        

</head>
<body onload="displayBanner('<?php  if($user == null){echo('New');} else{echo($user->username);} ?>') ">
   <!--<?php echo($name);?>--> 

        <center>
        <div id="title">
                <div><a href="http://localhost/newphp/shop/?id="+id> <h1 class="head"> SHOP-LEFT</h1> </a></div>
                <div id="search">
                    <input type="text" placeholder="search for a product">
                </div>
                <button onclick="addProduct(<?php echo($data_id); ?>)" class="addbutton">Add product</button>
                <!--<div onclick="loginUser()" id="profile"><h1 id="user_name"></h1></div>-->
                
                <div onclick="profile()" id="profile"> <a href="http://localhost/newphp/shop/login.php"> <h1 id="user_name"></h1> </a> </div>
        </div>
        </center>

   <h1 class="head-text">Highly-Rated</h1>
        <div id="recommended">
                            <?php
                                for($i = 0; $i < $length; $i++) {
                                ?>
                                <div class="segments">
  
                                <?php for($j = $start; $j < $end; $j++){
                                ?>
          <div class="product" onclick="productPage(<?php echo($products[$j]->id); ?>)">
                                <form action="index.php" method="POST">
                             <div class="class-shadow">
                                <div>
                                    <img src="<?php echo($products[$j]->product_image); ?>"  id="img1">
                                </div>
                                <div class="card-body">
                                    <center><h5 class="card-title"><?php echo($products[$j]->product_name); ?></h5></center>
                                    <center>
                                        <h6 class="">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </h6>
                                    </center>
                                   <div class="card-text">
                                   <p >
                                   <?php echo($products[$j]->product_description); ?>
                                    </p>
                                   </div>
                                    <center>
                                    <div class="price">
                                    <h5>
                                        <small><s class="text-secondary"><?php echo("$".$products[$j]->selling_price); ?></s></small>
                                        <!--<span class=""><?php //echo("$".$products[$j]->discount_price); ?></span>-->
                                    </h5>
                                    </div>

                                    <button type="submit" name="add" id="addbtn">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                                    </center>

                                </div>
                            </div>
                    </form>

                                
                                <?php
                                } 
                                $start+=4;
                                $end+=4;
                                ?>
                                </div>-->
                            <?php }?>
            </div>





        </div>
           
        
          
</body>

<style>
                *{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
body {
  background-image: url("./background/p9.jfif");

}
a{
    outline: none;
    text-decoration: none;
    font-weight: 200;
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



.nav{
    width:200px;
    height: 70px;
    background-color: rgb(230, 230, 230);
    border-radius: 10px;
    margin-top: 10px;
    display: flex;
    align-items: center;
    cursor: pointer;

}
.nav:hover{
    background-color: #b65fcf;
    color: #fff;
}

/*.nav h1{
    font-size: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: bolder;
    font-style: italic;
    margin-top: 20px;
    margin-left: 40px;
}*/

#product_container{
    margin-left: 50px;
}



#product_title{
    top: 0;
}

#product_title h1:nth-child(1){
    font-size: 40px;
    font-style: italic;
}
#product_title h1:nth-child(2){
    font-size: 20px;
    font-style: italic;
    margin-bottom: 40px;
}

#sort{
    display: flex;
    flex-direction: row;
    margin-left: 40px;
}

.sort_product{
    width: 130px;
    height: 50px;
    border:1px solid rgb(70, 70, 70);
    border-radius: 10px;
    margin-left: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.sort_product:hover{
   background-color: rgb(10, 10, 10);
   color: white;
}

.nav:hover{
    background-color:#b65fcf;
    color: white;
}

.sort1{
    font-size: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: bolder;
    font-style: italic;
}

.product{
    width: 290px;
    height:410px;
    /*background-color: rgb(210, 210, 210);*/
    background-color: rgba(213, 184, 236, 0.822);
    margin-top: 20px;
    border-radius: 20px;
    margin-left: 20px;
    padding: 20px;
    color: black;
    box-shadow: -1px -1px 10px 5px #d1caca;
   /* border: 3px solid ;*/
     border: 4px solid #b65fcf;
     display: flex;
     flex-direction: row;
    
}


#products h1{
    margin-top: 70px;
    font-size: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.product:hover{
   background-color: rgba(213, 184, 236, 0.822);
}

#products h1{
    margin-top: 110px;
    font-size: 28px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}


#products h1:nth-child(1){
    margin-top: 70px;
    font-size: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
#highly_rated{
    display: flex;
    flex-direction: row;
    align-items: center;
    cursor: pointer;
}

#most_bought{
    display: flex;
    flex-direction: row;
    align-items: center;
    cursor: pointer;
}

#recommended{
    display: flex;
    flex-direction: row;
    align-items: center;
    cursor: pointer;
}

.segments{
    display: flex;
    flex-direction: row;
    cursor: pointer;
}

#floating_button{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color:lightblue;
    position: fixed;
    top: 80%;
    left: 88%;
    font-size: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    cursor: pointer;
}

#floating_button:hover{
    border: 4px solid rgb(100,100,100);
}

.next{
    width: 100px;
    height: 50px;
    border-radius: 10px;
    background-color: rgb(0,0,40);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    margin-left: 20px;
    cursor: pointer;
}

.next:hover{
   text-decoration: underline red;
}

#p1{
    color: black;
    box-shadow: 5px 9px 10px 5px #d1caca;
    border: 3px solid white;
    width: 180px;
    height:350px;
    
}



#img1{
    width: 100%;
    height: 160px;
    background-color: lightblue;
    background: radial-gradient(white 30%, lightblue 70%) ;
    border-radius: 20px;
}

.fa-star, .fa-star-half{
    color:  #F79C34;
    padding: 2% 0;

}




.class-shadow{
    display: flex;
    flex-direction: column;
}

.card-text{
    font-size: 13px;
    font-weight: 200;
}

.price{
    margin-bottom: 5px;
}

#addbtn{
    margin-bottom: 8px;
    background-color: #ffc107 ;

    color: #000;
    border-color: #ffc107;
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
        
        
</style>
</html>