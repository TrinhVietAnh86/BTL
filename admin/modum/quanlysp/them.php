<h3>Thêm danh mục sản phẩm</h3>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modum/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm </td>
            <td><input type="text" name="tensanpham"></td>  
        </tr>
        <tr>
            <td>giá sản phẩm </td>
            <td><input type="text" name="giasp"></td>  
        </tr>  
        <tr>
            <td>hình hảnh </td>
            <td><input type="file" name="hinhanh"></td>  
        </tr>
        <tr>
            <td>tóm tắt </td>
            <td><textarea rows="5" name="tomtat" ></textarea></td>  
        </tr>
        
         <tr>
            <td>nội dung </td>
            <td><textarea rows="5" name="noidung" ></textarea></td>  
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
            <select name="danhmuc">
        <?php
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
