<?php
        session_start();
        extract($_REQUEST);
        unset($_SESSION['cart'][$ma_sp]);
        header('location: danh-sach-gio-hang.php');
    ?>