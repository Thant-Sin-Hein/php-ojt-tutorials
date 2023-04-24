<?php
include("db.php");



for ($i=0; $i < 6; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-01-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}
for ($i=0; $i < 8; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-02-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 3; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-03-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 2; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-04-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 8; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-06-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 8; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-08-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 3; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-10-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 5; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-11-09");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 5; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-01");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 5; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-03");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 2; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-04");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 5; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-08");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 8; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-10");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 1; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-12");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 8; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-17");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 8; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-20");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 5; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-25");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 5; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-27");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}

for ($i=0; $i < 5; $i++) { 
     $title="Naming";
     $content="Aliquam dictum interdum neque, sed viverra neque tempor in. Cras nec dapibus mauris. Phasellus placerat leo nec velit condimentum, sit amet euismod est convallis. Nullam cursus tellus non orci vestibulum, et faucibus velit tincidunt. Ut vel condimentum urna. Sed sed mauris vitae eros rutrum tincidunt in nec ipsum. Sed imperdiet lorem ligula, quis euismod lacus faucibus porttitor. Ut tincidunt, velit accumsan fermentum dictum, nisi mi facilisis tortor, sit amet consequat leo dui a felis. Proin non turpis ac arcu sodales pellentesque non eget est. Pellentesque non est at tortor vulputate faucibus. Cras dignissim elit odio, quis scelerisque libero euismod iaculis. Suspendisse ac lacus vitae diam euismod pulvinar consequat ac arcu. Etiam ut mi eget velit euismod aliquet eget eget nunc.";
     $checkbox="Published";
     $todayDate=date("2022-12-29");
     $insertcustomer="INSERT INTO posts(Title,Content,Is_published,created_date)values('$title','$content','$checkbox','$todayDate')";
     $runinsert=mysqli_query($connect,$insertcustomer);
     if ($runinsert) {
          echo "<script>alert('Post Created Sucessful.')</script>";
     }
}
?>