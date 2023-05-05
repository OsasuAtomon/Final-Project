<?php
$user = null; 
$data_id = null;
include('./operations/model/user_model.php');
if(isset($_GET['id'])){
    $data_id = $_GET['id'];
    $userModel = new UserModel($data_id);
    $user = $userModel->getUser();
}
if($user == null){echo('New');
} else{
    echo($user->username);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/index.css">
    <!--<script src="./scripts/index.js"></script>
    <script src="./scripts/login.js"></script>-->
    <script src="./scripts/head.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
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

#backbtn{
    width: 100px;
    height: 50px;
    cursor: pointer;
    color: #000022;
    background-color: #b65fcf;
}



</style>
<body onload="displayBanner('<?php  if($user == null){echo('New');} else{echo($user->username);} ?>') ">
    <center>
        <div id="title">
            
        <button onclick="backbtn()" id="backbtn"><-BACK</button>
                <div> <a href="http://localhost/newphp/shop/?id="+id> <h1 class="head"> SHOP-LEFT</h1> </a></div>
                <div id="search">
                    <input type="text" placeholder="search for a product">
                </div>
                <button onclick="addProduct(<?php echo($data_id); ?>)" class="addbutton">Add product</button>
                <!--<div onclick="loginUser()" id="profile"><h1 id="user_name"></h1></div>-->
                
                <div onclick="profile(<?php echo($data_id); ?>)" id="profile" onload="displayBanner('<?php if($user == null){echo('New');} else{echo($user->username);} ?>')"> <a href="http://localhost/newphp/shop/login.php"> <h1 id="user_name"></h1> </a> </div>
        </div>
    </center>
</body>
</html>


