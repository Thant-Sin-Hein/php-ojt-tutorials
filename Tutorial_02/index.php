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
        
        if ( is_string($row) ) {
            echo "<p class='bg'>row parameter must be number</p>";
        }
        elseif ( is_int($row) ) {
            echo "<div style='text-align:center;margin-top:50px;'>";
            for ($i=1; $i <= $row; $i++) { 
                for ($j=1; $j <= (2*$row)-1 ; $j++) { 
                    if ($j>=$row-($i-1) && $j<=$row+($i-1)) {
                        echo "*";
                    }else {
                        echo "&nbsp;&nbsp";
                    }
                }
                echo '<br>';
            }
              for ($i=$row-1; $i <= $row; $i--) { 
                for ($j=1; $j <= (2*$row)-1 ; $j++) { 
                    if ($j>=$row-($i-1) && $j<=$row+($i-1)) {
                        echo "*";
                    }else {
                        echo "&nbsp;&nbsp";
                    }
                }
                echo '<br>';
            }
            echo "</div>";
        }
        else {
            echo "<p class='bg'>Somethig Wrong</p>";
        }

    }

    makeDiamondShape(5);
?>
    
</body>
</html>