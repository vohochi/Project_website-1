<?php
require '../config/config.php';
require 'conn.php';

if (!empty($_POST['up_id'])) {
    $id = $_POST['up_id'];
    $stmt = $conn->prepare("SELECT * FROM product WHERE ID = ?");
    $stmt->execute([$id]);
    $prod = $stmt->fetch();

    if ($prod) {
        var_dump($prod);

        $stmt = $conn->prepare("DELETE FROM product WHERE ID = ?");
        $stmt->execute([$id]);
        if($stmt){
            echo "Successfully Deleted !";
        }
    } else echo 'Product is not exits';
}else{
    echo "Input product's id";
}

$conn = null;
?>

