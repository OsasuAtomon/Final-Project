function addProduct(id){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"addproduct.php?id="+id;
}

function displayBanner(username){
    document.getElementById('user_name').innerHTML = getCharacter(username);
    setTimeout(showBox(), 500);
}
function getCharacter(username){
    return username.charAt(0).toUpperCase();
}

function profile(username){
    document.getElementById('user_name').innerHTML = getCharacter(username);
}


function addProduct(id){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"addproduct.php?id="+id;
}

function loginUser(){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"login.php";
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



function backbtn(){
    let btnBack = document.getElementById('backbtn');

    btnBack.addEventListener('click', () =>{
        window.history.back();
    })
}