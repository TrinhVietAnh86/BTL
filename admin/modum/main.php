<div class="clear"></div>
<div class="main">
    <?php
    if(isset($_GET['action']) && isset($_GET['query'])){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }

    if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
        include("modum/quanlydanhmucsp/them.php");
        include("modum/quanlydanhmucsp/lietke.php");
    } elseif($tam == 'quanlydanhmucsanpham' && $query == 'sua'){
        include("modum/quanlydanhmucsp/sua.php");
    } elseif($tam == 'quanlysp' && $query == 'them'){
        include("modum/quanlysp/them.php");
        include("modum/quanlysp/lietke.php");
    } elseif($tam == 'quanlysp' && $query == 'sua'){
        include("modum/quanlysp/sua.php");
    } else {
        include("modum/dashboard.php");
    }
    ?>
</div>