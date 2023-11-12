<?php

require 'conn.php';

function authenticateUser($username, $password, $conn) {
    $stmt = $conn->prepare("SELECT * FROM user WHERE username=:u");
    $stmt->execute([":u" => $username]);
    return $stmt->fetch();
}

function loginUser($user, $password) {
    return $user && password_verify($password, $user['pass']);
}

if (isset($_POST['usr']) && isset($_POST['pwd'])) {
    $username = $_POST['usr'];
    $password = $_POST['pwd'];

    $user = authenticateUser($username, $password, $conn);

    if (loginUser($user, $password)) {
        setcookie('img', $user['img'], time() + 7200, "/");
        setcookie('usr', $user['name'], time() + 7200, '/');
      //  header("location:../index.php");
        header("location:../view/product_detail.php");
        exit;
    } else {
        echo "Mật khẩu hoặc tên đăng nhập sai.";
    }
} else {
    echo "Please provide a valid username and password.";
}
?>
