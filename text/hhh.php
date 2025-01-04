<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <div id="product-list"></div>

    <h2>Giỏ hàng</h2>
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Đơn giá (VNĐ)</th>
                <th>Số lượng</th>
                <th>Thành tiền (VNĐ)</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody id="cart-items"></tbody>
    </table>
    <div class="cart-actions">
        <p><strong>Tổng thanh toán:</strong> <span id="total-amount">0</span> VNĐ</p>
        <button onclick="placeOrder()">Đặt hàng</button>
    </div>

    <script src="cart.js"></script>
</body>
</html>

<script>
let cart = [];

// Hàm tải danh sách sản phẩm từ file JSON
async function loadProducts() {
    try {
        const response = await fetch('products.json');
        const products = await response.json();

        const productList = document.getElementById('product-list');
        productList.innerHTML = '';

        products.forEach(product => {
            const productDiv = document.createElement('div');
            productDiv.classList.add('product');

            productDiv.innerHTML = `
                <img src="${product.image}" alt="${product.name}" style="width: 150px; height: 150px;">
                <h3>${product.name}</h3>
                <p>${product.description}</p>
                <p>Giá: ${product.price.toLocaleString()} VNĐ</p>
                <button onclick="addToCart('${product.name}', ${product.price})">Thêm vào giỏ</button>
            `;

            productList.appendChild(productDiv);
        });
    } catch (error) {
        console.error('Lỗi khi tải sản phẩm:', error);
    }
}

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart(productName, productPrice) {
    const existingProduct = cart.find(item => item.name === productName);

    if (existingProduct) {
        existingProduct.quantity += 1;
        existingProduct.totalPrice += productPrice;
    } else {
        cart.push({
            name: productName,
            price: productPrice,
            quantity: 1,
            totalPrice: productPrice
        });
    }

    renderCart();
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function removeFromCart(productName) {
    cart = cart.filter(item => item.name !== productName);
    renderCart();
}

// Hàm cập nhật số lượng sản phẩm
function updateQuantity(productName, delta) {
    const product = cart.find(item => item.name === productName);

    if (product) {
        product.quantity += delta;
        if (product.quantity < 1) {
            removeFromCart(productName);
        } else {
            product.totalPrice = product.quantity * product.price;
        }

        renderCart();
    }
}

// Hàm hiển thị giỏ hàng
function renderCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    let totalAmount = 0;

    cart.forEach(item => {
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.price.toLocaleString()}</td>
            <td>
                <button onclick="updateQuantity('${item.name}', -1)">-</button>
                ${item.quantity}
                <button onclick="updateQuantity('${item.name}', 1)">+</button>
            </td>
            <td>${item.totalPrice.toLocaleString()}</td>
            <td>
                <button class="delete-button" onclick="removeFromCart('${item.name}')">Xóa</button>
            </td>
        `;

        cartItems.appendChild(row);
        totalAmount += item.totalPrice;
    });

    document.getElementById('total-amount').textContent = totalAmount.toLocaleString();
}

// Hàm đặt hàng
function placeOrder() {
    if (cart.length === 0) {
        alert('Giỏ hàng của bạn đang trống!');
    } else {
        alert(`Đơn hàng của bạn đã được đặt với tổng số tiền: ${document.getElementById('total-amount').textContent} VNĐ`);
        cart = [];
        renderCart();
    }
}

// Tải sản phẩm khi trang được tải
document.addEventListener('DOMContentLoaded', loadProducts);
</script>