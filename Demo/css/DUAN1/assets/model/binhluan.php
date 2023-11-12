<?php
// model/binhluan.php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (isset($_SESSION['user'])) {
        $product_id = $_POST['product_id'];
        $name = $_SESSION['username'];
        $comment = $_POST['comment'];

        // Thực hiện kiểm tra và xử lý dữ liệu đầu vào nếu cần
        $name = htmlspecialchars($name);
        $comment = htmlspecialchars($comment);

        // Thực hiện truy vấn để thêm bình luận vào CSDL (Cần điều chỉnh câu truy vấn dựa trên cấu trúc của bạn)
        $query = "INSERT INTO comments (product_id, name, comment) VALUES (:product_id, :name, :comment)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);

        try {
            $stmt->execute();
            // Điều hướng về trang chi tiết sản phẩm sau khi thêm bình luận thành công
            header("Location: ../product_details.php?id=" . $product_id);
            exit();
        } catch (PDOException $e) {
            // Xử lý lỗi thêm bình luận
            echo "Error adding comment: " . $e->getMessage();
        }
    } else {
        // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập với tham số returnUrl
        $returnUrl = urlencode("../product_details.php?id=" . $_POST['product_id']);
        header("Location: ../view/login.php?returnUrl=$returnUrl");
        exit();
    }
} else {
    // Xử lý yêu cầu không hợp lệ
    echo "Invalid request!";
}
?>
