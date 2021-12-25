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
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ DANH MỤC</h1>
                            <p>Dưới đây là danh sách các loại hàng đã được thêm vào:</p>

                            <?php
                                require_once ('../class/loai-hang.php');

                                $items = loai_hang_select_all();
                            ?>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN LOẠI</th>
                                    <th>HÀNH ĐỘNG</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($items as $item){ 
                                     extract($item);
                                    ?> 
                                  <tr>
                                    <td><?=$ma_loai?></td>
                                    <td><?=$ten_loai?></td>
                                    <td> 
                                        <a href="loai-hang-update.php?ma_loai=<?=$ma_loai?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="loai-hang-delete.php?ma_loai=<?=$ma_loai?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                            <a href="../loai-hang/loai-hang-new.php"><button class="btn btn-danger">Thêm mới</button></a>
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
