<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

$sql_pro = "SELECT sanpham.*, danhsachsanpham.tendanhmuc
            FROM sanpham
            INNER JOIN danhsachsanpham ON sanpham.id_danhmuc = danhsachsanpham.id
            ORDER BY sanpham.id_sanpham DESC 
            LIMIT 40";
$query_pro = mysqli_query($conn, $sql_pro);

// Check if the query executed successfully
if (!$query_pro) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<h3>Sản phẩm mới nhất</h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="?category=san-pham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admin/modum/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" >
                <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'] ?></p>
                <p class="price_product">Giá: <?php echo number_format($row['giasp'], 0, ',', '.') ?> VNĐ</p>
                <p style="text-align: center; color: #d1d1d1;">
                    <?php echo $row['tendanhmuc'] ?>
                </p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>