<?php
session_start();

if (isset($_GET['index']) && is_numeric($_GET['index'])) {
    $index = intval($_GET['index']);

    if (isset($_SESSION['cart'][$index])) {
        // Xóa sản phẩm khỏi giỏ hàng bằng cách unset
        unset($_SESSION['cart'][$index]);

        // Cập nhật lại chỉ mục của giỏ hàng để tránh bị lỗi
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

// Chuyển hướng người dùng trở lại trang xem giỏ hàng sau khi xóa sản phẩm
header("Location: viewcart.php");
exit();
?>
