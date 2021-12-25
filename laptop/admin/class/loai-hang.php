<?php
    require_once ('connect.php');
    
    // Insert dữ liệu vào bảng loại hàng
    function loai_hang_insert($ten_loai){
        $sql = "INSERT INTO loai_hang(ten_loai) VALUES (?)";
        pdo_execute($sql,$ten_loai);
    }

    // Cập nhật dữ liệu vào bảng loại hàng
    function loai_hang_update($ma_loai, $ten_loai){
        $sql = "UPDATE loai_hang SET ten_loai=? WHERE ma_loai=?";
        pdo_execute($sql,$ten_loai,$ma_loai);
    }

    function loai_hang_delete($ma_loai){
        $sql = "DELETE FROM loai_hang WHERE ma_loai=?";
        if(is_array($ma_loai)){
            foreach($ma_loai as $ma){
                pdo_execute($sql,$ma);
            }
        }else{
            pdo_execute($sql,$ma_loai);
        }
    }

    function loai_hang_select_all(){
        $sql = "SELECT * FROM loai_hang ORDER BY ma_loai ASC";
        return pdo_query($sql);
    }

    function loai_hang_select_by_id($ma_loai){
        $sql = "SELECT * FROM loai_hang WHERE ma_loai=?";
        return pdo_query_one($sql,$ma_loai);
    }
?>