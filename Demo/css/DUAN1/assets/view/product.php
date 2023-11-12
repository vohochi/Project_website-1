<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
   
        .boxsp p {
            font-size: 16px;
            margin: 5px 0;
        }

        .boxsp input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin: 10px;
        }

        .boxsp a {
            text-decoration: none;
            color: #007bff;
        }
        .span{
            text-decoration: line-through;
            color: red;
        }
        .boxsp {
            margin: 10px;
            border: 1px solid #ccc;
            display: inline-block;
            max-width:320px;
            max-height: 500px;
            text-align: center;
}

.boxsp img {
    max-width: 200px ;/* Hình ảnh sẽ co dãn để vừa với phần bên trong */
    max-height: 350px /* Giới hạn chiều cao của hình ảnh thành 400px */
}
.container {
    width: 90vw;
    margin: 0 auto; /* Đặt giữa trang */
    padding: 0 50px; /* Cách lề 2 bên 50px */
    text-align: center;

}

    </style>
</head>
<body>
  
    <?php 
   
    // Thực hiện truy vấn SQL để lấy toàn bộ sản phẩm
    $query = "SELECT id, name, price, img FROM product1";
    $result = $conn->query($query);
    echo'<div class= "container">';
        echo' <h2>Sản phẩm mới </h2>';
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
         
            echo '<div class= "boxsp">';
            echo '<form action="view/add_to_cart.php" method="post">';
            echo '<img src="img/' . $row['img'] . '.png" alt="">';
            echo '<p>' . $row['name'] . '</p>';
            echo '<p>Giá: <span>' . number_format($row['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
            echo '<input type="hidden" name="img" value="/img/' . $row['img'] . '.jpg">';
            echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
            echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
            // Trong vòng lặp hiển thị danh sách sản phẩm
            echo '<a href="view/product_detail.php?id=' . $row['id'] . '">Xem chi tiết</a>';

            echo '</form>';
            echo '</div>';     
         
        }
    } else {
        echo "Không có sản phẩm nào.";
    }
    echo '</div>';
    ?>
</body>
</html>

