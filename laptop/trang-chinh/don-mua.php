<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="../css/trang-chinh/img/TBT.png">
    <title>Đơn mua</title>
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
                    if(isset($_SESSION['user']))
                    {
                ?>
                        <a href="../tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                <?php }
                      elseif(isset($_SESSION['user1']))
                      { ?>
                        <a href="../admin/khach-hang/khach-hang-list.php"><p><strong>XIN CHÀO <?=$_SESSION['user1']['ho_ten']?></strong></p></a>
                      <?php 
                          }elseif(!isset($_SESSION['user']) && !isset($_SESSION['user1'])){ ?>
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
                        <li style="color: aliceblue;font-size: 16px;"><a href="don-mua.php">Đơn mua</a></li>
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
                <div id="page-wrapper">
		            <div class="header"> 
                        <div class="page-header">
                            <h1>CÁC ĐƠN MUA</h1>
                            <p>Dưới đây là danh sách các đơn hàng mà khách hàng đã đặt mua: </p>
                            <?php
                                if(isset($_SESSION['user']))
	                            {
					
		                            $conn = mysqli_connect('localhost','root','','laptop');								
		                            $Total = 0;		
									$result1=mysqli_query($conn,"SELECT * FROM hoa_don WHERE ma_tk = '".$_SESSION['user']['ma_tk']."'"); 
                                    while($value = $result1->fetch_assoc())
									{
                            ?>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>MÃ HĐ</th>
                                    <th>MÃ TK</th>
                                    <th>NGÀY MUA</th>
                                    <th>GHI CHÚ</th>
                                    <th>TÌNH TRẠNG</th>
                                    <th>CHI TIẾT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><?=$value['ma_hd']?></td>
                                    <td><?=$value['ma_tk']?></td>
                                    <td><?=$value['ngay_mua']?></td>
                                    <td><?=$value['ghi_chu']?></td>
                                    <td> 
                                        <a href="thanh-toan-gio-hang.php?ma_hd=<?=$value['ma_hd']?>">
                                        <?php
                                            if($value['tinh_trang'] == 0){
                                                echo '<button class="btn btn-danger name="thanh_toan">';
                                                echo "Chưa xử lý";
                                            }else{
                                                echo '<button class="btn btn-primary name ="thanh_toan">';
                                                echo "Đã xử lý";
                                            }
                                        ?>
                                        </button></a>
                                    </td>
                                    <td><a href="chi-tiet-don-mua.php?ma_hd=<?=$value['ma_hd']?>"><button class="btn btn-success">Chi tiết</button></a></td>
                                  </tr>
                                <?php } }?>
                                </tbody>
                              </table>
                        </div>
		</div>
            </div>
    <script src="../../css/admin/js/jquery-1.10.2.js"></script>
    <script src="../../css/admin/js/bootstrap.min.js"></script>
    <script src="../../css/admin/js/jquery.metisMenu.js"></script>
    <script src="../../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
