<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        .product {
            margin-bottom: 10px;
        }

        .product button {
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .product button:hover {
            background-color: #218838;
        }

        .cart-actions {
            margin-top: 20px;
            text-align: right;
        }

        .cart-actions button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cart-actions button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

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
        <tbody id="cart-items">
        </tbody>
    </table>
    <div class="cart-actions">
        <p><strong>Tổng thanh toán:</strong> <span id="total-amount">0</span> VNĐ</p>
        <button onclick="placeOrder()">Đặt hàng</button>
    </div>

    <script>
        let cart = [];

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

        function removeFromCart(productName) {
            cart = cart.filter(item => item.name !== productName);
            renderCart();
        }

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
                        <button onclick="updateQuantity('${item.name}', -1')">-</button>
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

        function placeOrder() {
            if (cart.length === 0) {
                alert('Giỏ hàng của bạn đang trống!');
            } else {
                alert(`Đơn hàng của bạn đã được đặt với tổng số tiền: ${document.getElementById('total-amount').textContent} VNĐ`);
                cart = [];
                renderCart();
            }
        }
    </script>
</body>
</html>
