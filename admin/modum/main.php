<div class="clear"></div>
<div class="main">
    <?php
    if(isset($_GET['action'])){
        $tam =$_GET['action'];
    }else{
        $tam ='';
    }
    if($tam=='quanlydanhmucsanpham'){
        include("quanlydanhmucsp/them.php");
        include("quanlydanhmucsp/lietke.php");
    }else{
        include("modum/dashboard.php");
    }
    ?>

</div>