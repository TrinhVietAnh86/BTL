<?php
$sql_lietke_sp = "SELECT * FROM sanpham,danhsachsanpham WHERE sanpham.id=danhsachsanpham.id 
ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($conn,$sql_lietke_sp);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
<tr>
<th>Id</th>
<th>Tên sản phẩm</th>
<th>giá sp</th>
<th>hinh anh</th>
<th>danh mục</th>
<th>tóm tắt</th>
<th>nội dung</th>
<th>quảnlý</th>
</tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke_sp)){
$i++;
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['tensanpham'] ?></td>
<td><?php echo $row['giasp'] ?></td>
<td><img src="modum/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="150px" ></td>
<td><?php echo $row['tendanhmuc'] ?></td>
<td><?php echo $row['tomtat'] ?></td>
<td><?php echo $row['noidung'] ?></td>
<td>
<a href="modum/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a>
 | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
</td>
</tr>
<?php
}
?>
</table>
