<div class="productssp">
    <?php
    $products = [
        ["name" => "DJI Osmo Pocket 3", "price" => 12990000, "image" => "page/sanpham/main/img/cmr DJI osmo Pocket3.png", "description" => "Mô tả sản phẩm 1"],
        ["name" => "Camera GoPro Hero 12", "price" => 9490000, "image" => "page/sanpham/main/img/cmrGOPRO HERO12_2_.webp", "description" => "Mô tả sản phẩm 2"],
        ["name" => "Camera DJI Osmo Action 4", "price" => 6990000, "image" => "page/sanpham/main/img/camera-hanh-dong-dji-action-4_12_.png", "description" => "Mô tả sản phẩm 3"],
        ["name" => "Camera Insta360 One X3", "price" => 8490000, "image" => "page/sanpham/main/img/camera-hanh-trinh-insta360-one-x3.png", "description" => "Mô tả sản phẩm 4"],
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

