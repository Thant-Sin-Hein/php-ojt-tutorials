<?php
    error_reporting(E_ALL ^ E_WARNING);
    function arrayDiff($arr1,$arr2) {
    $count=count($arr1+$arr2);
    for ($i=0; $i < $count; $i++) { 
        if ((int)$arr1[$i]!=(int)$arr2[$i]) {
            echo $arr1[$i];
        }
    }
  
 

    }
    arrayDiff([1, 2], [1]);
    echo "<br>";
    arrayDiff([1, 2, 2], [1]);
    echo "<br>";
    arrayDiff([1, 2, 2], [2]);
    echo "<br>";
    arrayDiff([1, 2, 2], []);
    echo "<br>"; 
    arrayDiff([], [1, 2]);
    echo "<br>"; 
    arrayDiff([1, 2, 3], [1, 2]);
?>