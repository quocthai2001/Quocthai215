<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/lien-he/products.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="../css/trang-chinh/img/TBT.png">
    <title>Liên hệ</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../bigshoes/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
            <div class="login">
            <?php 
                    session_start();
                    if(isset($_SESSION['user'])){
                  ?>
                  <a href="../tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                    <?php }elseif(isset($_SESSION['user1'])){ ?>
                        <a href="../admin/khach-hang/khach-hang-list.php"><p><strong>XIN CHÀO <?=$_SESSION['user1']['ho_ten']?></strong></p></a>
                  <?php }elseif(!isset($_SESSION['user']) && !isset($_SESSION['user1'])){ ?>
                    <a href="../../laptop/tai-khoan/login.php" style="color:rgb(212, 212, 212)"><p><strong>ĐĂNG NHẬP /
                      <a href="../../laptop/tai-khoan/dang-ky.php" style="color:rgb(212, 212, 212)">ĐĂNG KÍ</a></strong></p></a> 
                    <?php }?>
                </div>



            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="logo">
                <a href="index.php"><img src="../css/trang-chinh/img/TBT.png" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">

                <div class="giohang" style = "position: reletive;">
               
                    <?php
                            $sll = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){
                                    extract($item);
                                    $sll+= $sl;
                                }
                            }
                        ?>
                    <span style = "position: absolute;padding:3px 8px;background-color:#fff;border-radius:50px;left:295px;top:25px;" ><?=$sll?></span>
                <ul>
                        <li style="color: aliceblue;font-size: 16px;text-decoration: none"><a href="don-mua.php">Đơn mua</a></li>
                        <li><p style="color: rgb(212, 212, 212);font-size: 14px;">GIỎ HÀNG</p></li>
                       <a href="danh-sach-gio-hang.php"><li><i class="fa fa-shopping-basket" style="font-size:28px;color:rgb(255, 255, 255)"></i></li></a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="bao-hanh.php">BẢO HÀNH</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


   
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6">
                <div class="lienhe">
                    <h6>THÔNG TIN LIÊN HỆ</h6>

                    <table class="tus">
                        <tr>
                            <td> <img src="../../bigshoes/css/lien-he/img/a.png" alt=""> </td>
                            <td>273 An Dương Vương - Phường 3 - Quận 5 - TPHCM</td>
                        </tr>
                        <tr>
                            <td><img src="../../bigshoes/css/lien-he/img/f.png" alt=""></td>
                            <td>0375736735</td>
                        </tr>
                        <tr>
                            <td><img src="../../bigshoes/css/lien-he/img/s.png" alt=""></td>
                            <td>tranlequocthai@gmail.com</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="nu"><img src="../../bigshoes/css/lien-he/img/u.png" alt=""></td>

                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form">
                    <table>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.669726937899!2d106.68006961462243!3d10.759917092332744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b7c3ed289%3A0xa06651894598e488!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1607277768947!5m2!1svi!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

                    
    <div class="container-fluid now2" style="margin-top: 70px;background:rgb(54, 54, 54);color:white;width:100%;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Hỗ trợ</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-4">
                        <div class="fo">
                            <ul>

                                <li>
                                <p>
                                    Khi đến với TBT shop bạn sẽ cảm thấy hài lòng về trách nhiệm và chất lượng sản phẩm <br><br>
                                    Xin cám ơn !                                    
                                </p>
                                </li>
                                <li><i class="fa fa-facebook"></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>