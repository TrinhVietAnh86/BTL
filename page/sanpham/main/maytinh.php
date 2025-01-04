<div class="productssp">
    <?php
    $products = [
        ["name" => "PC Mini Pc Asus NUC 14 Pro Revel Canyon U7", "price" => 19490000, "image" => "page/sanpham/main/img/pc mini ASUS.png", "description" => "Mô tả sản phẩm 1"],
        ["name" => "PC CPS văn phòng S04 i5 12400 / 8GB - 256GB", "price" => 8990000, "image" => "page/sanpham/main/img/pc-cps-van-phong-s4.png", "description" => "Mô tả sản phẩm 2"],
        ["name" => "PC CPS Gaming G01 i3 12100F / 16GB - 256GB / GTX 1650", "price" => 10590000, "image" => "page/sanpham/main/img/pc-cps-gaming-g1.png", "description" => "Mô tả sản phẩm 3"],
        ["name" => "PC CPS Đồ Hoạ D07 i5 14600F / 16GB - 500GB / RTX 3060", "price" => 23290000, "image" => "page/sanpham/main/img/pcdohoa.png", "description" => "Mô tả sản phẩm 4"],
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

