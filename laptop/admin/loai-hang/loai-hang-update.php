<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
	<link rel="shortcut icon" type="image/png" href="../../css/admin/img/TBT.png">
    <title>ADMIN</title>
    <link href="../../css/admin/css/bootstrap.css" rel="stylesheet" />
    <link href="../../css/admin/css/font-awesome.css" rel="stylesheet" />
    <link href="../../css/admin/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
    session_start();
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
           

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../../tai-khoan/logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>

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
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ DANH MỤC</h1>
                            <p>Cập nhật lại thông tin loại hàng: </p>

                            <?php
                                require_once ('../class/loai-hang.php');
                                extract($_REQUEST);
                                $items = loai_hang_select_by_id($ma_loai);
                                extract($items);

                                extract($_REQUEST);
                                if(array_key_exists("btn_update",$_REQUEST)){
                                    loai_hang_update($ma_loai,$ten_loai);
                                }
                            ?>

                            <form action="" method="POST">
                                <div class="form-group">
                                <label>Mã loại:</label>
                                <input
                                    class="form-control"
                                    placeholder="Auto number ..."
                                    name="ma_loai"
                                    value = "<?=$ma_loai?>"
                                    readonly
                                />
                                </div>
                                <div class="form-group">
                                <label for="">Tên loại:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nhập tên loại ..."
                                    name="ten_loai"
                                    value="<?=$ten_loai?>"
                                />
                                </div>
                                <div class="form-group form-check"></div>
                            <button type="submit" name="btn_update" class="btn btn-danger">Cập nhật</button>
                            </form>
                        </div>

                    
		</div>
            </div>
        </div>
<?php } ?>
    <script src="../../css/admin/js/jquery-1.10.2.js"></script>
    <script src="../../css/admin/js/bootstrap.min.js"></script>
    <script src="../../css/admin/js/jquery.metisMenu.js"></script>
    <script src="../../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
