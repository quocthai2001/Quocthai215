<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/danh-sach-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/danh-sach-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="../css/trang-chinh/img/TBT.png">
    <title>Sản phẩm</title>
    <style>
        .sanpham{
            position:relative;
        }
        .sanpham:hover img{
            opacity: 0.4;
            transform: scale(1.05);
            transition: all 0.5s;
        }
        .sanpham .chi-tiet{
            position:absolute;
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: black;

        }
        .sanpham:hover .chi-tiet{
            opacity: 1;
            font-weight:bold;
            z-index:1;

        }
        .chi-tiet{
            background-color: #313a40;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            font-family: "Roboto Condensed", sans-serif;

        }
        
    </style>
</head>

<body> 
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
                        <a href="../tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user1']['ho_ten']?></strong></p></a>
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


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="padding-left: 0px;">
                <div class="chuyen">
                    <p><span><a href="index.php" style="text-decoration:none;color:black">TRANG CHỦ </a></span> / SẢN PHẨM</p>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-left: 0px;margin-top: 42px;">

                <div class="row" style="margin-left: 0px;">
                    <form action="danh-sach-sp.php" method="get">

                    <div class="serch">
                        <input type="text" placeholder="Tìm kiếm..." name="keyword">
                        <button type="submit"><i class="fa fa-search" style="font-size:20px;color:rgb(255, 255, 255)"></i></button>
                    </div>
                    </form>
                </div>
				<br>
				<div class="row" style="margin-left: 0px;">
					<form action="tim-kiem-theo-gia.php" method="post">
				    <nav class="pricerange">
                      <p>Khoảng giá</p>
					  
						<div class="pricerangep">
                            <input id="price1" name="price1" class="price" type="number"  placeholder="$Từ" min="0" max="50000000" 
                            style="width:180px;">
                        <div class="hr"><hr ></hr></div> 	
                           <input id="price2" name="price2" class="price" placeholder="$Đến" type="number" max="50000000" style="width:180px;"></div>
                        <br>
                        <button type="submit" name="range" value="1" class="submitinput btn" style="background:black;color:white">
                        <b>Tìm kiếm</b></button></nav>
				</form>
				</div>
                <div class="row" style="margin-left: 0px;">
                    <?php
                        require_once ('../admin/class/loai-hang.php');
                        extract($_REQUEST);
                        $items = loai_hang_select_all();
                    ?>
                    <div class="row" style="margin-top: 35px;margin-left: 0px;">

                        <ul class="list-group">
                            <li class="list-group-item active">DANH MỤC</li>
                            <?php 
                                foreach($items as $item){
                                extract($item);
                                ?>
                            <a href="sp-cung-loai.php?ma_loai=<?=$ma_loai?>"><li class="list-group-item"><?=$ten_loai?></li></a> 
                            <?php } ?>
                        </ul>

                    </div>
                </div>


            </div>

          <div class="col-md-9">
				<div class="row" >		
                <?php
       		   	   $result ="";
                    $conn = mysqli_connect('localhost', 'root', '', 'laptop');
                    if(!empty(($_GET['keyword'])))
                    {
                        $search = $_GET['keyword'];
                        $result = mysqli_query($conn, $sql ="SELECT count(ma_sp) AS total FROM san_pham WHERE (CONCAT(ten_sp,don_gia) LIKE '%". $search ."%')");
                    }
                    else
                    {
                        $result = mysqli_query($conn, 'select count(ma_sp) AS total FROM san_pham');
                    }
                    $row = mysqli_fetch_assoc($result);
                    $total_records = $row['total'];
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $limit = 9; 
                    $total_page = ceil($total_records / $limit);
                    if ($current_page > $total_page){
                        $current_page = $total_page;
                    }
                    else if ($current_page < 1){
                        $current_page = 1;
                    }
                    $start = ($current_page - 1) * $limit;
                
                    if(!empty(($_GET['keyword'])))
                    {
                        $search = $_GET['keyword'];
                        $result = mysqli_query($conn, $sql ="SELECT * FROM san_pham WHERE (CONCAT(ten_sp,don_gia) LIKE '%". $search ."%') LIMIT $start, $limit");
                    }
                    else
                    {
                        $result = mysqli_query($conn, "SELECT * FROM san_pham LIMIT $start, $limit");
                    }
                                $html ='';
                            
                while($item = $result->fetch_assoc()){
                ?>
			
				<div class="sanpham">
                    <a href="../trang-chinh/chi-tiet-sp.php?ma_sp=<?=$item['ma_sp']?>">
                    <span class="chi-tiet" style="margin-left: 10px">CHI TIẾT</span></a>
                    <a href="chi-tiet-sp.php?ma_sp=<?=$item['ma_sp']?>">
                    <img  src="../css/danh-sach-sp/img/<?=$item['hinh']?>" alt="" style="height:230px;width:250px;"></a>
					<div class="glow-wrap">
                       <i class="glow"></i>
                    </div>
                    <div class="text">
                        <div class="name">
                           <?=$item['ten_sp']?>
                        </div>
                        <div class="price" style="display:inline;color:red;border-radius:15%">
                            <span><b><?=number_format($item['don_gia'])?> <u>đ</u></b></span>
                        </div>
                    </div>
                </div>
				<?php } ?>
				</div> 
                                                          	
	
     <br>
	 <br>			
	 
           <?php echo $html;?>
      	<div class="" style="margin-left:350px;text-align: center;float:left">
          <ul class="pagination">
           <?php 
	        for ($i = 1; $i <= $total_page; $i++)
			{
                if ($i == $current_page){
                    echo '<li class="page-item"><a class="page-link">'.$i.'</a></li> ';
                }
                else
				{
				  if(isset($_GET['keyword']))
			      {
			         echo '<li class="page-item">
                     <a class="page-link" href="danh-sach-sp.php?keyword='.$_GET['keyword'].'&page='.$i.'">'.$i.'</a></li ';
			      }
			      else
			      {
                    echo '<li class="page-item"><a class="page-link" href="danh-sach-sp.php?page='.$i.'">'.$i.'</a></li>';
				  }                   
               }
            }  
           ?>
            </li></ul>
			    </div>
			</div>
	</div>
	    </div>
</div>
    </div>

    <div class="container-fluid now2" style="margin-top: 70px;background:rgb(54, 54, 54);color:white;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fo">
                        <img src="../css/trang-chu/img/TBT.png" alt="" style ="width:60px;">
                        </div>
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
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>
</html>







