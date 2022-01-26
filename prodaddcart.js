

let carts = document.querySelectorAll('.add-cart');
//let no=document.getElementById('no');

let product = [{

    name: 'Hanson Robotics Soph',
    tag: 'robo1',
    price: 800,
    inCart:0

},
{

    name: 'Eufy Robot Humanoid',
    tag: 'robo2',
    price: 500,
    inCart:0

},
{

    name: 'Pet care device',
    tag: 'robo3',
    price: 300,
    inCart:0

},
{

    name: 'Collar for Pet Doors',
    tag: 'robo4',
    price: 100,
    inCart:0

},
{

    name: 'Robot Toy',
    tag: 'robo5',
    price: 50,
    inCart:0

},
{

    name: 'RoboVac 15T',
    tag: 'robo6',
    price: 190,
    inCart:0

}
]
for(let i =0 ; i<carts.length;i++)
{
    carts[i].addEventListener('click',() =>{
        cartNumbers(product[i]);
        totalCost(product[i]);

    }
    )
}

function onLoadCartNumbers() {

    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){

        document.querySelector('.cart span').textContent = productNumbers;

    }

}

function cartNumbers(product) {

    
    let productNumbers = localStorage.getItem('cartNumbers');


    productNumbers = parseInt(productNumbers);

    if(productNumbers)

    {localStorage.setItem('cartNumbers',productNumbers+1);
    document.querySelector('.cart span').textContent = productNumbers+1;
}
     
    else
    {localStorage.setItem('cartNumbers',1);
    document.querySelector('.cart span').textContent = 1;

    }
    setItems(product);

}
function setItems(product){

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    console.log("My cartItems are", cartItems);

    if(cartItems != null)
    {   
        if(cartItems[product.tag] == undefined){
            cartItems ={
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart +=1; 
    }else{

        product.inCart =1;
        cartItems = {
           [product.tag]: product
   


    }
   
    }
   
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
 let cartCost = localStorage.getItem('totalCost');
 
 
 if(cartCost !=null){
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost",cartCost + product.price);

 }else{

    localStorage.setItem("totalCost",product.price);
 }

 
}
function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');
    console.log(cartItems);
    if(cartItems && productContainer ){
        productContainer.innerHTML = '';
            Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            
          
            <div class="product-title">
           <ion-icon name="close-circle"></ion-icon>
            
            ${item.name}
            </div>
            <div class="price">
            $${item.price} 
            </div>
            <div class="quantity">
            
            ${item.inCart}
           
   
            </div>
            <div class="total">
                ${item.inCart * item.price}

            </div>
            `
        });

        productContainer.innerHTML += `
        <div class="basketTotalContainer">
        <h4 class="basketTotalTitle">
        Cart Total Cost
        </h4>
        <h4 class="basketTotal">$${cartCost}</h4>
        `

    }
    
    
}
onLoadCartNumbers();
 // just to stop rest cart to 0 on refresh page
