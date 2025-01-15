<?php
// filepath: /d:/app_QUANTRONG/xampp/htdocs/BTL/page/sanpham/main/sanpham.php

if (isset($_GET['id'])) {
    $id_sanpham = $_GET['id'];
    $sql_detail = "SELECT sanpham.*, danhsachsanpham.tendanhmuc
                   FROM sanpham
                   INNER JOIN danhsachsanpham ON sanpham.id_danhmuc = danhsachsanpham.id
                   WHERE sanpham.id_sanpham = '$id_sanpham'";
    $query_detail = mysqli_query($conn, $sql_detail);

    if (!$query_detail || mysqli_num_rows($query_detail) == 0) {
        echo "<p>Không tìm thấy sản phẩm!</p>";
    } else {
        $row = mysqli_fetch_array($query_detail);
?>
    <div class="product-detail">
        <div class="image-container">
            <img src="admin/modum/quanlysp/uploads/<?php echo htmlspecialchars($row['hinhanh']); ?>" alt="<?php echo htmlspecialchars($row['tensanpham']); ?>">
        </div>
        <div class="info-container">
            <h1><?php echo htmlspecialchars($row['tensanpham']); ?></h1>
            <p class="price"><?php echo number_format($row['giasp'], 0, ',', '.'); ?> VNĐ</p>
            <p class="category">Danh mục: <?php echo htmlspecialchars($row['tendanhmuc']); ?></p>
            <p class="description">Mô tả: <?php echo htmlspecialchars($row['mota']); ?></p>
            <button onclick="addToCart(<?php echo $row['id_sanpham']; ?>)">Mua hàng</button>
        </div>
    </div>
    <script>
        function addToCart(productId) {
            // Tạo yêu cầu AJAX gửi đến server để thêm sản phẩm vào giỏ hàng
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "/BTL/page/giohang/add_to_cart.php?id=" + productId, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Hiển thị thông báo khi thêm vào giỏ hàng thành công
                    alert(xhr.responseText);
                }
            };
            xhr.send();
        }
    </script>
<?php
    }
} else {
    echo "<p>ID sản phẩm không hợp lệ!</p>";
}
?>