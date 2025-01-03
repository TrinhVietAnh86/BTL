<?php
// Dữ liệu tin tức (có thể thay thế bằng cơ sở dữ liệu)
$news = [
    1 => [
        'title' => 'Tablet Nokia Lumia vừa mới được lộ diện',
        'date' => '01/12/2015',
        'content' => 'Surface hiện vẫn là dòng máy tính chủ lực của Microsoft, với hai sản phẩm mới nhất là Surface Pro 4 và Surface Book. Tuy nhiên theo thông tin rò rỉ từ trang twitter nổi tiếng @evleaks thì trước...'
    ],
    2 => [
        'title' => 'Huawei sắp tung smartphone có camera cực độc',
        'date' => '01/12/2015',
        'content' => 'Sau khi ra mắt chiếc smartphone cực mạnh Mate 8 với chip Kirin 950 thì mới đây, hãng smartphone hàng đầu Trung Quốc Huawei tiếp tục đăng quảng cáo về một smartphone mới với camera rất độc đáo...'
    ],
];

// Lấy ID tin tức từ URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Nếu ID không tồn tại, chuyển hướng về trang chủ
if (!isset($news[$id])) {
    header('Location: index.php');
    exit;
}

$item = $news[$id];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $item['title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="news-detail-container">
        <h1><?php echo $item['title']; ?></h1>
        <p class="date"><?php echo $item['date']; ?></p>
        <p><?php echo $item['content']; ?></p>
        <a href="index.php" class="back-link">Quay lại danh sách tin tức</a>
    </div>
</body>
</html>
