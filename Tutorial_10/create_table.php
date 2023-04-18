<?php
include("db.php");
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
img VARCHAR(255),
address TEXT NOT NULL,
Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_date DATETIME NULL
)";
if (mysqli_query($connect, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}
?>