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
            <tr>
                <td>Kết quả:</td>
                <td>
                    <?php require 'Bai3.php';
                        if (isset($_POST['check_number_btn'])) {
                            $checknb = $_POST['check_number'];
                            $check = $_POST['check'];

                            if ($check == 'even_odd') {
                                $kq = kiemTraChanLe($checknb);
                                echo "$kq";
                            }elseif ($check == 'nto') {
                                $kq = checkNguyenTo($checknb);
                                if ($kq) {
                                    echo "$checknb là số nguyên tố.";
                                } else {
                                    echo "$checknb không phải là số nguyên tố.";
                                }
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
        <a href="./bai3ktranhaplieu.php">Quay lại trang trước</a>
</body>
</html>