let carts = document.querySelectorAll('.add-cart');

for(let i =0;i< carts.length;i++){
    carts[i].addEventListener('click',() =>{
       cartsNumbers();
    })

}
function onLoadCartsNumbers(){
    let productNumbers = localStorage.getItem('cartsNumbers');

    if(productNumbers){
        document.querySelector('.cartbag span').textContent = productNumbers ;
    }
}

function cartsNumbers(){
    let productNumbers = localStorage.getItem('cartsNumbers');

    productNumbers = parseInt(productNumbers);
    if(productNumbers){
        localStorage.setItem('cartsNumbers', productNumbers + 1);
        document.querySelector('.cartbag span').textContent = productNumbers +1;
    }else{
        localStorage.setItem('cartsNumbers', 1);
        document.querySelector('.cartbag span').textContent = 1;
    }
    
}
JSON.parse(localStorage.getItem("catrsNumbers"));
onLoadCartsNumbers();
if(performance.navigation.type == performance.navigation.TYPE_RELOAD){
    localStorage.removeItem('cartsNumbers');
} 