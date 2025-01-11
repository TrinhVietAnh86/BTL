<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

// Check if the database connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_lietke_danhmucsp = "SELECT * FROM danhsachsanpham ORDER BY id DESC";
$query_lietke_danhmucsp = mysqli_query($conn, $sql_lietke_danhmucsp);

// Check if the query executed successfully
if (!$query_lietke_danhmucsp) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
<tr>
    <th>Id</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
</tr>
<?php
$i = 0;
while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
    $i++;
?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
        <a href="modum/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id'] ?>&query=xoa">Xoá</a>
        | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a>
    </td>
</tr>
<?php
}
?>
</table>