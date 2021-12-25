<?php
    require_once ('../class/hang-hoa.php');

    extract($_REQUEST);

    hang_hoa_delete($ma_sp);

    header('location: hang-hoa-list.php');

?>