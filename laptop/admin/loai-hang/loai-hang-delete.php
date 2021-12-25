<?php
    require_once ('../class/loai-hang.php');

    extract($_REQUEST);

    loai_hang_delete($ma_loai);

    header('location: loai-hang-list.php');

?>