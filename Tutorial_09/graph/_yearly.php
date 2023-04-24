<?php 
include('../db.php');
$totalweek="SELECT DATE_FORMAT(created_date, '%M') AS month_of_year, COUNT(*) AS count
FROM posts
GROUP BY month_of_year
ORDER BY FIELD(month_of_year, 'January', 'February', 'March', 'April','May' , 'June', 'July','August','September','October','November','December')";
$week=mysqli_query($connect,$totalweek);
foreach ($week as $data) {
    $month[]=$data["month_of_year"];
    $numberMonth[]=$data["count"];
}
$insertedTime=array_combine($month,$numberMonth);
$weeklyInserted=array("January"=>0,"February"=>0,"March"=>0,"April"=>0,"May"=>0,"June"=>0,"July"=>0,"August"=>0,"September"=>0,"October"=>0,"November"=>0,"December"=>0);
$combine=array_replace($weeklyInserted,$insertedTime);
foreach($combine as $com) {
    $total[]=$com;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monthly</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
  <script src="../libs/chartjs/chart.umd.min.js"></script>
</head>
<body>
<div class="d-flex justify-content-around mt-5 mb-4">
<a href="../index.php"   class="btn btn-secondary btn-sm">Back</a>
<div>
  <a href="_weekly.php" class="btn btn-outline-secondary btn-sm" >Weekly</a>
  <a href="_monthly.php" class="btn btn-outline-secondary btn-sm" >Monthly</a>
  <a href="_yearly.php" class="btn btn-outline-secondary btn-sm" style="background:#332D2D;color:white;">Yearly</a>
</div>
</div>
<div style="width:80%;" class='mt-0 mb-0 ms-auto me-auto'>
 <canvas id="myChart"></canvas>
</div>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April','May' , 'June', 'July','August','September','October','November','December'],
      datasets: [{
        label: '# Yearly Created Posts',
        data: <?php echo json_encode($total) ?>,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script src="../libs/js/bootstrap.bundle.min.js"></script>
<script src="../libs/js/validate.js"></script>
</body>
</html>