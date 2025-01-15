<?php
session_start();

if (isset($_GET['id']) && isset($_GET['action'])) {
    $id_sanpham = $_GET['id'];
    $action = $_GET['action'];

    if (isset($_SESSION['cart'][$id_sanpham])) {
        switch ($action) {
            case 'increase':
                $_SESSION['cart'][$id_sanpham]['quantity']++;
                break;
            case 'decrease':
                if ($_SESSION['cart'][$id_sanpham]['quantity'] > 1) {
                    $_SESSION['cart'][$id_sanpham]['quantity']--;
                } else {
                    unset($_SESSION['cart'][$id_sanpham]);
                }
                break;
            case 'remove':
                unset($_SESSION['cart'][$id_sanpham]);
                break;
        }
    }

    echo "Cập nhật giỏ hàng thành công!";
}
?>
