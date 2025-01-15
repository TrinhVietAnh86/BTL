<div class="containersp">
    <?php
    include("main/spmenu.php");
    ?>
    <div class="content">
        <?php
        if (isset($_GET['product_id'])) {
            include('main/sanpham.php');
        } elseif (isset($_GET['category'])) {
            $category = $_GET['category'];

            if ($category == 'may-tinh') {
                include('main/maytinh.php');
            } elseif ($category == 'san-pham') {
                include('main/sanpham.php');
            } else {
                echo "<h2>Danh Mục Không Tồn Tại</h2>";
            }
        } else {
            echo "<h2>Chào Mừng Bạn Đến Với Cửa Hàng Của Chúng Tôi</h2>";
            include('main/index.php');
        }
        ?>
    </div>
</div>