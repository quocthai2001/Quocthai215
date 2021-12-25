<?php
    require_once ('connect.php');
    require_once ('loai-hang.php');

    function hang_hoa_select_by_id($ma_sp){
        $sql = "SELECT * FROM san_pham WHERE ma_sp=?";
        return pdo_query_one($sql,$ma_sp);
    }
    function hang_hoa_select_by_loai($ma_loai){
        $sql = "SELECT * FROM san_pham WHERE ma_loai=?";
        return pdo_query($sql,$ma_loai);
    }
    function hang_hoa_insert($ten_sp,$hinh,$hinh1,$hinh2,$hinh3,$don_gia,$mo_ta,$ma_loai)
	{
        $sql = "INSERT INTO san_pham(ten_sp,hinh,hinh1,hinh2,hinh3,don_gia,mo_ta,ma_loai) VALUES (?,?,?,?,?,?,?,?)";
        pdo_execute($sql,$ten_sp,$hinh,$hinh1,$hinh2,$hinh3,$don_gia,$mo_ta,$ma_loai);
    }
    function hang_hoa_update($ma_sp,$ten_sp,$hinh,$hinh1,$hinh2,$hinh3,$don_gia,$mo_ta,$ma_loai){//sửa sản phẩm
        $sql = "UPDATE san_pham SET ten_sp=?, don_gia=?, hinh=?, hinh1=?, hinh2=?, hinh3=?, ma_loai=?, mo_ta=? WHERE ma_sp=?";//cập nhật tt sp theo mã sp
        pdo_execute($sql, $ten_sp, $don_gia, $hinh, $hinh1, $hinh2, $hinh3, $ma_loai, $mo_ta, $ma_sp);
        }
    function hang_hoa_delete($ma_sp){
        $sql = "DELETE FROM san_pham WHERE ma_sp=?";
        if(is_array($ma_sp)){
            foreach($ma_sp as $ma){
            pdo_execute($sql,$ma);
            }
            }else{
                pdo_execute($sql,$ma_sp);
            }
        }    
?>