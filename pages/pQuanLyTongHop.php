<?php
    $a = (isset($_GET['b'])) ? $_GET['b'] : 1; 
    
    switch ($a) {
        case 1:
            include ("pages/pAdminThongTin.php");
            break;
        case 2: 
            include ("pages/pThemSanPham.php");
            break;
        case 3: 
            include ("pages/pXoaSanPham.php");
            break;
        case 4:
            include ("pages/pSuaSanPham.php");
            break;
        case 5:
            include ("pages/pLietKeSanPham.php");
            break;
        case 6:
            include ("pages/pTimKiemSanPham.php");
            break;
        case 7:
            include ("pages/pThemLoaiSanPham.php");
            break;
        case 8:
            include ("pages/pXoaLoaiSanPham.php");
            break;
        case 9:
            include ("pages/pSuaLoaiSanPham.php");
            break;
        case 10:
            include ("pages/pLietKeLoaiSanPham.php");
            break;
        case 11:
            include ("pages/pTimKiemLoaiSanPham.php");
            break;
        case 12:
            include ("pages/pThemNhaSanXuat.php");
            break;
        case 13:
            include ("pages/pXoaNhaSanXuat.php");
            break;
        case 14:
            include ("pages/pSuaNhaSanXuat.php");
            break;
        case 15:
            include ("pages/pLietKeNhaSanXuat.php");
            break;
        case 16:
            include ("pages/pTimKiemNhaSanXuat.php");
            break;
        case 17:
            include ("pages/pThemTaiKhoan.php");
            break;
        case 18:
            include ("pages/pXoaTaiKhoan.php");
            break;
        case 19:
            include ("pages/pSuaTaiKhoan.php");
            break;
        case 20:
            include ("pages/pLietKeTaiKhoan.php");
            break;
        case 21:
            include ("pages/pTimKiemTaiKhoan.php");
            break;
        case 22:
            include ("pages/pThemDonHang.php");
            break;
        case 23:
            include ("pages/pXoaDonHang.php");
            break;
        case 24:
            include ("pages/pSuaDonHang.php");
            break;
        case 25:
            include ("pages/pLietKeDonHang.php");
            break;
        case 26:
            include ("pages/pTimKiemDonHang.php");
            break;

        default:
            include "pages/pError.php";
            break;
    }
?>