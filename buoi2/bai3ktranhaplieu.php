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
<h2>KIỂM TRA SỐ</h2>
    <form action="Bai3ktrakq.php" method="post">
        <table>
            <tr>
                <td>Chọn phép kiểm tra:</td>
                <td>
                    <input type="radio" name="check" value="even_odd" required>Kiểm tra số chẵn/lẻ
                    <input type="radio" name="check" value="nto" required>Kiểm tra số nguyên tố
                </td>
            </tr>
            <tr>
                <td>Số cần kiểm tra:</td>
                <td><input type="number" name="check_number" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="check_number_btn" value="Kiểm tra"></td>
            </tr>
        </table>
    </form>
</body>
</html>