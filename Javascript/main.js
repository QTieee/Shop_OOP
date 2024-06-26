//everytime page reloads, this function will be called
onLoadCartNumbers();

let carts = document.querySelectorAll('.featured__new_cart');
//adds event listener to all cart icons
for(let i=0; i<carts.length; i++){
    carts[i].addEventListener('mousedown', () => {
        cartNumbers();
       
    });

}
//for id sharing
// let submit_button = document.getElementById('submit_btn');
// submit_button.addEventListener('mousedown', id_pass());

// let add-to-cart-button = document.getElementById('add-to-cart-btn');
// add-to-cart-button.addEventListener('mousedown', id_pass());

//function that prevents cart number display to go back to zero on reload
function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    console.log("entered on load function");
    if(productNumbers) {
        document.querySelector('.cart-number').textContent = productNumbers;
        document.querySelector('.cart-number-mob').textContent = productNumbers;
        console.log("entered on load function inside if");
    }
}
//funtion to display add to cart on cart on nav
function cartNumbers() {
    console.log("entered cartNumbers");
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);


    if(productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers+1);
        document.querySelector('.cart-number').textContent = productNumbers;
        document.querySelector('.cart-number-mob').textContent = productNumbers;
        console.log("entered if");
    }
    else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart-number').textContent = 1;
        document.querySelector('.cart-number-mob').textContent = 1;
        console.log("entered else");
    }
}

//everytime page reloads, this function will be called
onLoadCartNumbers();