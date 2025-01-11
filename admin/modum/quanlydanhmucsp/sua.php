<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

if (isset($_GET['iddanhmuc'])) {
    $id = $_GET['iddanhmuc'];
    $sql_sua = "SELECT * FROM danhsachsanpham WHERE id = '$id' LIMIT 1";
    $query_sua = mysqli_query($conn, $sql_sua);
    $row = mysqli_fetch_array($query_sua);
}
?>

<h3>Sửa danh mục sản phẩm</h3>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modum/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $id ?>">
        <tr>
            <td>Tên danh mục:</td>
            <td><input type="text" name="tendanhmuc" value="<?php echo $row['tendanhmuc'] ?>" required></td>  
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm">
            </td>
        </tr>
    </form>
</table>