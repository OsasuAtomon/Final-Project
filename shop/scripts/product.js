function addcart(){
let count = 0;

const counter = document.getElementById('.counter');
document.getElementById('.addcart').addEventListener('click', event =>{
    const cl = counter.classList;
    const c = 'animated-counter';
    count++;

    counter.innerText = count;
    cl.remove(c, cl.contains(c));
    setTimeout(() =>
    counter.classList.add('animated-counter')
    ,1)
})
}

function homePage(){
    var navigation = window.location.href.split('?');
    location.href = "http://localhost/newphp/shop/";
    
}


function addToCart(event, product, username, price){
    var navigation = window.location.href.split('?');
    var quantity = document.getElementById('qty').Value;
    
    if(username === 'undefined'){
        event.preventDefualt();
        location.href = navigation[0].split('/')[0]+"http://localhost/newphp/shop/login.php";
        
    }else{
        location.href = navigation[0]+"/operations/request/add_to_cart.php?product="+product +"&user="+user+"&price="+price+"&quantity="+quantity;
    }
}

/*function viewProduct(product, username){
    var navigation = window.location.href.split('?');
     location.href = navigation.split('/')[0]+"product.php?id="+product +"&username="+username;
 
}*/


function backbtn(){
    let btnBack = document.querySelector('button');

    btnBack.addEventListener('click', () =>{
        window.history.back();
    })
}