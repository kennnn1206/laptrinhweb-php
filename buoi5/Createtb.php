
<?php
// Tạo kết nối
$conn = mysqli_connect("sql110.infinityfree.com","if0_37103060","NguyenTuanAnh","if0_37103060_b5_mydb");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công.<br>";
}
//tao bang 
$sql_create_table = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql_create_table)) {
    echo "Tạo bảng MyGuests thành công.<br>";
}

mysqli_close($conn);
?>