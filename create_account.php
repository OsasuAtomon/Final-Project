<?php
    $message = "";
    if(isset($_GET['message'])){
        $message = $_GET['message'];
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="./styles/addproduct.css"/>
        <script src="./scripts/create.js"></script>
    </head>
    <style>
            body{
    background-color: rgb(220,220,220);
}

#main{
    width: 100%;
    height: 100%;
    display:flex;
    justify-content: center;
}

#price_info{
    width: 400px;
    min-height: 200px;
    background-color: rgb(255,255,255);
    display: flex;
    flex-direction: column;
    align-items: center;
}

input{
    margin-top: 10px;
    width: 380px;
    min-height: 67px;
    font-size: 20px; 
}

textarea{
    margin-top: 10px;
    width: 380px;
    min-height: 210px;
    font-size: 20px; 
}

.price div{
    display: flex;
    flex-direction: row;
}

.price div h1{
    font-size: 20px;
}

.price div h1:nth-child(2){
    font-size: 20px;
    margin-left: 250px;
}

#price_info button{
    width: 330px;
    min-height: 60px;
    background-color: rgb(10,10,10);
    color: rgb(255,255,255);
    font-size: 20px;
}


#text_info{
    font-size: 20px;
}
    
    
    
    </style>
    <body>
        <div id="main">
            <div>
                <h1 id="text_info">
                    CREATE A NEW ACCOUNT
                </h1>
                
                <div id="price_info">
                <form action="./operations/request/sign_up_request.php" method="post">    
                    <input name="firstname" type="text" placeholder="First Name">
                    <input name="lastname" type="text" placeholder="Last Name">
                    <input name="date" type="date" placeholder="Date of Birth">
                    <input name="username" type="text" placeholder="Username">
                    <input name="email" type="email" placeholder="Email">
                    <input name="phone" type="phone" placeholder="Phone Number">
                    <input name="password" type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm Password">
                    <select name="gender">
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                    <button type="submit" name="submit">CREATE ACCOUNT</button>
                </form>
                    <button onclick="loginUser()">GO TO LOGIN</button>
                    <h1 style="color: red;"><?php echo ($message);?></h1>
                </div>
                
            </div>
        </div>
    </body>
</html>