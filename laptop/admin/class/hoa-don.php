<?php
    require_once ('connect.php');
    
    function hoa_don_select_all(){
        $sql = "SELECT * FROM hoa_don ORDER BY ma_hd ASC";
        return pdo_query($sql);
    }


    function hoa_don_select_by_id($ma_hd){
        $sql = "SELECT * FROM hoa_don WHERE ma_hd=?";
        return pdo_query_one($sql,$ma_hd);
    }

    

    function hoa_don_chi_tiet_select_all(){
        $sql = "SELECT * FROM hoa_don_chi_tiet ORDER BY ma_hd DESC";
        return pdo_query($sql);
    }

    
    function hoa_don_chi_tiet_select_by_id($ma_hd){
        $sql = "SELECT * FROM hoa_don_chi_tiet 
        JOIN san_pham ON hoa_don_chi_tiet.ma_sp = san_pham.ma_sp
        WHERE hoa_don_chi_tiet.ma_hd=?";
        return pdo_query($sql,$ma_hd);
    }

?>