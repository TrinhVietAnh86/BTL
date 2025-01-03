<div class="productssp">
    <?php
    $products = [
        ["name" => "Laptop Acer Aspire 3 Spin A3SP14-31PT-387Z", "price" => 9490000, "image" => "page/sanpham/main/img/Acer.png", "description" => "Mô tả sản phẩm 1"],
        ["name" => "Laptop ASUS Gaming VivoBook K3605ZC-RP564W", "price" => 18490000, "image" => "page/sanpham/main/img/ASUS.png", "description" => "Mô tả sản phẩm 2"],
        ["name" => "page/sanpham/main/img/ASUS.png", "price" => 16999000, "image" => "page/sanpham/main/img/nitro5_.png", "description" => "Mô tả sản phẩm 3"],
        ["name" => "Laptop MSI Modern 14 C12MO-660VN", "price" => 29450000, "image" => "page/sanpham/main/img/MSI.png", "description" => "Mô tả sản phẩm 4"],
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
