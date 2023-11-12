<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tên trang</title>
    <style>
     
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            color: blue;
        }

        .logo>img {
         width: 100px;
         height: 100px;
            
        }

        .cart {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
        }

        .menu {
            background-color: white;
            list-style: none;
            padding: 0;
            display: flex;
        }

        .menu li {
            margin-right: 10px;
        }

        .banner {
          background-image: cover;
        }
        .img{
            height: 60px;
            width: 60px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
        <img class="logo" src="img/logo33.png" alt="logo"></div>
        <a href="view/viewcart.php" class="cart">Giỏ hàng </a>

        <?php
        if (isset($_COOKIE['usr'])) {
            echo $_COOKIE['usr'];
        }
        ?>
        <?php
        if (isset($_COOKIE['usr']))
            echo '<img class="img" src=" img/'. $_COOKIE['img'] . '" class="icon-logo">';
        ?>

        <?php
        if (isset($_COOKIE['usr']))
            echo '<a href="model/logout.php">logout</a>';
        else echo '<a href="index.php?page=login">login</a>';
        ?>

    </div>
    <ul class="menu">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="index.php?page=about">About</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="view/sanpham.php">Sản phẩm</a></li>
    <span class="cart">
        <a href="blog.html"> <i class="fa-solid fa-cart-shopping"></i>  </a>
    </span>
</ul>

    <img class="banner" src="img/7.jpg" alt="Banner">

    <!-- Nội dung trang web -->
</body>
</html>
