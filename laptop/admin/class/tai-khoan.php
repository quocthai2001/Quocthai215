<?php
    require_once ('connect.php');

    function tai_khoan_insert($ten_tk,$mat_khau,$ho_ten,$dia_chi){
        $sql = "INSERT INTO tai_khoan(ten_tk,mat_khau,ho_ten,dia_chi) VALUES(?,?,?,?)";
        pdo_execute($sql,$ten_tk,$mat_khau,$ho_ten,$dia_chi);
    }

    function tai_khoan_update($ten_tk,$mat_khau,$ho_ten,$dia_chi){
        $sql = "UPDATE tai_khoan SET ho_ten=?,mat_khau=?,dia_chi=? WHERE ten_tk=?";
        pdo_execute($sql,$ho_ten,$mat_khau,$dia_chi,$ten_tk);
    }

    function tai_khoan_delete($ten_tk){
        $sql = "DELETE FROM tai_khoan WHERE ten_tk=?";
        if(is_array($ten_tk)){
            foreach($ten_tk as $ma){
                pdo_execute($sql,$ma);
            }
        }else{
            pdo_execute($sql,$ten_tk);
        }
    }

    function tai_khoan_select_all(){
        $sql = "SELECT * FROM tai_khoan";
        return pdo_query($sql);
    }

    function tai_khoan_select_by_id($ten_tk){
        $sql = "SELECT * FROM tai_khoan WHERE ten_tk=?";
        return pdo_query_one($sql,$ten_tk);
    }

    function khach_hang_change_password($ma_kh, $mat_khau_moi){
        $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
        pdo_execute($sql, $mat_khau_moi, $ma_kh);
    }
?>