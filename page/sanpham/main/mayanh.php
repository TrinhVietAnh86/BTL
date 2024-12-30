<div class="productssp">
    <?php
    $products = [
        ["name" => "Sản phẩm 1", "price" => 100000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 1"],
        ["name" => "Sản phẩm 2", "price" => 200000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 2"],
        ["name" => "Sản phẩm 3", "price" => 150000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 3"],
        ["name" => "Sản phẩm 4", "price" => 120000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 4"],
    ];

    foreach ($products as $product) {
        echo "<div class='product'>
                <img src='{$product['image']}' alt='{$product['name']}' style='width: 150px; height: 150px;'>
                <h3>{$product['name']}</h3>
                <p>{$product['description']}</p>
                <p>Giá: " . number_format($product['price'], 0, ',', '.') . " VNĐ</p>
                <button onclick=\"addToCart('{$product['name']}', {$product['price']})\">Thêm vào giỏ</button>
              </div>";
    }
    ?>
</div>
