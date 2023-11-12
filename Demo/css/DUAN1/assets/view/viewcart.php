<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của bạn</title>
    <style>
        /* Style cho danh sách sản phẩm trong giỏ hàng */
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
        }

        /* Nút xóa sản phẩm */
        a {
            color: #ff0000;
            text-decoration: none;
            font-weight: bold;
        }

        .total-price {
            margin-top: 20px;
            font-weight: bold;
        }

        /* Style cho nút cập nhật số lượng */
        .update-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .update-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<h1>Giỏ hàng của bạn:</h1>';
        echo '<ul>';
        $index = 0;
        $totalPrice = 0; 

        foreach ($_SESSION['cart'] as $product) {
            if (isset($product['img']) && isset($product['tensp']) && isset($product['gia']) && isset($product['id'])) {
                echo '<li>';
                echo '<img src=" img/'. $product['img'] . '.png" alt="'. $product['tensp'] .'" >';
                echo '<p>' . $product['tensp'] . '</p>';
                echo '<p>Giá: ' . $product['gia'] . ' đồng</p>';
                echo '<p>ID: ' . $product['id'] . '</p>';
                echo '<a href="remove_from_cart.php?index=' . $index . '">Xóa</a>';
                echo '</li>';
                
      
                $totalPrice += $product['gia'];
            }
            $index++;
        }
        echo '</ul>';

        echo '<p class="total-price">Tổng tiền: ' . number_format($totalPrice) . ' đồng</p>';
    } else {
        echo '<h1>Giỏ hàng của bạn hiện đang trống.</h1>';
    }
    ?>




</body>
</html>
