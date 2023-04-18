<?php
if (isset($_POST['create'])) {
    $qrName = $_POST['qrtext'];
    $path='images/';
    $qrcode=$path.$qrName.".png";
    if (file_exists($qrcode)) {
        echo "<P class='text-danger text-center w-100 ' style='position:absolute;top:22%;font-size:13px;'>*Your QR is already exits!</P>";
    }
}
?>