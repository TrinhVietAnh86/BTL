<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

$sql_sua_sp = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($conn, $sql_sua_sp);
?>
<h3>Sửa sản phẩm</h3>
<table border="1" width="50%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)){
?>
    <form method="POST" action="modum/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham" required></td>  
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp" required></td>  
        </tr>  
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modum/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
            </td>  
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea rows="5" name="mota" required><?php echo $row['mota'] ?></textarea></td>  
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="5" name="noidung" required><?php echo $row['noidung'] ?></textarea></td>  
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc" required>
                    <?php
                    $sql_danhmuc = "SELECT * FROM danhsachsanpham ORDER BY id DESC";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        if($row_danhmuc['id'] == $row['id_danhmuc']){
                    ?>
                        <option selected value="<?php echo $row_danhmuc['id']; ?>">
                            <?php echo $row_danhmuc['tendanhmuc']; ?>
                        </option>
                    <?php
                        } else {
                    ?>
                        <option value="<?php echo $row_danhmuc['id']; ?>">
                            <?php echo $row_danhmuc['tendanhmuc']; ?>
                        </option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="suasanpham" value="Sửa sản phẩm">
            </td>
        </tr>
    </form>
<?php
}
?>
</table>