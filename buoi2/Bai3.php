<?php

    function tinhTong($a, $b) {
        return $a + $b;
    }


    function tinhHieu($a, $b) {
        return $a - $b;
    }

    function tinhTich($a, $b) {
        return $a * $b;
    }

    function tinhThuong($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Không thể chia cho 0";
        }
    }

    function kiemTraChanLe($n) {
        if ($n % 2 == 0) {
            return "Số $n là số chẵn.";
        } else {
            return "Số $n là số lẻ.";
        }
    }

    function checkNguyenTo($n) {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
        
    }
 
    
?>