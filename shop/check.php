<?php
    $name = $_GET['name'];


?>
<html lang="en">
<head>
        <link rel="stylesheet" href="./styles/index.css"/>
        <script src="./scripts/index.js"></script>

 <style>
                *{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
    width: 180px;
    height:350px;
    background-color: rgb(210, 210, 210);
    margin-top: 20px;
    border-radius: 20px;
    margin-left: 20px;
}

#products h1{
    margin-top: 70px;
    font-size: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.product:hover{
    border: 4px solid #b65fcf;
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

        
        
        
</style>
</head>
<body>
    <h1><?php echo($name);?></h1>
        <div id="recommended">
        <div class="product"></div>
         <div class="product"></div>
        <div class="product"></div>
        <div class="product"></div>
          
</body>
</html>