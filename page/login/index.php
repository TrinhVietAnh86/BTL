<?php
session_start();
include('../../../BTL/database/data.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM useer WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($result);

if ($user) {
    $userID = $user['id'];
    $email = $user['email'];
    // Other user details can be fetched here
} else {
    echo "User not found!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Chào mừng, <?php echo htmlspecialchars($username); ?>!</h1>
        <div class="user-info">
            <p>ID người dùng: <?php echo htmlspecialchars($userID); ?></p>
            <p>Email: <?php echo htmlspecialchars($email); ?></p>
            <!-- Other user details can be displayed here -->
        </div>
        <a href="logout.php" class="logout-button">Đăng xuất</a>
        <a href="../../../BTL/index.php" class="home-button">Trang chủ</a>
    </div>
</body>
</html>