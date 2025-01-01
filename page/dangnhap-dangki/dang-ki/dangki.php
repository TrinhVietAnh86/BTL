<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
    <section id="register">
        <div class="container">
            <h2>Đăng ký tài khoản</h2>
            <form action="register.php" method="post">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit">Đăng ký</button>
            </form>
            <p>Đã có tài khoản? <a href="../dangnhap/dangnhap.php">Đăng nhập</a></p>
        </div>
    </section>
</body>
</html>
