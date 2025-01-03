<?php
// Bao gồm file xử lý đăng nhập chỉ khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('register.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
    <section id="login">
        <div class="container">
            <h2>Đăng nhập</h2>
            <form method="POST">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Đăng nhập</button>
            </form>

            <!-- Hiển thị thông báo lỗi nếu có -->
            <?php if (!empty($error_message)): ?>
                <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
            <?php endif; ?>

            <p>Chưa có tài khoản? <a href="../dang-ki/dangki.php">Đăng ký ngay</a></p>
        </div>
    </section>
</body>
</html>
