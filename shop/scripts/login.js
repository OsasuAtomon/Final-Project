const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href = "users.php";
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}



function createUser(){
    location.href = "create_account.php";
}

function loginUser(){
    history.back();
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



function viewProduct(product){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"product.php?id="+product;
}




function loginUser(){
    var navigation = window.location.href.split('?');
    location.href = navigation[0]+"login.php";
}

function backbtn(){
    let btnBack = document.querySelector('button');

    btnBack.addEventListener('click', () =>{
        window.history.back();
    })
}