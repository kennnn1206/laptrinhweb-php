<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
            width: 500px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
</style>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form action="Bai3kq.php" method="post">
        <table>
            <tr>
                <td>Chọn phép tính:</td>
                <td>
                    <input type="radio" name="operation" value="add" required>Cộng
                    <input type="radio" name="operation" value="subtract" required>Trừ
                    <input type="radio" name="operation" value="multiply" required>Nhân
                    <input type="radio" name="operation" value="divide" required>Chia
                </td>
            </tr>
            <tr>
                <td>Số thứ nhất:</td>
                <td><input type="number" name="number1" required></td>
            </tr>
            <tr>
                <td>Số thứ hai (nếu cần):</td>
                <td><input type="number" name="number2"></td>
            </tr>
            <tr>
                <td><input type="submit" name="calculate" value="Tính">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>