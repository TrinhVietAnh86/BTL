<style>
        /* Gộp CSS từ giỏ hàng và thêm phong cách nếu cần */
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
    <div class="productssp">
        <?php
        $products = [
            ["name" => "Sản phẩm 1", "price" => 100000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 1"],
            ["name" => "Sản phẩm 2", "price" => 200000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 2"],
            ["name" => "Sản phẩm 3", "price" => 150000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 3"],
            ["name" => "Sản phẩm 4", "price" => 120000, "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 4"],
        ];

        foreach ($products as $product): ?>
            <div class="product">
                <img src="<?= $product["image"] ?>" alt="<?= $product["name"] ?>">
                <h3><?= $product["name"] ?></h3>
                <p><?= $product["description"] ?></p>
                <p>Giá: <?= number_format($product["price"], 0, ',', '.') ?> VNĐ</p>
                <button onclick="addToCart('<?= $product["name"] ?>', <?= $product["price"] ?>)">Thêm vào giỏ</button>
            </div>
        <?php endforeach; ?>
    </div>
