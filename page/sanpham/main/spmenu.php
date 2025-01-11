<?php
        $sql_danhmuc = "SELECT * FROM danhsachsanpham ORDER BY id DESC";
        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
       
        ?>
<div class="menusp">
            <ul>
                <?php 
                 while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                <li><a href="?category=may-tinh&id=<?php echo $row_danhmuc['id'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                <?php
                 }
                 ?>
            </ul>
        </div>