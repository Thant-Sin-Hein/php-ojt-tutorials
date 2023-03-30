<?php
    error_reporting(E_ALL ^ E_WARNING);
    function arrayDiff($arr1,$arr2) {
        if ((int)$arr1[0]!=(int)$arr2[0] && (int)$arr1[0]!=(int)$arr2[1] && (int)$arr1[0]!=(int)$arr2[2]) {
            echo $arr1[0];
        }
        if ((int)$arr1[1]!=(int)$arr2[0] && (int)$arr1[1]!=(int)$arr2[1] && (int)$arr1[1]!=(int)$arr2[2]) {
            echo $arr1[1];
        }
        if ((int)$arr1[2]!=(int)$arr2[0] && (int)$arr1[2]!=(int)$arr2[1] && (int)$arr1[2]!=(int)$arr2[2]) {
            echo $arr1[2];
        }
    }
    arrayDiff([1, 2], [1]);
?>