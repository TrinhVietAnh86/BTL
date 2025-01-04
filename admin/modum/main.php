<div class="clear"></div>
<div class="main">
    <?php
    if(isset($_GET['action']) && $_GET['query']){
        $tam =$_GET['action'];
        $query =$_GET['query'];
    }else{
        $tam ='';
        $query='';
    }
    if($tam=='quanlydanhmucsanpham' && $query=='them'){
        include("modum/quanlydanhmucsp/them.php");
        include("modum/quanlydanhmucsp/lietke.php");
    }elseif($tam=='quanlydanhmucsanpham' && $query=='sua'){
        include("modum/quanlydanhmucsp/sua.php");

    }
    else{
        include("modum/dashboard.php");
    }
    ?>

</div>