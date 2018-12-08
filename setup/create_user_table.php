<?php require_once('	dbCon.php'); ?>
<?php

// sql to create table
$sql = "CREATE TABLE tb_user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
address VARCHAR(255) NOT NULL,
phone VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table tb_brand created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 