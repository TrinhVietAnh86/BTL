<?php
    $sql_lietke_danhmucsp = "SELECT * FROM danhsachsanpham ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($conn,$sql_lietke_danhmucsp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a href="modum/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id'] ?>">Xoá</a>
            <a href="modum/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id'] ?>">Sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
