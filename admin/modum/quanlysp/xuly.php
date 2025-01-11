<?php
include($_SERVER['DOCUMENT_ROOT'] . '/BTL/database/data.php');

$tensanpham = $_POST['tensanpham'];
$giasp = $_POST['giasp'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
$mota = $_POST['mota'];
$noidung = $_POST['noidung'];
$danhmuc = $_POST['danhmuc'];

if (isset($_POST['themsanpham'])) {
    // Thêm
    $sql_them = "INSERT INTO sanpham (tensanpham, giasp, hinhanh, mota, noidung, id_danhmuc) 
                 VALUES ('$tensanpham', '$giasp', '$hinhanh', '$mota', '$noidung', '$danhmuc')";
    if (mysqli_query($conn, $sql_them)) {
        if (move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh)) {
            header('Location: ../../index.php?action=quanlysp&query=them&message=add_success');
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: " . $sql_them . "<br>" . mysqli_error($conn);
    }
} elseif (isset($_POST['suasanpham'])) {
    // Sửa
    $id_sanpham = $_GET['idsanpham'];
    if ($hinhanh != '') {
        // Update with new image
        $sql_update = "UPDATE sanpham SET tensanpham='$tensanpham', giasp='$giasp', hinhanh='$hinhanh', mota='$mota', noidung='$noidung', id_danhmuc='$danhmuc' 
                       WHERE id_sanpham='$id_sanpham'";
        if (mysqli_query($conn, $sql_update)) {
            if (move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh)) {
                // Delete old image
                $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id_sanpham' LIMIT 1";
                $query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    unlink('uploads/' . $row['hinhanh']);
                }
                header('Location: ../../index.php?action=quanlysp&query=them&message=edit_success');
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Error: " . $sql_update . "<br>" . mysqli_error($conn);
        }
    } else {
        // Update without new image
        $sql_update = "UPDATE sanpham SET tensanpham='$tensanpham', giasp='$giasp', mota='$mota', noidung='$noidung', id_danhmuc='$danhmuc' 
                       WHERE id_sanpham='$id_sanpham'";
        if (mysqli_query($conn, $sql_update)) {
            header('Location: ../../index.php?action=quanlysp&query=them&message=edit_success');
        } else {
            echo "Error: " . $sql_update . "<br>" . mysqli_error($conn);
        }
    }
} elseif (isset($_GET['query']) && $_GET['query'] == 'xoa') {
    // Xóa
    $id_sanpham = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id_sanpham' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='$id_sanpham'";
    if (mysqli_query($conn, $sql_xoa)) {
        header('Location: ../../index.php?action=quanlysp&query=them&message=delete_success');
    } else {
        echo "Error: " . $sql_xoa . "<br>" . mysqli_error($conn);
    }
}
?>