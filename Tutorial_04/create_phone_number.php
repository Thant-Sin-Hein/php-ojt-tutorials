<?php
    function createPhoneNumber($numberArray)
    {
        $phone_number = "(" . implode("", array_slice($numberArray, 0, 3)).") ". implode("", array_slice($numberArray, 3, 3))." -" .implode("", array_slice($numberArray, 6));
        echo "output->".$phone_number; 
    }
    createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 1]);
?>

