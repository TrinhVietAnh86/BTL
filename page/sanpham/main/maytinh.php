<?php
// Lấy danh sách sản phẩm thuộc danh mục
$sql_pro = "SELECT * FROM sanpham 
            WHERE id_danhmuc = '{$_GET['id']}' 
            ORDER BY id_sanpham DESC";
$query_danhmuc = mysqli_query($conn, $sql_pro);


// Lấy thông tin danh mục
$sql_cate = "SELECT * FROM danhsachsanpham
             WHERE id = '{$_GET['id']}' 
             LIMIT 1";
$query_cate = mysqli_query($conn, $sql_cate);


$row_title = mysqli_fetch_array($query_cate);
?>

<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc']; ?></h3>
<ul class="product">
    <?php while ($row_pro = mysqli_fetch_array($query_danhmuc)) { ?>
        <li>
            <a href="">
                <img src="admin/modum/quanlysp/uploads/<?php echo $row_pro['hinhanh']; ?>" alt="<?php echo $row_pro['tensanpham']; ?>">
                <p class="">Tên sản phẩm: <?php echo $row_pro['tensanpham']; ?></p>
                <p class="">Giá: <?php echo number_format($row_pro['giasp']); ?> VNĐ</p>
            </a>
        </li>
    <?php } ?>
</ul>