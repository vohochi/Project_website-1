<?php
define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=" . SVName . ";dbname=" . DBName, USRname, DBpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $category_id = 2; // Change this to the desired category ID

    // Retrieve products for the given category ID from the database
    $stmt = $conn->prepare("SELECT * FROM product WHERE MaDanhMuc = ?");
    $stmt->execute([$category_id]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products in Category 1</title>
    <link rel="stylesheet" href="../config/styles.css">
    <style>
        .product-container {
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Sách dạy làm giàu</h2>

    <?php if (isset($products) && count($products) > 0): ?>
        <?php foreach ($products as $product): ?>
            <div class="product-container">
                <?php
                echo '<div class="boxsp">';
                echo '<form action="view/add_to_cart.php" method="post">';
                echo '<img src="../img/' . $product['img'] . '.png" alt="">';
                echo '<p>' . $product['Name'] . '</p>';
                echo '<p>Giá: <span>' . number_format($product['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
                echo '<input type="hidden" name="img" value="/img/' . $product['img'] . '.jpg">';
                echo '<input type="hidden" name="tensp" value="' . $product['Name'] . '">';
                echo '<input type="hidden" name="gia" value="' . $product['price'] . '">';
                echo '<input type="hidden" name="id" value="' . $product['ID'] . '">';
                echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
                echo '<a href="view/product_detail.php?id=' . $product['ID'] . '">Xem chi tiết</a>';
                echo '</form>';
                echo '</div>';
                ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No products found in Category 1.</p>
    <?php endif; ?>
</body>
</html>
