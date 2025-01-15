<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

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
            <img src="admin/modum/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="<?php echo $row['tensanpham'] ?>">
        </div>
        <div class="info-container">
            <h1><?php echo $row['tensanpham'] ?></h1>
            <p class="price"><?php echo number_format($row['giasp'], 0, ',', '.') ?> VNĐ</p>
            <p class="category">Danh mục: <?php echo $row['tendanhmuc'] ?></p>
            <p class="description">Mô tả: <?php echo $row['mota'] ?></p>
        </div>
    </div>
    <?php
        }
    } else {
        echo "<p>ID sản phẩm không hợp lệ!</p>";
    }
    ?>

