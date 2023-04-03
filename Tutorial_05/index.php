<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial_05</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php 
    echo "<div class='div1'>";
    echo "<h1>Test File</h1>";
    echo "<p>";
    $textFile=fopen("files/sample.txt","r") or die ("Unable to open file");
    echo fread($textFile,filesize("files/sample.txt"));
    echo "</p>";
    echo "<h1>Document File</h1>";
    echo "<p>";
    require "libs/vendor/autoload.php";
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $section = $phpWord->addSection();
    $objReader = \PhpOffice\PhpWord\IOFactory::createReader('Msdoc');
    $phpRead = $objReader->load("files/sample.doc");
    $section->getText($phpRead);
    $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpRead);
    if (!file_exists('libs/sample.html')) {
        $htmlWriter->save('libs/sample.html');
        $html = file_get_contents('libs/sample.html');
        echo $html;
    }else {
        $html = file_get_contents('libs/sample.html');
        echo $html;
    }
    echo "</p>";
    echo "<h1>Excel File</h1>";
    echo "<p>";
    require_once "libs/vendor/phpoffice/phpexcel/classes/PHPExcel.php";
    $path="files/sample.xlsx";
    $excelReader=PHPExcel_IOFactory::createReaderForFile($path);
    $excel_Obj=$excelReader->load($path);
    $worksheet=$excel_Obj->getSheet('0');
    $lastRow=$worksheet->getHighestRow();
    $colString=$worksheet->getHighestDataColumn();
    $colString_number=PHPExcel_cell::columnIndexFromString($colString);
    echo "<table style='width:97%;margin:0 auto;'>";
        for ($row=1; $row <= $lastRow; $row++) { 
            echo "<tr'>";
            for ($col=0; $col < $colString_number; $col++) {
                echo "<td style='border:1px solid rgba(0,0,0,0.2);font-size:13px;padding-left:8px;'>";
                echo $worksheet->getCell(PHPExcel_cell::stringFromColumnIndex($col).$row)->getValue();
                echo "</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
    echo "</p>";
    echo "<h1>CSV File</h1>";
    echo "<p>";
    echo "<table style='width:97%;margin:0 auto;'>";
    $start_row =1 ;
    if (($csv_file= fopen("files/sample.csv","r")) !==FALSE ) {
        while(($read_data=fgetcsv($csv_file,  1000, ",")) !==FALSE) {
            $column_count=count($read_data);
            echo "<tr style='border:1px solid rgba(0,0,0,0.2)'>";
            $start_row++;
            for ($c=0; $c < $column_count; $c++) { 
                echo "<td >" ;
                echo $read_data[$c];
                echo "</td>";
            }
            echo "</tr>";
        }
        fclose($csv_file);
    }
    echo "</table>";
    echo "</p>";
    echo "</div>";
?>
</body>
</html>