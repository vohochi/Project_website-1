<?php

define('SVName', 'localhost');
define('USRname', 'root');
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=" . SVName . ";dbname=" . DBName, USRname, DBpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT id, name, img, price FROM product1 WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../config/styles.css">
            <title>Product Details</title>
        </head>
        <body>
            <div class="product-details">
                <form action="add_to_cart.php" method="post">
                    <img src="../img/<?php echo $row['img']; ?>.png" alt="">
                    <p><?php echo $row['name']; ?></p>
                    <p>Giá: <span><?php echo number_format($row['price']); ?></span> đồng</p>
                    <input type="hidden" name="img" value="<?php echo $row['img']; ?>">
                    <input type="hidden" name="tensp" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="gia" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="submit" name="dathang" value="Thêm vào giỏ hàng">
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                </form>
            </div>

            <div class="cmt">
                <iframe src="binhluan.php?id=<?php echo $_GET['id']; ?>" frameborder="0"></iframe>
            </div>
        </body>
        </html>

        <?php
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
} else {
    echo "Không có ID sản phẩm.";
}
?>
