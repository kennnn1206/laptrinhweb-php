<?php 
// Biến kết nối toàn cục
global $conn;
 
// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu chưa kết nối thì thực hiện kết nối
    try {
        $conn = new PDO("mysql:host=sql110.infinityfree.com;dbname=if0_37103060_qlsinhvien", "if0_37103060", "NguyenTuanAnh");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
}
 
// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    $conn = null;
}
 
// Hàm lấy tất cả sinh viên
function get_all_students()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from sinhvien";
     
    // Thực hiện câu truy vấn
    $result = array();
     
    try {
        // Chuẩn bị câu truy vấn
        $stmt = $conn->prepare($sql);
        
        // Thực thi truy vấn
        $stmt->execute();
        
        // Lấy tất cả kết quả dưới dạng mảng kết hợp
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Lỗi: " . $e->getMessage();
    }
     
    // Trả kết quả về
    return $result;
}
 
// Hàm lấy sinh viên theo ID
function get_student($student_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();

    // Câu truy vấn lấy sinh viên theo ID
    $sql = $conn->prepare("SELECT * FROM sinhvien WHERE id = :id");
    
    // Gán giá trị cho tham số :id
    $sql->bindParam(':id', $student_id, PDO::PARAM_INT);
    
    // Thực thi câu truy vấn
    $sql->execute();

    // Lấy kết quả
    $result = $sql->fetch(PDO::FETCH_ASSOC); // Trả về một mảng kết hợp nếu có dữ liệu
    
    // Ngắt kết nối
    disconnect_db();
    
    // Trả kết quả về, nếu không có kết quả thì trả về mảng rỗng
    return $result ? $result : [];
}
 
// Hàm thêm sinh viên
function add_student($student_name, $student_sex, $student_birthday)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();

    $sql = "INSERT INTO sinhvien (hoten, gioitinh, ngaysinh) VALUES (:hoten, :gioitinh, :ngaysinh)";
     
    try {
        // Chuẩn bị câu truy vấn
        $stmt = $conn->prepare($sql);

        // Gán giá trị vào các tham số truy vấn
        $stmt->bindParam(':hoten', $student_name);
        $stmt->bindParam(':gioitinh', $student_sex);
        $stmt->bindParam(':ngaysinh', $student_birthday);

        // Thực thi truy vấn
        $result = $stmt->execute();

        // Trả về kết quả (true nếu thành công, false nếu thất bại)
        return $result;
        
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Lỗi: " . $e->getMessage();
        return false;
    }
}
 
 
// Hàm sửa sinh viên
function edit_student($student_id, $student_name, $student_sex, $student_birthday)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $student_name       = addslashes($student_name);
    $student_sex        = addslashes($student_sex);
    $student_birthday   = addslashes($student_birthday);
     
    // Câu truy sửa
    $sql = $conn->prepare("
            UPDATE sinhvien SET
            hoten = '$student_name',
            gioitinh= '$student_sex',
            ngaysinh = '$student_birthday'
            WHERE id = $student_id
    ");
     
    $sql->execute();

    // Lấy kết quả
    $result = $sql->fetch(PDO::FETCH_ASSOC); // Trả về một mảng kết hợp nếu có dữ liệu
    
    return $result;
}
 
 
// Hàm xóa sinh viên
function delete_student($student_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn xóa sinh viên
    $sql = "DELETE FROM sinhvien WHERE id = :id";

    try {
        // Chuẩn bị câu truy vấn
        $stmt = $conn->prepare($sql);

        // Gán giá trị vào tham số truy vấn
        $stmt->bindParam(':id', $student_id, PDO::PARAM_INT);

        // Thực thi truy vấn
        $result = $stmt->execute();

        // Trả về kết quả (true nếu thành công, false nếu thất bại)
        return $result;

    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Lỗi: " . $e->getMessage();
        return false;
    }
}
