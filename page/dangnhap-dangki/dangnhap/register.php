<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "baitaplon"; // Cơ sở dữ liệu baitaplon

// Tạo kết nối
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Truy vấn cơ sở dữ liệu để kiểm tra tên đăng nhập
    $sql = "SELECT * FROM useer WHERE username = ?";  // Sửa tên bảng từ 'useer' thành 'user'
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username); // Ràng buộc tham số
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Sử dụng cột PASSWORD viết hoa để so sánh mật khẩu
        if (password_verify($password, $user['PASSWORD'])) {  // Cập nhật cột 'password' thành 'PASSWORD'
            header("Location: ../../../index.php");
            exit;
        } else {
            $error_message = "Mật khẩu không đúng!";
        }
    } else {
        $error_message = "Tên đăng nhập không tồn tại!";
    }
}

$conn->close();
?>
