<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        form button[type="submit"]:hover {
            background-color: #45a049;
        }

        #error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
    $error_message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nameauthor = trim($_POST["nametgia"]);
        $namesach = trim($_POST["namesach"]);
        $namexuatban = trim($_POST["namexb"]);
        $namxb = trim($_POST["namxb"]);
        

        if (empty($nameauthor) && empty($namesach) && empty($namexuatban) && empty($namxb)) {
            $error_message = "Vui lòng điền tất cả thông tin.";
        }
        else if (empty($nameauthor)) {
            $error_message = "Vui lòng điền tên tác giả.";
        }
        else if (empty($namesach)) {
            $error_message = "Vui lòng điền tên sách.";
        }
        else if (empty($namexuatban)) {
            $error_message = "Vui lòng điền nhà xuất bản.";
        }
        else if (empty($namxb)) {
            $error_message = "Vui lòng điền năm xuất bản.";
        }
        else if (!is_numeric($namxb)) {
            $error_message = "Năm xuất bản phải là số.";
        }
        else {
            echo "<h2>Thông tin về sách đã nhập:</h2>";
            echo "Tên tác giả: " . htmlspecialchars($nameauthor) . "<br>";
            echo "Tên sách: " . htmlspecialchars($namesach) . "<br>";
            echo "Nhà xuất bản: " . htmlspecialchars($namexuatban) . "<br>";
            echo "Năm xuất bản: " . htmlspecialchars($namxb) . "<br>";
            exit;
        }
    }
?>


<form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Tác giả</label>
    <input id="name" type="text" name="nametgia" value="<?php echo isset($nameauthor) ? htmlspecialchars($nameauthor) : ''; ?>">
    <br>
    <label>Tên sách</label>
    <input id="namesach" type="text" name="namesach" value="<?php echo isset($namesach) ? htmlspecialchars($namesach) : ''; ?>">
    <br>
    <label>Nhà xuất bản</label>
    <input id="namexb" type="text" name="namexb" value="<?php echo isset($namexuatban) ? htmlspecialchars($namexuatban) : ''; ?>">
    <br>
    <label>Năm xuất bản</label>
    <input id="namxb" type="number" name="namxb" value="<?php echo isset($namxb) ? htmlspecialchars($namxb) : ''; ?>">
    <br>
    <p id="error-message"><?php echo $error_message; ?></p>
    <button type="submit" name="submit">Submit</button>

</form>

    <script src="validate.js"></script>
</body>
</html>


