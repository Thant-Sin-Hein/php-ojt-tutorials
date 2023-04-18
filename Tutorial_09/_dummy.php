<?php
include("db.php");
$title="Naming";
$content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
$checkbox="Published";
$todayDate=date("2022-12-30");
$insertcustomer="INSERT INTO posts(Title,Content,Is_published,Date)values('$title','$content','$checkbox','$todayDate')";
$runinsert=mysqli_query($connect,$insertcustomer);
if ($runinsert) {
     echo "<script>alert('Post Created Sucessful.')</script>";
}
?>