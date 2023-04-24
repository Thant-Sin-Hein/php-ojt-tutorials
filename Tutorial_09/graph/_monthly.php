<?php 
include('../db.php');
$sql = "SELECT DATE_FORMAT(created_date, '%m-%d-%Y') AS date, COUNT(*) AS count
FROM posts
WHERE created_date BETWEEN '2022-12-01' AND '2022-12-31'
GROUP BY date
ORDER BY date";
$rundate=mysqli_query($connect,$sql);
foreach ($rundate as $date) {
    $numberDate[]= $date['date'];
    $numbercount[]=$date['count'];
}
$insertedTime=array_combine($numberDate,$numbercount);

$year = date('2022');
    $month = date('12');
    $num_days = date('t', strtotime("$year-$month-01"));
    $date = [];
    for($day = 1; $day <= $num_days; $day++){
        $formatted_day = sprintf("%02d", $day);
        array_push($date , date("$month-$formatted_day-$year"));
    }
    $insertzero=[];
    for($zero = 1; $zero <= 31; $zero++){
        array_push($insertzero , "0");
    }
$monthInserted=array_combine($date,$insertzero);
$combine=array_replace($monthInserted,$insertedTime);
foreach($combine as $com) {
    $total[]=$com;
}
foreach(range(1, 31) as $number) {
    $monthly[]= "12-".$number ."-2022";
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
  <a href="_weekly.php" class="btn btn-outline-secondary btn-sm">Weekly</a>
  <a href="_monthly.php" class="btn btn-outline-secondary btn-sm" style="background:#332D2D;color:white;">Monthly</a>
  <a href="_yearly.php" class="btn btn-outline-secondary btn-sm">Yearly</a>
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
      labels:<?php echo json_encode($monthly) ?>,
      datasets: [{
        label: '# Monthly Created Post',
        data:<?php echo json_encode($total) ?>,
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