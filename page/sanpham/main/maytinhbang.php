<div class="productssp">
    <?php
    $products = [
        ["name" => "iPad Pro M4 11 inch Wifi 256GB | Chính hãng Apple Việt Nam", "price" => 27490000, "image" => "page/sanpham/main/img/Ipad Pro M4 .png", "description" => "Mô tả sản phẩm 1"],
        ["name" => "Samsung Galaxy Tab S9 FE 5G 6GB 128GB", "price" => 9490000, "image" => "page/sanpham/main/img/samsungS9.png", "description" => "Mô tả sản phẩm 2"],
        ["name" => "Samsung Galaxy Tab S9 FE Plus WIFI 12GB 256GB", "price" => 14990000, "image" => "page/sanpham/main/img/samsungS9FEPlus.png", "description" => "Mô tả sản phẩm 3"],
        ["name" => "Xiaomi Redmi Pad SE Wifi (6GB 128GB)", "price" => 11450000, "image" => "page/sanpham/main/img/xiaomi-redmi-pad-se_1_3.png", "description" => "Mô tả sản phẩm 4"],
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

