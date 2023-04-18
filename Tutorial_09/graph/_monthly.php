<?php 
$server="localhost";
$username="root";
$password="panda269";
$database="posts";
$connect=mysqli_connect($server,$username,$password,$database);
if(!$connect){
    echo mysqil_error($connect);
}
$sql = "SELECT DATE_FORMAT(Date, '%m-%d-%Y') AS date, COUNT(*) AS count
FROM posts
WHERE Date BETWEEN '2022-12-01' AND '2022-12-31'
GROUP BY date
ORDER BY date";
$rundate=mysqli_query($connect,$sql);
foreach ($rundate as $date) {
    $numberDate[]= $date['date'];
    $numbercount[]=$date['count'];
}
$insertedTime=array_combine($numberDate,$numbercount);
$monthInserted= array("12-01-2022" => 0,"12-02-2022" => 0,"12-03-2022" => 0,"12-04-2022" => 0,"12-05-2022" => 0,"12-06-2022" => 0,"12-07-2022" => 0,"12-08-2022" => 0,"12-09-2022" => 0,"12-10-2022" => 0,"12-11-2022" => 0,"12-12-2022" => 0,"12-13-2022" => 0,"12-14-2022" => 0,"12-15-2022" => 0,"12-16-2022" => 0,"12-17-2022" => 0,"12-18-2022" => 0,"12-19-2022" => 0,"12-20-2022" => 0,"12-21-2022" => 0,"12-22-2022" => 0,"12-23-2022" => 0,"12-24-2022" => 0,"12-25-2022" => 0,"12-26-2022" => 0,"12-27-2022" => 0,"12-28-2022" => 0,"12-29-2022" => 0,"12-30-2022" => 0,);
$combine=array_replace($monthInserted,$insertedTime);
foreach($combine as $com) {
    $total[]=$com;
}
foreach(range(1, 30) as $number) {
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