const iconCart = document.querySelector('.icon-cart');
const body = document.querySelector('body');
iconCart.addEventListener('click', () => {
  body.classList.toggle('showCart');
});
