<!-- filepath: /c:/Xampp/htdocs/BTL/page/timkiem/products.php -->
<?php
include('../../database/data.php');


if (isset($_GET['keyword'])) {
    $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
    $sql = "SELECT * FROM sanpham WHERE tensanpham LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <h1>Kết quả tìm kiếm cho "<?php echo htmlspecialchars($keyword); ?>"</h1>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <ul>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <li>
                    <h2><?php echo htmlspecialchars($row['tensanpham']); ?></h2>
                    <p>Giá: <?php echo number_format($row['giasp']); ?> VNĐ</p>
                    <img src="../../admin/modum/quanlysp/uploads/<?php echo htmlspecialchars($row['hinhanh']); ?>" alt="<?php echo htmlspecialchars($row['tensanpham']); ?>" width="150px">
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Không tìm thấy sản phẩm nào.</p>
    <?php endif; ?>
</body>
</html>