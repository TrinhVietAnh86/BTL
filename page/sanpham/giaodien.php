<div class="containersp">
        <?php
        include("main/spmenu.php")
        ?>
        <div class="content">
            <?php
            if (isset($_GET['category'])) {
                $category = $_GET['category'];

                switch ($category) {
                    case 'may-tinh':
                        include('main/maytinh.php');
                        break;

                    case 'dien-thoai':
                        include('main/dienthoai.php');
                        break;

                    case 'dong-ho':
                        include('main/dongho.php');
                        break;

                    case 'may-tinh-bang':
                        include('main/maytinhbang.php');
                        break;

                    case 'laptop':
                        include('main/laptop.php');
                        break;

                    case 'may-anh':
                        include('main/mayanh.php');
                        break;

                    default:
                        echo "<h2>Danh Mục Không Tồn Tại</h2>";
                        break;
                }
            } else {
                echo "<h2>Chào Mừng Bạn Đến Với Cửa Hàng Của Chúng Tôi</h2>";
                
            }
            ?>
        </div>
    </div>
