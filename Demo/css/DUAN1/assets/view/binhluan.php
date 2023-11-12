<?php
session_start();
if (isset($_SESSION['id']) && $_SESSION['id'] > 0) {
    // User is logged in or has a valid session
  

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình Luận</title>
</head>
<body>
    <hr>
    <?php
    echo '<form action="../model/binhluan.php" method="post">';
    echo '<input type="text" name="name">';
    echo '<input type="hidden" name="id" value="' . $_GET['id'] . '">';
    echo '<textarea name="noidung" id="" cols="30" rows="10"></textarea>';
    echo '<input type="submit" value="Gửi bình luận" name="quibinhluan">';
    echo '</form>';

    ?>
</body>
</html>
<?php } else {
  echo "<a href='../view/login.php' target='_parent'>Bạn vui lòng đăng nhập!</a>";

}
?>
