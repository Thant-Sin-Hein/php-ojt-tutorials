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
		if (  is_int($rows) && is_int($cols)) {
				echo "<table>";
				for ( $i=0 ; $i < $rows; $i++) { 
					echo "<tr>";
					 for ($k=0; $k <$cols ; $k++) { 
						if (($i+$k)%2==0) {
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
		elseif ( $rows == 0 && is_int($cols) ) {
			echo "<br>";
			echo  "<p class='bg'>row parameter must be greather than 0</p>";
		}
		elseif ( is_int($rows) && $cols == 0 ) {
			echo "<br>";
			echo "<p class='bg'>col parameter must be greather than 0</p>";
		}
		elseif ( $rows == 0 && $cols == 0 ) {
			echo "<br>";
			echo "<p class='bg'>rows and cols parameter must be greather than 0</p>";
		}
		
		elseif ( is_string($rows) && is_string($cols) ) {
			echo "<br>";
			echo "<p class='bg'>rows and cols parameter must be number </p>";
		}
		elseif ( is_int($rows) &&  is_string($cols)  ) {
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
?>

</body>
</html>