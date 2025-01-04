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
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <form action="login.php" method="POST">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit" name="login">Đăng nhập</button>
    </form>
</body>
</html>