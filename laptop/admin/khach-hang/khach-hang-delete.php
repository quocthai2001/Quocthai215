<?php
    require_once ('../class/tai-khoan.php');
    extract($_REQUEST);
    tai_khoan_delete($ten_tk);
    header('location: khach-hang-list.php');
?>