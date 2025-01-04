<div class="productssp">
    <?php
    $products = [
        ["name" => "Samsung Galaxy M55 (12GB 256GB)", "price" => 10190000, "image" => "page/sanpham/main/img/dien-thoai-samsung-galaxy-m55.png", "description" => "Mô tả sản phẩm "],
        ["name" => "Samsung Galaxy S24 FE 5G 8GB 128GB", "price" => 13990000, "image" => "page/sanpham/main/img/dien-thoai-samsung-galaxy-s24-fe_3__4.png", "description" => "Mô tả sản phẩm "],
        ["name" => "iPhone 16 Pro Max 256GB | Chính hãng VN/A", "price" => 33290000, "image" => "page/sanpham/main/img/iphone-16-pro-max.png", "description" => "Mô tả sản phẩm "],
        ["name" => "Samsung Galaxy S24 Ultra 12GB 256GB", "price" => 25000000, "image" => "page/sanpham/main/img/ss-s24-ultra-xam-222.png", "description" => "Mô tả sản phẩm "],
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

