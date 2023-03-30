<?php
    function createPhoneNumber($numberArray)
    {
    $firstThreeNumber=$numberArray[0].$numberArray[1].$numberArray[2];
    $secondThreeNumber=$numberArray[3].$numberArray[4].$numberArray[5];
    $thirdFourNumber=$numberArray[6].$numberArray[7].$numberArray[8].$numberArray[9];
        echo "output =>"."(".$firstThreeNumber.")"." "." ".$secondThreeNumber."-".$thirdFourNumber;
    }
    createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]); 