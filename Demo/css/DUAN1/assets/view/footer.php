<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        /* Phần chung cho footer */

.logo{
    height: 100px;
    width: 100px;
}
.footer-top {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

/* Logo and email */
.footer-grid_section_w3layouts {
    flex: 1 0 calc(33.33% - 20px); /* Chia thành 3 cột */
    margin-bottom: 20px;
}

/* Các cột cuối cùng */
.footer-right {
    flex: 2 0 calc(66.66% - 20px); /* Chia thành 2 cột */
}

/* Các cột bên trong cột cuối cùng */
.bottom-w3layouts-sec-nav {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

/* Mỗi cột trong cột cuối cùng */
.footer-grid_section_w3layouts {
    flex: 1 0 calc(33.33% - 20px); /* Chia thành 4 cột */
}



    </style>

<footer>
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_w3layouts">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a href="index.html">
                            <img class="logo" src="img/logo33.png" alt="logo">
                        </a>
                    </h2>
                    <p>Sản phẩm việt, chất lượng Âu.</p>
                    <h4 class="sub-con-fo ad-info my-4">Catch on Social</h4>
                    
                </div>
                <div class="col-lg-8 footer-right">
                    <div class="w3layouts-news-letter">
                        <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Newsletter</h3>

                        <p>Sản phẩm mang đến cho khách hàng một trãi nghiệm tốt nhất.</p>
                        <form action="#" method="post" class="w3layouts-newsletter">
                            <input type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn1"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>

                        </form>
                    </div>
                    <div class="row mt-lg-4 bottom-w3layouts-sec-nav mx-0">
                        <div class="col-md-4 footer-grid_section_w3layouts">
                            <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Information</h3>
                            <ul class="list-unstyled w3layouts-icons">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="mt-3">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="mt-3">
                                    <a href="#">Gallery</a>
                                </li>
                                <li class="mt-3">
                                    <a href="#">Services</a>
                                </li>
                                <li class="mt-3">
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 footer-grid_section_w3layouts">
                            <!-- social icons -->
                            <div class="agileinfo_social_icons">
                                <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Customer Service</h3>
                                <ul class="list-unstyled w3layouts-icons">

                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Delivery & Returns</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Waranty</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Terms & Condition</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#">Privacy Plolicy</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- social icons -->
                        </div>
                        <div class="col-md-4 footer-grid_section_w3layouts my-md-0 my-5">
                            <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Info</h3>
                            <div class="contact-info">
                                <div class="footer-address-inf">
                                    <h4 class="ad-info mb-2">Phone</h4>
                                    <p>0100109106-011</p>
                                </div>
                                <div class="footer-address-inf my-4">
                                    <h4 class="ad-info mb-2">Email </h4>
                                    <p><a href="mailto:info@example.com">info@gmail.com</a></p>
                                </div>
                                <div class="footer-address-inf">
                                    <h4 class="ad-info mb-2">Location</h4>
                                    <p>Honey Avenue, New York City</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="cpy-right text-left row">
                        <p class="col-md-10">© 2019 Bootie. All rights reserved | Design by
                            <a href="http://w3layouts.com"> W3layouts.</a>
                        </p>
                        <!-- move top icon -->
                        <a href="#home" class="move-top text-right col-md-2"><span class="fa fa-long-arrow-up" aria-hidden="true"></span></a>
                        <!-- //move top icon -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

</body>

</html>
