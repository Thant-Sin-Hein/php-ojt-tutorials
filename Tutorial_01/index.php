<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 01</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>ChessBoard</h1>
<?php 
	function drawChessBorad($rows, $cols)
	{
    	echo "<script type='text/javascript'>alert('$rows. rows and .$cols. colums chess board')</script>";

		if ( $rows == 8 && $cols == 8 ) {
				echo "<table>";
				for ($row=1; $row < 9; $row++) { 
					echo "<tr>";
					 for ($col=1; $col <9 ; $col++) { 
						if (($row+$col)%2==0) {
							echo "<td class='white'></td>";
						}
						else {
							echo "<td class='black'></td>";
						}
						}
					echo "</tr>";
				}
				echo "</table>";
				
		}
			elseif ( $rows == 5 && $cols == 2 ) {
				echo "<table>";
					for ($row=1; $row < 3; $row++) { 
						echo "<tr>";
						 for ($col=1; $col <6 ; $col++) { 
							if (($row+$col)%2==0) {
								echo "<td class='white'></td>";
							}
							else {
								echo "<td class='black'></td>";
							}
						 }
						echo "</tr>";
					}
					echo "</table>";
			}
		elseif ( $rows == 6 && $cols == 6 ) {
			echo "<table>";
				for ($row=1; $row < 7; $row++) { 
					echo "<tr>";
					for ($col=1; $col < 7 ; $col++) { 
						if (($row+$col)%2==0) {
							echo "<td class='white'></td>";
						}
						else {
								echo "<td class='black'></td>";
						}
						}
					echo "</tr>";
				}
				echo "</table>";
		}
		elseif ( $rows == 0 && $cols == 1 ) {
			echo "<br>";
			echo  "<p class='bg'>row parameter must be greather than 0</p>";
		}
		elseif ( $rows == 1 && $cols == 0 ) {
			echo "<br>";
			echo "<p class='bg'>col parameter must be greather than 0</p>";
		}
		elseif ( $rows == 0 && $cols == 0 ) {
			echo "<br>";
			echo "<p class='bg'>rows and cols parameter must be greather than 0</p>";
		}
		elseif ( $rows == 'myrows' && $cols == 'mycols' ) {
			echo "<br>";
			echo "<p class='bg'>rows and cols parameter must be number</p>";
		}
		elseif ( is_string($rows) && is_string($cols) ) {
			echo "<br>";
			echo "<p class='bg'>rows and cols parameter must be number </p>";
		}
		elseif ( $rows == 5 &&  is_string($cols)  ) {
			echo "<br>";
			echo "<p class='bg'>cols parameter must be number </p>";
		}
		elseif ( $rows == 0 && is_string($cols)  ) {
			echo "<br>";
			echo "<p class='bg'>rows parameter must be greather than 0 and cols must be number </p>";
		}
		elseif ( is_string($rows)  && $cols == 0 ) {
			echo "<br>";
			echo "<p class='bg'>rows parameter must be number and cols must be  greather than 0 </p>";
		}
		else {
			echo "<p class='bg'>This type of chess does not exit in this page. </p>";
		}
	}
	
	drawChessBorad(8,8);
	//drawChessBorad(6,6);
	//drawChessBorad(5,2);
	//drawChessBorad(0,1);
	//drawChessBorad(1,0);
	//drawChessBorad(0,0);
	//drawChessBorad('myrows','mycols');
	//drawChessBorad(5,'mycols');
	//drawChessBorad(0,'mycols');
	//drawChessBorad('myrows',0);
	
?>

</body>
</html>