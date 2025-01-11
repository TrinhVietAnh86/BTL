<h3>Thêm sản phẩm</h3>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modum/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" required></td>  
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasp" required></td>  
        </tr>  
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh" required></td>  
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea rows="5" name="mota" required></textarea></td>  
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="5" name="noidung" required></textarea></td>  
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc" required>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');
                    $sql_danhmuc = "SELECT * FROM danhsachsanpham ORDER BY id DESC";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?php echo $row_danhmuc['id']; ?>">
                        <?php echo $row_danhmuc['tendanhmuc']; ?>
                    </option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="themsanpham" value="Thêm sản phẩm">
            </td>
        </tr>
    </form>
</table>