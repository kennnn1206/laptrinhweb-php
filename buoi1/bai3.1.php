<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép tính trên hai số</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <th>Chọn phép tính:</th>
                <td>
                    <select name="pheptinh" id="pheptinh">
                        <option value="cong">Cộng</option>
                        <option value="tru">Trừ</option>
                        <option value="nhan">Nhân</option>
                        <option value="chia">Chia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Số thứ nhất:</th>
                <td><input type="number" name="so1" id="so1" required></td>
            </tr>
            <tr>
                <th>Số thứ hai:</th>
                <td><input type="number" name="so2" id="so2" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Tính"></td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pheptinh = $_POST['pheptinh'];
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];
        $ketqua = "";

        // Xử lý các phép tính
        switch ($pheptinh) {
            case "cong":
                $ketqua = $so1 + $so2;
                break;
            case "tru":
                $ketqua = $so1 - $so2;
                break;
            case "nhan":
                $ketqua = $so1 * $so2;
                break;
            case "chia":
                if ($so2 != 0) {
                    $ketqua = $so1 / $so2;
                } else {
                    $ketqua = "Không thể chia cho 0!";
                }
                break;
        }
    }
    ?>
    <p>Kết quả: <?php echo $ketqua; ?></p>
    <a href="javascript:history.back()">Quay lại trang trước</a>
</body>
</html>