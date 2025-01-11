<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');


// Check if the database connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form data is set
$tenloaisp = isset($_POST['tendanhmuc']) ? $_POST['tendanhmuc'] : '';

if (isset($_POST['themdanhmuc'])) {
    // Thêm
    $sql_them = "INSERT INTO danhsachsanpham (tendanhmuc) VALUES ('$tenloaisp')";
    if (mysqli_query($conn, $sql_them)) {
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them&message=add_success');
    } else {
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them&message=add_fail');
    }
} elseif (isset($_POST['suadanhmuc'])) {
    // Sửa
    $id = $_GET['iddanhmuc'];
    $sql_update = "UPDATE danhsachsanpham SET tendanhmuc='$tenloaisp' WHERE id='$id'";
    if (mysqli_query($conn, $sql_update)) {
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=sua&message=edit_success');
    } else {
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=sua&message=edit_fail');
    }
} elseif (isset($_GET['query']) && $_GET['query'] == 'xoa') {
    // Xóa
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM danhsachsanpham WHERE id='$id'";
    if (mysqli_query($conn, $sql_xoa)) {
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them&message=delete_success');
    } else {
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them&message=delete_fail');
    }
}
?>