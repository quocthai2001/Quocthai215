<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/trang-chinh/style.css">
	<link rel="shortcut icon" type="image/png" href="../css/trang-chinh/img/TBT.png"/>
</head>
<body>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../css/trang-chu/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="banner">
            <video autoplay muted loop id="myVideo">
                <source src="../css/trang-chinh/img/Shop.mp4" type="video/mp4">
              </video>
            <div class="row">

                <div class="col-sm-2">
                    <div class="logo">
                        <img src="../css/trang-chinh/img/TBT.png" alt="">
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="nav">
                        <ul>
                            <li class="active"><a href="index.php">TRANG CHỦ</a></li>
                            <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="sign">
                        <?php
                            session_start();
                            if(isset($_SESSION["user"]))
                            {
                        ?>
                        <a  class="signup-btn" href="../tai-khoan/thong-tin-tk.php" style="text-decoration: none" ><span><?= $_SESSION['user']['ho_ten']; ?></span></a>
                        <?php } elseif(isset($_SESSION['user1']))
                        { ?> <a  class="signup-btn" href="../admin/khach-hang/khach-hang-list.php" style="text-decoration: none" ><span><?= $_SESSION['user1']['ho_ten']; ?></span></a>
                        <?php }
                        else { ?>
                         <a class="signup-btn" href="../tai-khoan/login.php" style="text-decoration: none"><span>Đăng nhập</span> </a>
                         <?php }?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>