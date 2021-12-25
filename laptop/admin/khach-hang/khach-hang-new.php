<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
	<link rel="shortcut icon" type="image/png" href="../../css/admin/img/TBT.png">
    <title>ADMIN</title>
	<!-- Bootstrap Styles-->
    <link href="../../css/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
     <link href="../../css/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../../css/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
    session_start();
    // require_once '../class/tai-khoan.php';
    if(!isset($_SESSION['user1']))
    {
        header('Location:../../trang-chinh/index.php');
    }
    else
    {
     ?>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../trang-chinh/index.php" style="background-color:#00CC99;"><strong style = "margin-left: 85px;">TBT</strong></a>
            </div>
           
    <!-- Nav bar-->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../../tai-khoan/logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../../trang-chinh/index.php"><i class="fa fa-dashboard"></i>TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="../loai-hang/loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>DANH MỤC</a>
                    </li>
                    <li>
                        <a href="../hang-hoa/hang-hoa-list.php"><i class="fa fa-qrcode"></i>SẢN PHẨM</a>
                    </li>
                    
                    <li>
                        <a href="../khach-hang/khach-hang-list.php"><i class="fa fa-user"></i>TÀI KHOẢN</a>
                    </li>
                    <li>
                        <a href="../hoa-don/hoa-don-list.php"><i class="fa fa-edit"></i>ĐƠN HÀNG</a>
                    </li>       
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ KHÁCH HÀNG</h1>
                            <p>Điền đầy đủ thông tin để tiến hành đăng ký khách hàng mới :</p>

                            <!-- /. CODE XỬ LÝ PHP  -->
                            <?php
                                require_once ('../class/tai-khoan.php');

                                extract($_REQUEST);
                                if(array_key_exists("btn_insert",$_REQUEST)){

                                    tai_khoan_insert($ten_tk,$mat_khau,$ho_ten,$dia_chi);
                                    unset($ten_tk,$mat_khau,$ho_ten,$dia_chi);
									    $message = "Thêm tài khoản thành công !";
                                        echo "<script type='text/javascript'>alert('$message');</script>";

                                }
                            ?>
                            <!-- /. CONTENT  -->
                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">Tên đăng nhập:</label>
                            <input type="text" class="form-control" name="ten_tk"
                                placeholder="Nhập tên đăng nhập ...">
                            </div>

                            <div class="form-group">
                            <label for="">Họ và tên:</label>
                            <input type="text" class="form-control" name="ho_ten"
                                placeholder="Nhập họ và tên ...">
                            </div>

                            <div class="form-group">
                            <label for="">Mật khẩu:</label>
                            <input type="text" class="form-control" name="mat_khau"
                                placeholder="Nhập mật khẩu ...">
                            </div>
                            
                            <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" class="form-control" name="email"
                                placeholder="Nhập email ...">
                            </div>

                            <div class="form-group">
                            <label for="">Địa chỉ:</label>
                            <input type="text" class="form-control" name="dia_chi"
                                placeholder="Nhập địa chỉ ...">
                            </div>

                            <div class="form-group">
                            <label for="">Vai trò:</label>
                            <input type="text" class="form-control"
                                placeholder="Khách hàng ..." readonly>
                            </div>

                            <button type="submit" name="btn_insert" class="btn btn-primary">Thêm mới</button>
                        </form>
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <?php } ?>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../../css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../../css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../../css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
