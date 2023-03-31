<?php
    function arrayDiff($arr1,$arr2) {
        foreach ($arr1 as $value) {
            if (!in_array($value, $arr2)) {
                $differences[] = $value;
            }
        }
        print_r($differences);
    }
    arrayDiff([1 , 2 , 3  ], [ 1 , 2 ]);
?>