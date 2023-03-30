<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_03</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
    if (isset($_GET['sub'])) {
    $dob = $_GET['dob'];
    $todayDate = date("Y-m-d");
    if (!$dob) {
        echo "<p style='color:red;'>";
        echo "You need to fill your birthday!"; 
        echo "</p>";
    }
    elseif ($todayDate < $dob) {
        echo "<p style='color:red;'>";
        echo "Your input date is greather than today!"; 
        echo "</p>";
    }
    else {
        $todayYear = date('Y' , strtotime($todayDate));
        $todayMonth = date('m' , strtotime($todayDate));
        $today = date('d' , strtotime($todayDate));

        $birthdayYear = date('Y' , strtotime($dob));
        $birthdayMonth = date('m' , strtotime($dob));
        $birthday = date('d' , strtotime($dob));
        if ($todayYear == $birthdayYear) {
            $yourYear = $todayYear - $birthdayYear;
            echo "<p >";
            echo "Your age is " .$birthdayMonth." month and ".$birthday." days"; 
            echo "</p>";
        }
        else {
            $yourYear = ($todayYear-1)- $birthdayYear;
            echo "<p >";
            echo "Your age is " .$yourYear." Years, " .$birthdayMonth." month and ".$birthday." days"; 
            echo "</p>";
        }
    }
}
?>
  <h1>Age Calculator</h1>
  <form action="" method="get">
    <label>Date of birth : </label>
    <input type="date" name="dob" class="dateof" ><br>
    <input type="submit" value="Calculate" name="sub" class="btn">
  </form>
</body>
</html>