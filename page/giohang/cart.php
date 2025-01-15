<?php
// filepath: /d:/app_QUANTRONG/xampp/htdocs/BTL/page/giohang/cart.php

session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

// Initialize total
$total = 0;
?>
<link rel="stylesheet" href="giohang.css">
<table>
    <thead>
        <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $id => $product) {
                $subtotal = $product['price'] * $product['quantity'];
                $total += $subtotal;
        ?>
                <tr>
                    <td><img src="admin/modum/quanlysp/uploads/<?php echo htmlspecialchars($product['image']); ?>" width="50" alt="<?php echo htmlspecialchars($product['name']); ?>"></td>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</td>
                    <td>
                        <button onclick="updateCart(<?php echo $id; ?>, 'decrease')">-</button>
                        <?php echo $product['quantity']; ?>
                        <button onclick="updateCart(<?php echo $id; ?>, 'increase')">+</button>
                    </td>
                    <td><?php echo number_format($subtotal, 0, ',', '.'); ?> VNĐ</td>
                    <td>
                        <button onclick="updateCart(<?php echo $id; ?>, 'remove')">Xóa</button>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo '<tr><td colspan="6">Giỏ hàng của bạn đang trống.</td></tr>';
        }
        ?>
        <tr>
            <td colspan="4" align="right">Tổng cộng:</td>
            <td colspan="2"><?php echo number_format($total, 0, ',', '.'); ?> VNĐ</td>
        </tr>
        <!-- Add the payment button -->
        <?php if (!empty($_SESSION['cart'])): ?>
            <tr>
                <td colspan="6" align="center">
                    <button onclick="processPayment()">Thanh toán</button>
                </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<script>
    function updateCart(productId, action) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "/BTL/page/giohang/update_cart.php?id=" + productId + "&action=" + action, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                location.reload();
            }
        };
        xhr.send();
    }

    function processPayment() {
        // Send request to server to process payment
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "/BTL/page/giohang/process_payment.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Payment is successful, clear the cart
                alert("Thanh toán thành công!");
                // Clear the cart session
                location.href = "/BTL/page/giohang/cart.php"; // Reload cart page
            }
        };
        xhr.send();
    }
</script>
