<?php
session_start();
include('../../../BTL/database/data.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM useer WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row && password_verify($password, $row['PASSWORD'])) {
        $_SESSION['username'] = $username;
        header('Location: ../../../../BTL/index.php');
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login.php" method="POST">
        <h2>Đăng nhập</h2>
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit" name="login">Đăng nhập</button>
        <p>Chưa có tài khoản? <a href="register.php">Đăng ký ở đây</a></p>
    </form>
</body>
</html>