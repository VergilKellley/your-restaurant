class CartItem{
    constructor(name, desc, img, price){
        this.name = name
        this.desc = desc
        this.img = img
        this.price = price
        this.quantity = 1
   }
}

class LocalCart{
    static key = "cartItems"

    static getLocalCartItems(){
        let cartMap = new Map()
     const cart = localStorage.getItem(LocalCart.key)   
     if(cart===null || cart.length===0)  return cartMap
        return new Map(Object.entries(JSON.parse(cart)))
    }

    static addItemToLocalCart(id, item){
        let cart = LocalCart.getLocalCartItems()
        if(cart.has(id)){
            let mapItem = cart.get(id)
            mapItem.quantity +=1
            cart.set(id, mapItem)
        }
        else
        cart.set(id, item)
       localStorage.setItem(LocalCart.key,  JSON.stringify(Object.fromEntries(cart)))
       updateCartUI()
        
    }

    static removeItemFromCart(id){
    let cart = LocalCart.getLocalCartItems()
    if(cart.has(id)){
        let mapItem = cart.get(id)
        if(mapItem.quantity>1)
       {
        mapItem.quantity -=1
        cart.set(id, mapItem)
       }
       else
       cart.delete(id)
    } 
    if (cart.length===0)
    localStorage.clear()
    else
    localStorage.setItem(LocalCart.key,  JSON.stringify(Object.fromEntries(cart)))
       updateCartUI()
    }
}


const cartIcon = document.querySelector('.fa-cart-arrow-down')
const wholeCartWindow = document.querySelector('.whole-cart-window')
wholeCartWindow.inWindow = 0
const addToCartBtns = document.querySelectorAll('.add-to-cart-btn')

for (let i = 0; i < addToCartBtns.length; i++) {
    const selectedMenuItems = addToCartBtns[i];
    // const MenuItems = selectedMenuItems.textContent;
    console.log(selectedMenuItems);
}

// const menuArray = Array.from(addToCartBtns);
// console.log("my array:", menuArray)

addToCartBtns.forEach( (btn)=>{

    btn.addEventListener('click', addItemFunction)
}  )

// const menuItems = document.querySelectorAll('.menu-items')

// menuItems.forEach( e => {
//     console.log(e)
// })

// const elements = document.querySelectorAll('data-id');

// for (const element of elements) {
//   const dataId = element.dataset.id;
//   // Do something with the dataId
//   console.log("new data ids: ", dataId); 
// }


var el;
// var prefix = 'elementId';
for(var i = 0; el = document.getElementById(menus + i); i++) {
    console.log("the el:", el)
//   if(condition) {
//     el.style.display = '';
//   }
}

function addItemFunction(e){
    const id = e.target.parentElement.parentElement.parentElement.getAttribute("data-id")
    console.log("my id: ", id)
    const img = e.target.parentElement.parentElement.previousElementSibling.src
    const name = e.target.parentElement.previousElementSibling.textContent
    const desc = e.target.parentElement.children[0].textContent
    let price = e.target.parentElement.children[1].textContent
    price = price.replace("Price: " , '')
    // price = price.replace("Price: $", '')
    const item = new CartItem(name, desc, img, price)
    LocalCart.addItemToLocalCart(id, item)
 console.log("the price is: ", price)
 console.log("the menu item is: ", name)
 console.log("the menu item description is: ", desc)
 console.log("the menu item image: ", img)
}


cartIcon.addEventListener('mouseover', ()=>{
if(wholeCartWindow.classList.contains('hide'))
wholeCartWindow.classList.remove('hide')
})

cartIcon.addEventListener('mouseleave', ()=>{
    // if(wholeCartWindow.classList.contains('hide'))
    setTimeout( () =>{
        if(wholeCartWindow.inWindow===0){
            wholeCartWindow.classList.add('hide')
        }
    } ,500 )
    
    })

 wholeCartWindow.addEventListener('mouseover', ()=>{
     wholeCartWindow.inWindow=1
 })  
 
 wholeCartWindow.addEventListener('mouseleave', ()=>{
    wholeCartWindow.inWindow=0
    wholeCartWindow.classList.add('hide')
})  
 

function updateCartUI(){
    const cartWrapper = document.querySelector('.cart-wrapper')
    console.log("cart wrapper: ", cartWrapper)
    cartWrapper.innerHTML=""
    const items = LocalCart.getLocalCartItems()
    if(items === null) return
    let count = 0
    let total = 0

    // console.log("new 3 price: ", price);
    for(const [key, value] of items.entries()){
        const cartItem = document.createElement('div')
        cartItem.classList.add('cart-item')
        console.log("my value: ", value)
        let price = value.price*value.quantity        
        price = Math.round(price*100)/100
        count+=1
        total += price
        total = Math.round(total*100)/100
        

        ////// start send cart items to stripe checkout page

        let itemName = value.name;
        let itemDesc = value.desc;
        let itemQuantity = value.quantity;
        let itemPrice = price;

        let purchasedItems = {
            "itemName": itemName,
            "itemDesc": itemDesc,
            "itemQuantity": itemQuantity,
            "price": price
        }

        let jsonpurchasedItems = JSON.stringify(purchasedItems);
        fetch('/your-restaurant/test_fetch.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            "body": JSON.stringify(purchasedItems)
        }).then(function(response){
            return response.json();
        }).then(function(data){
            JSON.stringify(data)

        }).catch (function (err) {
            console.log(err);
        });

        // <h3 style="color:black">${value.name}</h3>
        // <p style="color:black">${value.desc}
        // <span style="color:black" class="quantity">Quantity: ${value.quantity}</span>
        // <span style="color:black" class="price">Price: $ ${price  = ((price * 100) / 100).toFixed(2)}</span>
        // </p>
        cartItem.innerHTML =
        `
        <img src="${value.img}"> 
                       <div class="details">
                            <input type='text' name='name[]' value='${value.name}'>
                            <textarea style='overflow-y:scroll; background-color:#d3d3d3; height:100px;padding:5px; border:1px solid black' name="desc[]" id="desc">${value.desc}</textarea>
                            
                            <input style="color:green" class="quantity" type='number' name='quantity[]' value='${value.quantity}'>
                            
                            <input style='color:red' class='price' type='text' name='price[]' step="0.01" value='${price  = ((price * 100) / 100).toFixed(2)}'>
                       </div>
                       <div class="cancel"><i class="fas fa-window-close"></i></div>

        `
       cartItem.lastElementChild.addEventListener('click', ()=>{
           LocalCart.removeItemFromCart(key)
       })
        cartWrapper.append(cartItem)
    } if (count <= 0){
        cartIcon.classList.remove('non-empty')
        let subtotal = document.querySelector('.subtotal')
        
        subtotal.innerHTML = `Subtotal: $0.00`

    } else if(count > 0){
        cartIcon.classList.add('non-empty')
        let root = document.querySelector(':root')
        root.style.setProperty('--after-content', `"${count}"`)
        const subtotal = document.querySelector('.subtotal')
        // subtotal.innerHTML = `SubTotal: $${total}`

        // Subtotal: $ ${total = (Math.round(total * 100) / 100).toFixed(2)}
        subtotal.innerHTML = `<input style='color:blue' type='text' name='subtotal' value='Subtotal: $ ${total = (Math.round(total * 100) / 100).toFixed(2)}'>`
        // console.log("the subtotal for today: ", subtotal);
    }
    else {
        let subtotal = document.querySelector('.subtotal')
        
    cartIcon.classList.remove('non-empty')
     subtotal.innerHTML = `Subtotals: $0.00`
    }
    
}
document.addEventListener('DOMContentLoaded', ()=>{updateCartUI()})
    