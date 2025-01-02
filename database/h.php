<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baitaplon";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
// else { echo "Kết nối thất bại: "};
}

// Kiểm tra dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $new_username = $_POST["username"];
    $new_password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Mã hóa mật khẩu
    $new_email = $_POST["email"];

    // Câu truy vấn SQL
    $sql = "INSERT INTO user (username, password, email) VALUES (?, ?, ?)";

    // Chuẩn bị truy vấn
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Chuẩn bị truy vấn thất bại: " . $conn->error);
    }

    // Ràng buộc tham số
    $stmt->bind_param("sss", $new_username, $new_password, $new_email);

    // Thực thi truy vấn
    if ($stmt->execute()) {
        // Chuyển hướng người dùng tới trang đăng nhập
        header('Location: dangnhap.php');
        exit; // Dừng script để tránh việc tiếp tục thực thi mã sau khi chuyển hướng
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng truy vấn
    $stmt->close();
}

// Đóng kết nối
$conn->close();
?>
