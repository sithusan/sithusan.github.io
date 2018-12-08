<?php require_once('dbCon.php'); ?>
<?php

// sql to create table
$sql = "CREATE TABLE tb_cat (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table tb_cat created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 