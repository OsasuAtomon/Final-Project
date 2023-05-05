<?php

     include_once "headstyle.php"; 

    $user = null; 
    $data_id = null;
    include('./operations/model/user_model.php');
    if(isset($_GET['id'])){
        $data_id = $_GET['id'];
        $userModel = new UserModel($data_id);
        $user = $userModel->getUser();
    }

    $message = "";
    if(isset($_GET['message'])){
        $message = $_GET['message'];
    }
    
?>
<html>
    <head>
        <!--<link rel="stylesheet" href="./styles/addproduct.css"/>-->
        <script src="./scripts/login.js"></script>
        <script src="javascript/pass-show-hide.js"></script>
    </head>
<style>

body{
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #f7f7f7;
  padding: 0 10px;
    /*background-color: rgb(220,220,220);*/
    background-image: url("./background/p9.jfif");
}
#main{

    display: flex;
    flex-direction: column;
}
#wrapper{
  background: rgba(213, 184, 236, 0.822);
  max-width: 450px;
  width: 100%;
  border-radius: 16px;
  
  box-shadow: -1px -1px 10px 5px #d1caca;
   /* border: 3px solid ;*/
     border: 4px solid #b65fcf;
 /* box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);*/
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
    width: 380px;
    min-height: 67px;
    background-color: rgb(10,10,10);
    color: rgb(255,255,255);
    font-size: 20px;
}


#text_info{
    font-size: 20px;
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
}

body{
  background-image: url("./background/p9.jfif");

}

#text_info{
    color:  #F79C34;
    font-weight: 200;
    font-size: 30px;
}
.form{
  padding: 25px 30px;
}
.form header{
  font-size: 25px;
  font-weight: 600;
  padding-bottom: 10px;
  border-bottom: 1px solid #e6e6e6;
}
.form form{
  margin: 20px 0;
}
.form form .error-text{
  color: #721c24;
  padding: 8px 10px;
  text-align: center;
  border-radius: 5px;
  background: #f8d7da;
  border: 1px solid #f5c6cb;
  margin-bottom: 10px;
  display: none;
}
.form form .name-details{
  display: flex;
}
.form .name-details .field:first-child{
  margin-right: 10px;
}
.form .name-details .field:last-child{
  margin-left: 10px;
}
.form form .field{
  display: flex;
  margin-bottom: 5px;
  flex-direction: column;
  position: relative;
}
.form form .field label{
  margin-bottom: 2px;
}

.form form .input input{
  height: 40px;
  width: 100%;
  font-size: 16px;
  padding: 0 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.form form .field input{
  outline: 3px solid;
}
.form form .image input{
  font-size: 17px;
}
.form form .button input{
  height: 45px;
  border: none;
  color: #fff;
  font-size: 17px;
  background: #333;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 13px;
}
.form form .field i{
  position: absolute;
  right: 15px;
  top: 70%;
  color: #ccc;
  cursor: pointer;
  transform: translateY(-50%);
}
.form form .field i.active::before{
  color: #333;
  content: "\f070";
}
.form .link{
  text-align: center;
  margin: 10px 0;
  font-size: 17px;
}
.form .link a{
  color: #333;
}
.form .link a:hover{
  text-decoration: underline;
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



</style>

<body  >

    <center>
        <div id="title">
        <div onclick="home(<?php echo($data_id); ?>)"><a href="http://localhost/newphp/shop/?id="+id>--> <h1 class="head"> SHOP-LEFT</h1> </a></div>
                
                
                <div onclick="loginUser()" id="profile"><h1 id="user_name"></h1></div>
                
               <!-- <div onclick="profile(<?php echo($data_id); ?>)" id="profile"> <a href="http://localhost/newphp/shop/login.php"> <h1 id="user_name"></h1> </a> </div>--> 
        </div>
    </center>
    <button onclick="backbtn()" id="backbtn"><-BACK</button>
       <center>
       <div id="main">
            <div>
                <h1 id="text_info">
                    LOGIN TO YOUR ACCOUNT
                </h1>
                <div id="wrapper">
                        
                    <section class="form login">
                        <form action="./operations/request/login_request.php" method="POST">
                            
                            <div class="error-text"></div>
                            <div class="field input">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your password" required>
                            <i class="fas fa-eye"></i>
                            </div>
                            <div class="field button">
                            <input type="submit" name="submit" value="LOGIN"><!--<button type="submit" name="submit">LOGIN</button>-->
                            </div>
                        </form>


                    </section>
                    
                    <button onclick="createUser()">CREATE ACCOUNT</button>
                    <h1 style="color: red;"><?php echo ($message);?></h1>
                </div>
            </div>
        </div>
       </center>
</body>
</html>