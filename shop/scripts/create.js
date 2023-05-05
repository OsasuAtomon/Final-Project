function createUser(){
    location.href = "create_account.php";
}

function loginUser(){
    history.back();
}










function showBox(){
    var banner = document.getElementById("banner-box");
    var h1 = banner.children[0];
    var button = banner.children[1].children[0];
    banner.style.marginLeft ='0';
    h1.style.color='rgba(0,0,0,1)';
    button.style.color = 'rgba(255,255,255,1)';
    button.style.backgroundcolor= 'rgba(0,0,0,1)';
}

function getCharacter(username){
    return username.charAt(0).toUpperCase();
}

function profile(username){
    document.getElementById('user_name').innerHTML = getCharacter(username);
}

function home(id){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"index.php?id="+id;
}

function displayBanner(username){
    document.getElementById('user_name').innerHTML = getCharacter(username);
    setTimeout(showBox(), 500);
}

function viewProduct(product){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"product.php?id="+product;
}

function makePayment(userId){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"cashout.php?id="+userId;
}

function addProduct(id){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"addproduct.php?id="+id;
}

function loginUser(){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"login.php";
}

function seeMore(category){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"seemore.php?name="+category;
}



function seeUpdate(update){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"check.php?name="+update;
}