<?php
session_start();

if (isset($_POST['dathang']) && $_POST['dathang'] == 'Thêm vào giỏ hàng') {
    // Lấy thông tin sản phẩm từ form
    $img = $_POST['img'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $id = $_POST['id'];

    // Kiểm tra giỏ hàng đã tồn tại chưa
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Tạo một mảng sản phẩm để thêm vào giỏ hàng
    $sp = array(
        'img' => $img,
        'tensp' => $tensp,
        'gia' => $gia,
        'id' => $id
    );

    // Thêm sản phẩm vào giỏ hàng
    $_SESSION['cart'][] = $sp;

    // Chuyển hướng người dùng đến trang xem giỏ hàng
    header("location:../index.php");
    exit();
}
?>
