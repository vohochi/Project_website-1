const iconCart = document.querySelector('.icon-cart');
const body = document.querySelector('body');
const close = document.querySelector('.close');
const listCartHTML = document.querySelector('.listCart');
const iconCartSpan = document.querySelector('. icon-cart span');
const listProductHTML = document.querySelector('.listProduct');
let listProduct = [];
let carts = [];
iconCart.addEventListener('click', () => {
  body.classList.toggle('showCart');
});
close.addEventListener('click', () => {
  body.classList.toggle('showCart');
});
// add data
const addDataHTML = () => {
  listProduct.innerHTML = ``;
  if (listProduct.length > 0) {
    listProduct.forEach((product) => {
      let newProduct = document.createElement('div');
      newProduct.classList.add('item');
      newProduct.dataset.id = product.id;
      newProduct.innerHTML = `<img src="${product.image}" alt="">
<h2>${product.name}</h2>
<div class="price">$${product.price}</div>
<button class="addCart">
Add To Cart
</button>`;
      listProductHTML.appendChild(newProduct);
    });
  }
};
listProductHTML.addEventListener('click', (event) => {
  let positionClick = event.target;
  if (positionClick.classList.contains('addCart')) {
    let product_id = positionClick.parentElement.dataset.id;
    alert(product_id);
  }
});
const initApp = () => {
  // get json
  fetch('products.json')
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      listProduct = data;
      addDataHTML();
    });
};
initApp();
