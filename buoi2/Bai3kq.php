<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <table>
            <?php require 'Bai3.php';
                if (isset($_POST['calculate'])) {
                    $num1 = $_POST['number1'];
                    $num2 = $_POST['number2'];
                    $operation = $_POST['operation'];
                    switch ($operation) {
                        case 'add':
                            $kq = tinhTong($num1,$num2);
                            $dau = "Cộng";
                            break;
                        case 'subtract';
                            $kq = tinhHieu($num1,$num2);
                            $dau = "Trừ";
                            break;
                        case 'multiply';
                            $kq = tinhTich($num1,$num2);
                            $dau = "Nhân";
                            break;
                        case 'divide';
                            $kq = tinhThuong($num1,$num2);
                            $dau = "Chia";
                            break;
                    }
                }
            ?>
            <tr>
                <td>Chọn phép tính:</td>
                <td><?php echo "$dau"?></td>
            </tr>
            <tr>
                <td>Số 1:</td>
                <td><input type="number" value="<?php echo "$num1" ?>"></td>
            </tr>
            <tr>
                <td>Số 2:</td>
                <td><input type="number" value="<?php echo "$num2" ?>"></td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td><input type="number" value="<?php echo "$kq" ?>"></td>
            </tr>
        </table>
        <a href="./Bai3nhaplieu.php">Quay lại trang trước</a>
</body>
</html>