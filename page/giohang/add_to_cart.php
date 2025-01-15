<?php
// filepath: /d:/app_QUANTRONG/xampp/htdocs/BTL/page/giohang/add_to_cart.php

session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

if (isset($_GET['id'])) {
    $id_sanpham = $_GET['id'];

    // Lấy thông tin sản phẩm từ cơ sở dữ liệu
    $sql = "SELECT sanpham.*, danhsachsanpham.tendanhmuc
            FROM sanpham
            INNER JOIN danhsachsanpham ON sanpham.id_danhmuc = danhsachsanpham.id
            WHERE sanpham.id_sanpham = '$id_sanpham'";
    $query = mysqli_query($conn, $sql);
    $product = mysqli_fetch_array($query);

    if ($product) {
        // Khởi tạo giỏ hàng nếu chưa tồn tại
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
        if (isset($_SESSION['cart'][$id_sanpham])) {
            $_SESSION['cart'][$id_sanpham]['quantity']++;
        } else {
            $_SESSION['cart'][$id_sanpham] = [
                'name' => $product['tensanpham'],
                'price' => $product['giasp'],
                'image' => $product['hinhanh'],
                'quantity' => 1,
            ];
        }

        echo "Sản phẩm đã được thêm vào giỏ hàng!";
    } else {
        echo "Không tìm thấy sản phẩm!";
    }
} else {
    echo "ID sản phẩm không hợp lệ!";
}
?>