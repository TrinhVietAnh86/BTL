<?php
include('../../../../BTL/database/data.php');

$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];

if (isset($_POST['themdanhmuc'])) {
    // Thêm
    $sql_them = "INSERT INTO danhsachsanpham(tendanhmuc, thutu) VALUE('" . $tenloaisp . "','" . $thutu . "')";
    mysqli_query($conn, $sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
} elseif (isset($_POST['suadanhmuc'])) {
    // Sửa
    $sql_update = "UPDATE danhsachsanpham SET tendanhmuc='" . $tenloaisp . "', thutu='" . $thutu . "' WHERE id='" . $_GET['iddanhmuc'] . "'";
    mysqli_query($conn, $sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
} else {
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM danhsachsanpham WHERE id='" . $id . "'";
    mysqli_query($conn, $sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}

?>