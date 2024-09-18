<?php
$servername = "localhost";
$username = "root";
$password = "";
// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    mysqli_query($conn, "SET NAMES 'utf8'");
    echo "Kết nối thành công.<br>";
}

//tao database
$sql_create_database = "CREATE DATABASE b5_mydb";

if (mysqli_query($conn, $sql_create_database)) {
    echo "Tạo database b5_mydb thành công.<br>";
} else {
    echo "Loi tạo database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>