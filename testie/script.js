let cart = [];

function addToCart(productName, price) {
    cart.push({ productName, price });
    updateCart();
}

function updateCart() {
    const cartList = document.getElementById('cart');
    cartList.innerHTML = '';
    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.productName} - $${item.price}`;
        cartList.appendChild(listItem);
    });
}

document.getElementById('checkoutButton').addEventListener('click', () => {
    if (cart.length === 0) {
        alert('Your cart is empty!');
        return;
    }
    const checkoutData = JSON.stringify(cart);
    fetch('checkout.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: checkoutData,
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        cart = [];
        updateCart();
    })
    .catch(error => alert('Error: ' + error.message));
});
