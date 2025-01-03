<?php
include('../../../../BTL/database/data.php');

$tenloaisp = $_POST['tendanhmuc'];
$thutu =$_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO danhsachsanpham(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
    mysqli_query($conn,$sql_them);
    header('location:../../index.php?action=quanlydanhmucsanpham');
}elseif(isset($_POST['suadanhmuc'])){ 

}else
{
    $id = $_GET['iddanhmuc']; 
    $sql_xoa = "DELETE FROM danhsachsanpham WHERE id='".$id."'";
    mysqli_query($mysqli,$sql_xoa); 
    header('Location:../../index.php?action=quanlydanhmucsanpham');
}
?>