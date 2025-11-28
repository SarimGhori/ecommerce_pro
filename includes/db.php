<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
if(!$conn){ die("DB Connection Failed: " . mysqli_connect_error()); }
?>