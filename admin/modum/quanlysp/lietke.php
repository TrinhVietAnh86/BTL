<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

// Check if the database connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_lietke_sp = "SELECT sanpham.*, danhsachsanpham.tendanhmuc 
                  FROM sanpham 
                  INNER JOIN danhsachsanpham ON sanpham.id_danhmuc = danhsachsanpham.id 
                  ORDER BY sanpham.id_sanpham DESC";
$query_lietke_sp = mysqli_query($conn, $sql_lietke_sp);

// Check if the query executed successfully
if (!$query_lietke_sp) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
<tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Giá sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Danh mục</th>
    <th>Mô tả</th>
    <th>Nội dung</th>
    <th>Quản lý</th>
</tr>
<?php
$i = 0;
while ($row = mysqli_fetch_array($query_lietke_sp)) {
    $i++;
?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><img src="modum/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['mota'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td>
        <a href="modum/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>&query=xoa">Xoá</a>
        | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
</tr>
<?php
}
?>
</table>