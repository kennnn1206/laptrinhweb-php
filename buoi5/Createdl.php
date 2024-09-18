<?php
// Tạo kết nối
$conn = mysqli_connect("sql110.infinityfree.com","if0_37103060","NguyenTuanAnh","if0_37103060_b5_mydb");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công.<br>";
}
//them du lieu
$sql_insert = "INSERT INTO MyGuests (firstname, lastname, email) 
                VALUES  ('John', 'Doe', 'johndoe@example.com'),
                        ('Jane', 'Smith', 'jane@example.com'),
                        ('James', 'Johnson', 'james@example.com'),
                        ('Emily', 'Brown', 'emily@example.com'),
                        ('Michael', 'Davis', 'michael@example.com')";

if (mysqli_query($conn, $sql_insert)) {
    echo "Thêm mới thành công.<br>";
} else {
    echo "Loi thêm mới: " . mysqli_error($conn);
}

mysqli_close($conn);
?>