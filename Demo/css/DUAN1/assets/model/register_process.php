<?php
include 'conn.php';

if (!empty($_POST['name']) && !empty($_POST['usr']) && !empty($_POST['pwd']) && !empty($_FILES['file'])) {
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $usr = $_POST['usr'];
    $confirm_password = $_POST["cfm"];
    $passhash = password_hash($confirm_password,PASSWORD_DEFAULT);
    $img = basename($_FILES['file']['name'], ".png");
    $stmt = $conn->prepare("INSERT INTO user VALUE(?,?,?,?)");
    $stmt->bindParam(1, $usr);
    $stmt->bindParam(2, $passhash);
    $stmt->bindParam(3, $name);
    $stmt->bindParam(4, $img);
    $stmt->execute();

    if ($pwd !== $confirm_password) {
        echo "Mật khẩu và xác nhận mật khẩu không khớp!";
        exit;
}

    if ($stmt) {
        $dir = "../img/" . basename($_FILES['file']['name']);
        $file = $_FILES['file']['tmp_name'];
        $stt = move_uploaded_file($file, $dir);
        $err =  $_FILES['file']['error'];
        header("location: ../view/login.php");
    }
} else echo "Enter enough fields please !";
$conn = null;
?>