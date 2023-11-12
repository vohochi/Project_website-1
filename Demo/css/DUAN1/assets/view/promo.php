
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
/* CSS cho phần "promo" */
.feature-grids {
    display: flex;
    justify-content: space-between;
}

/* CSS cho phần "bottom-gd" */
.gd-bottom {
    border: 2px solid #007BFF; /* Đổi màu viền thành màu xanh */
    padding: 20px;
    text-align: center;
    flex: 1;
    max-width: calc(25% - 20px); /* Độ rộng tối đa cho mỗi phần */
}

/* CSS cho biểu tượng (icon-gd) */
.icon-gd {
    font-size: 2rem;
    color: #007BFF; /* Đổi màu biểu tượng thành màu xanh */
}

/* CSS cho phần "icon-gd-info" */
.icon-gd-info {
    padding: 1rem;
}

/* CSS cho tiêu đề "h3" */
.icon-gd-info h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

/* CSS cho đoạn mô tả "p" */
.icon-gd-info p {
    font-size: 1rem;
    margin: 0;
}


</style>



<section class="about py-md-5 py-5">
      
            <div class="feature-grids row px-3">
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-truck" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">FREE SHIPPING</h3>
                            <p>On all order over $2000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row bottom-gd2-active">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">FREE RETURN</h3>
                            <p>On 1st exchange in 30 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-gift" aria-hidden="true"></span></div>

                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">MEMBER DISCOUNT</h3>
                            <p>Register & save up to $29%</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-usd" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">PREMIUM SUPPORT</h3>
                            <p>Support 24 hours per day</p>
                        </div>
                    </div>
                </div>
           
        </div>
    </section>
    <!-- //ab --></body>
</html>