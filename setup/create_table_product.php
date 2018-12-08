<?php require_once('../function/dbCon.php'); ?>
<?php

// sql to create table
$sql = "CREATE TABLE tb_product (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
code varchar(30),
name VARCHAR(30) NOT NULL,
cat_id varchar(30),
brand_id VARCHAR(6),
price    varchar(30),
image    varchar(30),
qty      varchar(30),
description varchar(121)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table tb_brand created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 