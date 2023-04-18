<?php 
$server="localhost";
$username="root";
$password="panda269";
$database="posts";
$connect=mysqli_connect($server,$username,$password,$database);
if(!$connect){
    echo mysqil_error($connect);
}
$totalweek="SELECT DATE_FORMAT(Date, '%W') AS day_of_week, COUNT(*) AS count
FROM posts
GROUP BY day_of_week
ORDER BY FIELD(day_of_week, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')";
$week=mysqli_query($connect,$totalweek);
foreach ($week as $data) {
    $numberday[]=$data["day_of_week"];
    $numberWeekly[]=$data["count"];
}
$insertedTime=array_combine($numberday,$numberWeekly);
$weeklyInserted=array("Monday"=>0,"Tuesday"=>0,"Wednesday"=>0,"Thursday"=>0,"Friday"=>0,"Saturday"=>0,"Sunday"=>0);
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
  <a href="_weekly.php" class="btn btn-outline-secondary btn-sm" style="background:#332D2D;color:white;">Weekly</a>
  <a href="_monthly.php" class="btn btn-outline-secondary btn-sm" >Monthly</a>
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
      labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday','Friday' , 'Saturaday', 'Sunday'],
      datasets: [{
        label: '# Weekly Created Post',
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