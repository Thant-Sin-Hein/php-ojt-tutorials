<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_02</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Diamond Pattern</h1>
     <?php
    function makeDiamondShape($row)
    {
        if ( $row == 0 ) {
            echo $row. " parameter must be greather than 0";
        }
        elseif ( $row == 1 ) {
            echo "<div style='text-align:center;margin-top:50px;'>
            <span> * </span>
            </div>";
        }
        elseif ( $row == 3 ) {
            echo "<div style='text-align:center;margin-top:50px;'>
            <span> * </span>
            <span> *** </span>
            <span> * </span>
            </div>";
        }
        elseif ( $row == 5 ) {
            echo "<div style='text-align:center;margin-top:50px;'>
            <span> * </span>
            <span> *** </span>
            <span> ***** </span>
            <span> *** </span>
            <span> * </span>
            </div>";
        }
        elseif ( $row == 7 ) {
            echo "<div style='text-align:center;margin-top:50px;'>
            <span> * </span>
            <span> *** </span>
            <span> ***** </span>
            <span> ******* </span>
            <span> ***** </span>
            <span> *** </span>
            <span> * </span>
            </div>";
        }
        elseif ( $row == 9 ) {
            echo "<div style='text-align:center;margin-top:50px;'>
            <span> * </span>
            <span> *** </span>
            <span> ***** </span>
            <span> ******* </span>
            <span> ********* </span
            <span> ******* </span>
            <span> ***** </span>
            <span> *** </span>
            <span> * </span>
            </div>";
        }
        elseif ( $row == 11 ) {
            echo "<div style='text-align:center;margin-top:50px;'>
            <span> * </span>
            <span> *** </span>
            <span> ***** </span>
            <span> ******* </span>
            <span> ********* </span>
            <span> *********** </span>
            <span> ********* </span>
            <span> ******* </span>
            <span> ***** </span>
            <span> *** </span>
            <span> * </span>
            </div>";
        }
        elseif ( is_string($row) ) {
            echo "<p class='bg'>row parameter must be number</p>";
        }
        elseif ( $row > 11 ) {
            echo "<p class='bg'>row parameter must be less than 11</p>";
        }
        elseif ( $row = 2 ) {
            echo "<p class='bg'>row parameter must be odd number</p>";
        }
        elseif ( $row = 4 ) {
            echo "<p class='bg'>row parameter must be odd number</p>";
        }
        elseif ( $row = 6 ) {
            echo "<p class='bg'>row parameter must be odd number</p>";
        }
        elseif ( $row = 8 ) {
            echo "<p class='bg'>row parameter must be odd number</p>";
        }
        elseif ( $row = 10 ) {
            echo "<p class='bg'>row parameter must be odd number</p>";
        }
      
        else {
            echo "<p class='bg'>Somethig Wrong</p>";
        }

    }
    //makeDiamondShape(0);
    //makeDiamondShape(1);
    //makeDiamondShape(2);
    //makeDiamondShape(6);
    //makeDiamondShape(3);
    //makeDiamondShape(5);
    //makeDiamondShape(7);
    //makeDiamondShape(9);
    //makeDiamondShape(10);
    makeDiamondShape(11);
    //makeDiamondShape(12);
    //makeDiamondShape('mgmg');
    ?>
    
</body>
</html>