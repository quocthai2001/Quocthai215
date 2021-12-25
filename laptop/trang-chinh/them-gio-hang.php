<?php
$lifetime = 60*60*24*365;
session_set_cookie_params($lifetime,'/');
session_start();

require_once ('../admin/class/hang-hoa.php');
    extract($_REQUEST);
    $item = hang_hoa_select_by_id($ma_sp);
    extract($item);

    if(!empty($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        // Kiểm tra lần thứ 2 mua hàng đã có id phần tử mảng hay chưa dùng hàm array_key_exists
            if(array_key_exists($ma_sp,$cart)){
                $cart[$ma_sp] = array(
                    "sl" => (int)$cart[$ma_sp]["sl"]+1,
                    "price" =>$don_gia,
                    "name" =>$ten_sp,
                    "hinh" =>$hinh,
                    "ma_sp" =>$ma_sp,

                    
                );
            }else{
                $cart[$ma_sp] = array(
                    "sl" =>1,
                    "price" =>$don_gia,
                    "name" =>$ten_sp,
                    "hinh" =>$hinh,
                    "ma_sp" =>$ma_sp,

                    
                );
            }
    }else{
        // Lần đầu tiên mua hàng
        $cart[$ma_sp] = array(
            "sl" =>1,
            "price" =>$don_gia,
            "name" =>$ten_sp,
            "hinh" =>$hinh,
            "ma_sp" =>$ma_sp,
            
        );
    }
    $_SESSION['cart'] = $cart;
    

header('location: danh-sach-gio-hang.php');
?>