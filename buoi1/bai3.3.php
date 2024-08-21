<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép tính và kiểm tra số</title>
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
    <form action="bai3.1.php" method="post">
        <table>
            <tr>
                <th>Chọn phép tính:</th>
                <td>
                    <input type="radio" id="cong" name="pheptinh" value="cong">
                    <label for="cong">Cộng</label><br>
                    <input type="radio" id="tru" name="pheptinh" value="tru">
                    <label for="tru">Trừ</label><br>
                    <input type="radio" id="nhan" name="pheptinh" value="nhan">
                    <label for="nhan">Nhân</label><br>
                    <input type="radio" id="chia" name="pheptinh" value="chia">
                    <label for="chia">Chia</label>
                </td>
            </tr>
            <tr>
                <th>Số thứ nhất:</th>
                <td><input type="number" id="so1" name="so1"></td>
            </tr>
            <tr>
                <th>Số thứ hai (nếu cần):</th>
                <td><input type="number" id="so2" name="so2"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Tính"></td>
            </tr>
        </table>
    </form>

    <h2>KIỂM TRA SỐ</h2>
    <form action="bai3.2.php" method="post">
        <table>
            <tr>
                <th>Chọn phép kiểm tra:</th>
                <td>
                    <input type="radio" id="kiemtrachan" name="pheptinh" value="kiemtrachan">
                    <label for="kiemtrachan">Kiểm tra số chẵn/lẻ</label><br>
                    <input type="radio" id="kiemtrannt" name="pheptinh" value="kiemtrannt">
                    <label for="kiemtrannt">Kiểm tra số nguyên tố</label>
                </td>
            </tr>
            <tr>
                <th>Số cần kiểm tra:</th>
                <td><input type="number" id="so1" name="so1"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Kiểm tra"></td>
            </tr>
        </table>
    </form>
</body>
</html>