<?php
 
$user = null; 
$data_id = null;
include('./operations/model/user_model.php');
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
$count_=0;

if(count($products) > 4){
    $length = ceil(count($products)/4);
    $end = 4;
}else{
    $length = 1;
    $end = count($products);
}
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/index.css">
    <script src="./scripts/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>

<style>

    *{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

#update_banner{
    margin-top: 15px;
    background-color: #555;
    width: 1100px;
    height: 280px;
    border-radius: 40px;
    box-shadow: -1px -1px 8px 10px rgba(213, 184, 236, 0.822);
}



#title{
    margin-top: 10px;
    border-radius: 40px;
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    box-shadow: -1px -1px 8px 10px rgba(213, 184, 236, 0.822);
    background-color: #555;
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

#banner{
    width:900px ;
    height:280px ;
    display: flex;
    justify-content: center;
    align-items: center;
}

#banner-box{
    margin-left: 500px;
    transition: 1500ms;
    
}

#banner div h1{
    text-align: center;
    color: rgba(0,0,0,0.4);
    transition: 1500ms;
}

#banner div button{
    width: 150px;
    height: 50px;
    color: rgba(255,255,255,0.4);
    border-radius: 10px;
    background-color: rgba(0,0,40,0.4);
    transition: 1500ms;
    border: none;
    cursor: pointer;
}
#banner div button:hover{
    background-color: #000022;

}
#bottom_section{
    display: flex;
    flex-direction: row;
}

#fixed_nav{
    position: sticky;
    top: 10px;
    
}

#home{
    width:200px;
    height: 50px;
    background-color: rgb(230, 230, 230);
    border-radius: 10px;
    margin-top: 35px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 30px thin black;

}

/*#home i{
    color: white;
    background-color: black;
    height: 20px;
    width: 20px;
    margin-left: 10px;
    justify-content: center;
    align-items: center;
}*/




#home h1{
    font-size: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: bolder;
    font-style: italic;
    margin-top: 20px;
    margin-left: 40px;
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
    border: 3px solid black;

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
    color: white;
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
    border:3px solid black;
    border-radius: 10px;
    margin-left: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    color: black;
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

/*.product{
    width: 180px;
    height:350px;
    /*background-color: rgb(210, 210, 210);
    background-color: rgba(213, 184, 236, 0.822);
    margin-top: 20px;
    border-radius: 20px;
    margin-left: 20px;
    border:3px solid black ;
}*/

.product{
    
    width: 290px;
    height:410px;
    background-color: rgba(213, 184, 236, 0.822);
    margin-top: 20px;
    border-radius: 20px;
    margin-left: 20px;
    padding: 1px;
    color: black;
    box-shadow: -1px -1px 10px 5px #d1caca;
     border: 4px solid #555;
    
}
#products{
    
    display: flex;
     flex-direction: row;
}

#products h1{
    margin-top: 70px;
    font-size: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.product:hover{
    border: 4px solid #000022;
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

.next a{
    color: white;
    outline: none;
    text-decoration: none;
}


.addbutton{
    border-radius: 10px;
    background-color: #000022;
    color:white;
    margin-left: 5px;
    cursor: pointer;
    border: 4px solid rgb(11,11,11);
}



.scrollbtn {
    height: 30px;
    width: 35px;
  display: none; 
  position: fixed; 
  bottom: 12px; 
  z-index: 99; 
  border: none; 
  outline: none; 
  background-color: #000022;
  cursor: pointer; 
  padding: 15px; 
  border-radius: 10px; 
  top: 70%;
    left: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    cursor: pointer;
    scroll-behavior: smooth;
}

.scrollbtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}



.product_name{
    color:red;
    position: absolute;
    font-size: 20px;
    margin-left: 40%;
    /*margin-top: 50%;
    margin-bottom: 10px;*/
}

.product_image{
    width:290px;
    height: 200px;
    background-color: #000022;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

.product_description{
    font-size: 14px;
    margin-top: 3%;
    margin-left: 10%;
    color:#000022;

}

.product_price{
    font-size: 20px;
    margin-top: 2px;
    margin-left: 10px;
}

.price{
    display: flex;
    flex-direction: row;
    margin-top: 2px;
    margin-left: 25%;
}

/* footer*/
.footer{
    background: #555;
    color: #d3d3d3 ;
    height:250px;
    position: relative;
}
.footer-bottom{
    background: rgba(120, 85, 148, 0.822) ;
    color: #faf1f1;
    height: 19px;
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 0px;
    left: 0px;
    padding-top: 20px;
}
.footer-content{
    display: flex;
    flex-direction: row;
}
.about{
    display: flex;
    flex-direction: column;
}
.contact-form{
    display: flex;
    flex-direction: column;
}
.info{
    display: flex;
    flex-direction: row;
}
.email{
    margin-left: 4px;
}
.text{
    height: 60px;
}


</style>

<body onload="displayBanner('<?php  if($user == null){echo('New');} else{echo($user->username);} ?>') ">

    <div>
        <div id="main">
            <div id="title">
                <h1 class="head">SHOP-LEFT</h1>
                <div id="search">
                    <input type="text" placeholder="search for a product">
                </div>
                <button onclick="addProduct(<?php echo($data_id); ?>)" class="addbutton">Add product</button>
                    <div onclick="loginUser()" id="profile"><h1 id="user_name"></h1></div>
            </div>
            <div id="update_banner">
                <div id="banner">
                   <div id="banner-box">
                   <h1>
                         25% off for £50 basket PLUS,<br>
                         GET FREE NEXT-DAY DELIVERY
                    </h1>
                    <center><button onclick="seeUpdate('Discount')">Check</button></center>
                   </div>
                </div>
            </div>
            <div id="bottom_section" >
                <div id="fixed_nav">
                    <div id="home">
                        <h1>HOME</h1>
                        
                    </div>
                    
                    <div class="nav">
                        <h1>Recents</h1>
                    </div>
                    <button class="nav" onclick="cat()"><h1>SORT</h1></button>
                    <div class="cat">
                        <div class="nav">
                            <h1>Clothes</h1>
                        </div>
                        <div class="nav">
                            <h1>Electronics</h1>
                        </div>
                        <div class="nav">
                            <h1>Shoes</h1>
                        </div>
                        <div class="nav">
                            <h1>Anime</h1>
                        </div>
                        <div class="nav">
                            <h1>Movies $ Pictures</h1>
                        </div>
                        <div class="nav">
                            <h1>Accessories</h1>
                        </div>
                    </div>
                </div>
                <div id="product_container">
                    <div id="product_title">
                        <h1>Recent</h1>
                        <h1>Recent category</h1>
                        <div id="sort">
                            <div class="sort_product">
                                <h2 class="sort1">Prize</h2>
                            </div>
                            <div class="sort_product">
                                <h2 class="sort1">Size</h2>
                            </div>
                            <div class="sort_product">
                                <h2 class="sort1">Color</h2>
                            </div>
                            <div class="sort_product">
                                <h2 class="sort1">Rating</h2>
                            </div>
                        </div>
                        <input  type="checkbox">
                        <div id="products">
                            <h1>Highly-Rated</h1>
                            <!--<div id="highly_rated">-->

                           <?php
                                for($i = 0; $i < $length; $i++) {
                                ?>
                                <div class="segments">
  
                                <?php for($j = $start; $j < $end; $j++){
                                ?>
                                <div class="product" onclick="viewProduct(<?php echo($products[$j]->id);?>, '<?php  if($user === null){echo('Undefined');} else{ echo($user->username);} ?>' )">

                                <img src="<?php echo($products[$j]->product_image); ?>" alt="" class="product_image">
                                <h2>NAME:</h2> <h2 class="product_name"><?php echo($products[$j]->product_name); ?></h2>
                                <h2 class="category"><?php echo($products[$j]->category); ?></h2>
                                <h2 class="product_description"><?php echo($products[$j]->product_description); ?></h2>
                                <center class="price">
                                    <h2 class="product_price"><?php echo("$".$products[$j]->selling_price); ?></h2>

                                </center>
                                <!--<center><h2 class="total-stock"><?php // echo($products[$j]->total_stock); ?></h2></center>-->
                                </div>
                                <?php
                                $count_++;
                                } 
                                if((count($products)- $count_) >=1){
                                    $start=$end;
                                    $end+=$end;
                                }else{
                                   $start=$end;
                                   $end+=(count($products) - $count_);
                                }
                                ?>
                                </div>
                            <?php }?>
                                <!--<div onclick="viewProduct(1)" class="product"></div>
                                <div class="product"></div>
                                <div class="product"></div>
                                <div class="product"></div>
                                <div class="next">  <a href='seemore_highly_rated.php'>See More</a>
                                    
                                </div>
                            </div>
                            <h1>Most-Bought</h1>
                            <div id="most_bought">
                                <div class="product"></div>
                                <div class="product"></div>
                                <div class="product"></div>
                                <div class="product"></div>
                                <div  onclick="seeMore('Most-Bought')" class="next">
                                    See More
                                </div>
                            </div>
                            <h1>Recommended</h1>
                            <div id="recommended">
                                <div class="product"></div>
                                <div class="product"></div>
                                <div class="product"></div>
                                <div class="product"></div>
                                <div  onclick="seeMore('Recommended')" class="next">
                                    See More
                                </div>
                            </div>
                            <h1>See-All</h1>
                            <div id="others">
                                <div class="segments">
                                    <div class="product"></div>
                                    <div class="product"></div>
                                    <div class="product"></div>
                                    <div class="product"></div>
                                </div>

                            </div>-->
                        </div>
                    </div>




                </div>

            </div>
            <div onclick="makePayment(<?php echo($data_id);?>, '<?php echo($user->username);?>')" id="floating_button">
                <h1>Purchase</h1>
            </div>

            <button class="scrollbtn" onclick="scrollToTop()" >
                <i class="fas fa-arrow-up"></i>

            </button>
        </div>

    </div>

    <div class="footer">
        <div class="footer-content">
            <div class="about">
                <h6>About</h3>
                <h6>contacts us </h3>
               <h6> terms & Condition</h3>
            </div>
            <div class="footer-section links">
                <h4></h4>
            </div>
            <div class="footer-section contact-form">
                Chat with us 
               <form action="">
               <div class="info">
                    <h9>Name:</h9><input type="text" class="name">
                    <h9>Email:</h9><input type="text" class="email">
                </div>
                <input type="text" class="text">
                <button class="send">Send</button>

            </div>
               </form>
        </div>
        <div class="footer-bottom">
            &copy; Shop-Left.com | Designed by Atomon Osasu
        </div>
    </div>
</body>
</html>