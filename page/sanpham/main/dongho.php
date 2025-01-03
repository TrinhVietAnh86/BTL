<div class="productssp">
    <?php
    $products = [
        ["name" => "Vòng đeo tay thông minh Xiaomi Mi Band 9 Pro", "price" => 550000, "image" => "page/sanpham/main/img/DhXiaoMi Band 9 Pro.png", "description" => "Mô tả sản phẩm 1"],
        ["name" => "Đồng hồ thông minh Huawei Watch D2", "price" => 8490000, "image" => "page/sanpham/main/img/DHhuawei_3.png", "description" => "Mô tả sản phẩm 2"],
        ["name" => "Đồng hồ Samsung Galaxy Watch FE 40mm", "price" => 2690000, "image" => "page/sanpham/main/img/DHsamsung-galaxy-watch-fe_1_.png", "description" => "Mô tả sản phẩm 3"],
        ["name" => "Apple Watch Series 10 42mm (GPS) Viền Nhôm Dây Cao Su Size S/M", "price" => 1790000, "image" => "page/sanpham/main/img/DHAppleWatch.png", "description" => "Mô tả sản phẩm 4"],
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
