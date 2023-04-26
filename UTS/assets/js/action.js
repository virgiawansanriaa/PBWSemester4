// deklarasi variabel untuk menyimpan item di keranjang belanja
let cart = [];
let total = 0;

// fungsi untuk menambah item ke keranjang belanja
function addToCart(itemName) {
    let itemPrice = 0;
    // mencari harga item berdasarkan nama
    switch (itemName) {
        case 'Bala-bala':
            itemPrice = 50000;
            break;
        case 'Pisang Goreng':
            itemPrice = 40000;
            break;
        case 'Cireng':
            itemPrice = 60000;
            break;
    }
    // tambahkan item ke keranjang belanja
    cart.push({
        name: itemName,
        price: itemPrice
    });
    // update total harga
    total += itemPrice;
    // tampilkan item di keranjang belanja
    let cartItems = document.getElementById('cart-items');
    let itemHtml = '<li>' + '<div class="item">' + '<img src="../assets/img/' + itemName + '.jpg" alt="' + itemName + '">' + '<h3>' + itemName + '</h3>' +'<p>'+'Rp.' + itemPrice + '</p>'+'</li>';
    cartItems.innerHTML += itemHtml;
    // tampilkan total harga di keranjang belanja
    let cartTotal = document.getElementById('cart-total');
    cartTotal.innerHTML = total;
}

// fungsi untuk checkout
function checkout() {
    alert('Total harga: Rp ' + total);
}
