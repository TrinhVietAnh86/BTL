<?php
include('../../../../BTL/database/data.php');

$tensanpham = $_POST['tensanpham'];
$giasp = $_POST['giasp'];
$hinhanh_tmp = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$danhmuc = $_POST['danhmuc'];

if (isset($_POST['themsanpham'])) {
    // Thêm
    $sql_them = "INSERT INTO sanpham(tensanpham,giasp,hinhanh,tomtat,noidung,id) VALUE('" . $tensanpham . "',
    '" . $giasp . "','" . $hinhanh . "' ,'" . $tomtat . "'  ,'" . $noidung . "','" . $danhmuc . "')";
    mysqli_query($conn, $sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysp&query=them');
} elseif (isset($_POST['suasanpham'])) {
    // Sửa
    if($hinhanh != ''){
        $sql_update = "UPDATE sanpham SET tensanpham='" . $tensanpham . "', giasp='" . $giasp . "',hinhanh='" . $hinhanh . "',tomtat='" . $tomtat . "',
        noidung='" . $noidung . "',danhmuc='" . $danhmuc . "' WHERE id_sanpham='" . $_GET['idsanpham'] . "'";
        // xóa ảnh cũ
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        $sql = "SELECT * FROM sanpham WHERE id_sanpham=' $_GET[idsanpham]' LIMIT 1";
    $query = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    }else{
        $sql_update = "UPDATE sanpham SET tensanpham='" . $tensanpham . "', giasp='" . $giasp . "',tomtat='" . $tomtat . "',
        noidung='" . $noidung . "',danhmuc='" . $danhmuc . "' WHERE id_sanpham='" . $_GET['idsanpham'] . "'";
    }	
    
    mysqli_query($conn, $sql_update);
    header('Location:../../index.php?action=quanlysp&query=them');
    
} else { // Xóa
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='" . $id . "'";
    mysqli_query($conn, $sql_xoa);
    header('Location:../../index.php?action=quanlysp&query=them');
}

?>