<?php
    include 'bai4.1.php';

    $numbers = [];
    $results = null;
    $numbersearch = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form input và chuyển thành mảng số nguyên
        $numbers = array_map('intval', explode(',', $_POST['numbers']));
        $numbersearch = (int)($_POST['search']);
        // Xử lý mảng sử dụng các hàm đã định nghĩa
        $results = [
            'sum' => sumArray($numbers),
            'max' => maxArray($numbers),
            'min' => minArray($numbers),
            'sortedAscending' => sortArrayAscending($numbers),
            'searchArray' => searchArray($numbers,$numbersearch),
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bai4.css">
</head>
<body>

    <h1>Array Functions</h1>
    <div style="text-align: center;">
        <form method="post" action="">
            <label for="numbers">Nhập mảng:</label>
            <input type="text" id="numbers" name="numbers" required>
            <input type="submit" value="Submit">
            <br>
            <div style="margin-right: 145px;">
                <label for="numbers" >GT cần tìm:</label>
                <input type="text text1" id="search" name="search" required>
            </div>
        </form>
    </div>
    <?php 
    if ($results !== null): ?>
        <table>
            <tr>
                <td>Mảng ban đầu:</td>
                <td><?php echo implode(', ', $numbers); ?></td>
            </tr>
            <tr>
                <td>Tổng các giá trị của mảng:</td>
                <td><?php echo $results['sum']; ?></td>
            </tr>
            <tr>
                <td>Giá trị lớn của mảng:</td>
                <td><?php echo $results['max']; ?></td>
            </tr>
            <tr>
                <td>Giá trị nhỏ nhất của mảng:</td>
                <td><?php echo $results['min']; ?></td>
            </tr>
            <tr>
                <td>Mảng tăng dần:</td>
                <td><?php echo implode(', ', $results['sortedAscending']); ?></td>
            </tr>
            <tr>
                <td>Kiểm tra phần tử có trong mảng:</td>
                <td><?php echo $results['searchArray']. " ". "có trong mảng" ?></td>
            </tr>
        </table>
    <?php endif; ?>

</body>
</html>