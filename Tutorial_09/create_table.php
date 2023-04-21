<?php
include("db.php");
$sql = "CREATE TABLE posts (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255),
    Content TEXT,
    Is_published VARCHAR(255),
    created_date DATETIME,
    updated_date DATETIME NULL
)";
if (mysqli_query($connect, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>