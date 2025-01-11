<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            text-align: center;
            width: 200px;
            display: inline-block;
            vertical-align: top;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <h1>Danh sách sản phẩm</h1>

    <?php
    // Danh sách sản phẩm
    $products = [
        ["name" => "Sản phẩm 1", "price" => 100000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 1"],
        ["name" => "Sản phẩm 2", "price" => 200000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 2"],
        ["name" => "Sản phẩm 3", "price" => 150000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 3"],
        ["name" => "Sản phẩm 4", "price" => 120000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 4"],
    ];

    // Lấy từ khóa tìm kiếm từ URL
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

    // Lọc sản phẩm theo từ khóa
    $filteredProducts = [];
    if (!empty($keyword)) {
        foreach ($products as $product) {
            if (stripos($product["name"], $keyword) !== false) {
                $filteredProducts[] = $product;
            }
        }
    } else {
        $filteredProducts = $products; // Nếu không có từ khóa, hiển thị tất cả
    }

    // Hiển thị sản phẩm
    if (count($filteredProducts) > 0) {
        foreach ($filteredProducts as $product): ?>
            <div class="product">
                <img src="<?= $product["image"] ?>" alt="<?= $product["name"] ?>">
                <h3><?= $product["name"] ?></h3>
                <p><?= $product["description"] ?></p>
                <p>Giá: <?= number_format($product["price"], 0, ',', '.') ?> VNĐ</p>
                <button onclick="addToCart('<?= $product["name"] ?>', <?= $product["price"] ?>)">Thêm vào giỏ</button>
            </div>
        <?php endforeach;
    } else {
        echo "<p>Không tìm thấy sản phẩm nào phù hợp với từ khóa: <strong>$keyword</strong></p>";
    }
    ?>

</body>
</html>
