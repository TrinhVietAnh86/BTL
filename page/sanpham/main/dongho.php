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
<div class="productssp">
    <?php
    $products = [
        ["name" => "Sản phẩm 1", "price" => 100000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 1"],
        ["name" => "Sản phẩm 2", "price" => 200000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 2"],
        ["name" => "Sản phẩm 3", "price" => 150000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 3"],
        ["name" => "Sản phẩm 4", "price" => 120000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 4"],
    ];

    // Chuyển mảng sản phẩm thành JSON
    $jsonProducts = json_encode($products);
    ?>

    <!-- Hiển thị sản phẩm -->
    <?php foreach ($products as $product): ?>
        <div class='product'>
            <img src='<?= $product["image"] ?>' alt='<?= $product["name"] ?>' style='width: 150px; height: 150px;'>
            <h3><?= $product["name"] ?></h3>
            <p><?= $product["description"] ?></p>
            <p>Giá: <?= number_format($product["price"], 0, ',', '.') ?> VNĐ</p>
            <button onclick="addToCart('<?= $product["name"] ?>', <?= $product["price"] ?>)">Thêm vào giỏ</button>
        </div>
    <?php endforeach; ?>

    <!-- Chuyển JSON vào JavaScript -->
    <script>
        // Nhận JSON từ PHP
        const products = <?= $jsonProducts ?>;
        console.log(products);

        // Ví dụ: Hiển thị tên sản phẩm
        products.forEach(product => {
            console.log(`Tên sản phẩm: ${product.name}, Giá: ${product.price}`);
        });
    </script>
</div>

