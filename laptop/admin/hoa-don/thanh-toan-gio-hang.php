<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
<?php
    require_once ('../class/hoa-don.php');
    extract($_REQUEST);
    $item = hoa_don_select_by_id($ma_hd);
    extract($item);

     $mahd = $ma_hd;
     $ngaymua = $ngay_mua;
     $ghichu = $ghi_chu;
     $tinhtrang = 1;
     $matk = $ma_tk;
     $conn = pdo_get_connection();
     $sql = "UPDATE hoa_don SET ngay_mua = '".$ngaymua."',ghi_chu = '".$ghi_chu."',tinh_trang = '".$tinhtrang."',ma_tk = '".$ma_tk."' WHERE ma_hd = '".$mahd."'";
     $conn->exec($sql);

     header('location: hoa-don-list.php');
?>
</body>
</html>