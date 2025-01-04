<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Đăng ký</h2>
    <form action="register.php" method="post">
        <label for="fullname">Họ và tên:</label>
        <input type="text" id="fullname" name="fullname" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Đăng ký">
    </form>
    <p>Đã có tài khoản? <a href="login.php">Đăng nhập ở đây</a></p>
</body>
</html>

<?php
include('../../../../BTL/database/data.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT email FROM useer WHERE email = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email already exists, prompt user to log in
        echo "Email đã tồn tại. Vui lòng <a href='login.php'>đăng nhập</a>.";
    } else {
        // Email does not exist, proceed with registration
        $stmt->close();
        $stmt = $conn->prepare("INSERT INTO useer (username, email, PASSWORD) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("sss", $fullname, $email, $passwordHash);

        if ($stmt->execute()) {
            // Redirect to the login page after successful registration
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}
?>